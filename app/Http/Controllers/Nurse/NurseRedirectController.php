<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;
use App\Repositories\MobileDetect\MobileDetectRepositoryInterface;
use Illuminate\Http\Request;

class NurseRedirectController extends Controller
{
    /**
     * @var MobileDetectRepositoryInterface
     */
    protected $mobileDetectRepo;

    /**
     * NurseRedirectController constructor.
     * @param MobileDetectRepositoryInterface $mobileDetectRepo
     */
    public function __construct(
        MobileDetectRepositoryInterface $mobileDetectRepo,
    ) {
        $this->mobileDetectRepo = $mobileDetectRepo;
    }

    public function redirectToStation()
    {
        if ($this->mobileDetectRepo->isMobile() || $this->mobileDetectRepo->isTablet()) {
            return redirect()->route('nurse.redirect-refuse');
        }
        
        return redirect()->route('station.home');
    }
}
