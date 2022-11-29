<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;
use App\Models\MstPrefecture;
use App\Models\MstRole;
use App\Models\Nurse;
use App\Models\User;
use App\Repositories\Nurse\NurseRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NurseAccountController extends Controller
{
    /**
     * @var UserRepositoryInterface
     */
    protected $userRepo, $nurseRepository;

    /**
     * NurseRedirectController constructor.
     * @param UserRepositoryInterface $userRepo
     */
    public function __construct(
        UserRepositoryInterface $userRepo,
        NurseRepositoryInterface $nurseRepository,
    ) {
        $this->userRepo = $userRepo;
        $this->nurseRepository = $nurseRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nurse = (object) Auth::user()->nurse->getAttributes();
        // dd($nurse);
        $prefectures = DB::table('mst_prefectures')->get();
        $stations = DB::table('stations')->get();
        $images = DB::table('images')->where('user_id', '=', $nurse->user_id)->get();
        $mst_prefecture_id = MstPrefecture::findOrFail($nurse->mst_prefecture_id);
        $mst_prefecture_name = $mst_prefecture_id->name;
        return view('nurse.mypage.index', with(compact('nurse', 'prefectures', 'stations', 'mst_prefecture_name', 'images')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function validateCredential(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', 'min:6', 'alpha_num'],
        ]);

        return redirect()->route('nurse.register.confirm')->withInput();
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'min:6', 'alpha_num'],
        ]);

        $user = $this->userRepo->create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mst_role_id' => MstRole::NURSE_ID,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('nurse.verification.notice');
    }

    /**
     * Redirect to index page with old inputs.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    function return(Request $request)
    {
        return redirect()->route('nurse.register.index')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display the verification notice.
     *
     * @return \Illuminate\Http\Response
     */
    public function showVerifyNotice()
    {
        if (is_null(auth()->user()->email_verified_at)) {
            return view('nurse.register.complete', ['email' => auth()->user()->email]);
        }

        return redirect()->route('nurse.home');
    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function emailVerify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect()->route('nurse.home');
    }

    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function resendVerificationEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    }

    public function getPrefecture()
    {
        $prefectures = DB::table('mst_prefectures')->get();
    }

    public function storeWayOfWorking(Request $request)
    {
        $currentNurse = (object) auth()->user()->nurse->getAttributes();
        $nurse = Nurse::find($currentNurse->id);
        $nurse->job_method = $request->expertise ? $request->expertise : $nurse->job_method;
        $nurse->occupation = $request->occupation ? $request->occupation : $nurse->occupation;
        $nurse->job_method = $request->wayofworking ? $request->wayofworking : $nurse->job_method;
        $nurse->desired_hourly_wage = $request->standardtime ? (int) $request->standardtime : $nurse->desired_hourly_wage;
        $nurse->desired_holiday_hourly_wage = $request->wage ? (int) $request->wage : $nurse->desired_holiday_hourly_wage;
        $nurse->home_visit_hourly_wage = $request->wageforhome ? (int) $request->wageforhome : $nurse->home_visit_hourly_wage;
        $nurse->qualification = $request->qualification ? (int) $request->qualification : $nurse->qualification;
        $nurse->created_user = $currentNurse->id;
        $nurse->updated_user = $currentNurse->id;

        $nurse->update();
        session()->flash('success', 'Update data successfully');

        return redirect()->route('nurse.profile')->with('success', 'Update personal infor success!');
    }

    public function storeJobHistory(Request $request)
    {
        $currentNurse = (object) auth()->user()->nurse->getAttributes();
        $nurse = Nurse::find($currentNurse->id);

        $request->validate([
            'graduation_school' => ['string', 'max:255', 'nullable'],
            'graduation_date' => ['date'],
            'other_information' => ['string', 'max:255', 'nullble']
        ]);

        $nurse->update(
            array_merge(
                $request->all(),
                [
                    'created_user' => $currentNurse->id,
                    'updated_user' => $currentNurse->id,
                ]
            )
        );

        return redirect()->route('nurse.profile')->with('success', 'Update personal infor success!');
    }

    public function createImage(Request $request, $image_type)
    {
        $currentNurse = (object) auth()->user()->nurse->getAttributes();
        $nurse = Nurse::find($currentNurse->id);

        if ($request->hasFile('avatar')) {
            $images =  DB::table('images')->where('user_id', '=', $nurse->user_id)->get();

            foreach ($images as $image) {
                if ($image->image_type == $image_type) {
                    $name = $request->file('avatar')->getClientOriginalName();
                    $final_name = time() . "_$image_type" . "_$name";
                    $request->file('avatar')->move('storage/images/', $final_name);
                    unlink(public_path($image->path));
                    DB::table('images')->where('user_id', '=', $nurse->user_id)->where('image_type', '=', $image_type)->update([
                        'path' => "/storage/images/$final_name"
                    ]);
                }
            };
        }
    }

    public function storeInfo(Request $request)
    {
        $this->createImage($request, 'nurse_avatar');
        $this->nurseRepository->nurseUpdate();
        return redirect()->route('nurse.profile')->with('success', 'Update personal infor success!');
    }

    public function storeLicense(Request $request)
    {
        $this->createImage($request, 'nurse_license');
        return redirect()->route('nurse.profile')->with('success', 'Update personal infor success!');
    }

    public function storeIdentity(Request $request)
    {
        $this->createImage($request, 'nurse_identify');
        return redirect()->route('nurse.profile')->with('success', 'Update personal infor success!');
    }
}
