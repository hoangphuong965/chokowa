<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Repositories\MobileDetect\MobileDetectRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NurseAuthenticationController extends Controller
{
    /**
     * @var MobileDetectRepositoryInterface
     */
    protected $mobileDetectRepo;

    /**
     * AdminController constructor.
     * @param MobileDetectRepositoryInterface $mobileDetectRepo
     */
    public function __construct(
        MobileDetectRepositoryInterface $mobileDetectRepo
    ) {
        $this->mobileDetectRepo = $mobileDetectRepo;
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('nurse.home');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('nurse.home');
    }
}
