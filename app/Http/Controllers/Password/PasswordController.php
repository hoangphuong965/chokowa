<?php

namespace App\Http\Controllers\Password;

use App\Http\Controllers\Controller;
use App\Models\MstRole;
use App\Models\User;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    /**
     * @var UserRepositoryInterface
     */
    protected $userRepo;

    /**
     * @var RoleRepositoryInterface
     */
    protected $roleRepo;

    /**
     * NurseRedirectController constructor.
     * @param UserRepositoryInterface $userRepo
     * @param RoleRepositoryInterface $roleRepo
     */
    public function __construct(
        UserRepositoryInterface $userRepo,
        RoleRepositoryInterface $roleRepo,
    ) {
        $this->userRepo = $userRepo;
        $this->roleRepo = $roleRepo;
    }
    
    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function sendPasswordResetEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
     
        $status = Password::sendResetLink(
            $request->only('email')
        );
     
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    /**
     * Display the password reset view.
     *
     * @param  string  $token
     * @return \Illuminate\View\View
     */
    public function index($token) 
    {
        return view('password.reset', ['token' => $token]);
    }

    /**
     * Update the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPassword(Request $request) 
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'confirmed', 'min:6', 'alpha_num'],
        ]);

        $redirectedRoute = '';
     
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use (&$redirectedRoute) {
                $this->userRepo->update($user->id, ['password' => Hash::make($password)], $user);

                $redirectedRoute = $this->roleRepo->find($user->mst_role_id)->name.'.login';
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route($redirectedRoute)->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
