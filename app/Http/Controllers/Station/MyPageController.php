<?php

namespace App\Http\Controllers\Station;

use App\Http\Controllers\Controller;
use App\Models\MstPrefecture;
use App\Repositories\MyPage\MyPageRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MyPageController extends Controller
{
    /**
     * @var MyPageRepositoryInterface
     */
    protected $mypageRepo;

    /**
     * NurseRedirectController constructor.
     * @param MyPageRepositoryInterface $mypageRepo
     */
    public function __construct(
        MyPageRepositoryInterface $mypageRepo,
    ) {
        $this->mypageRepo = $mypageRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nurse = (object) auth()->user()->nurse->getAttributes();
        $images = auth()->user()->images;
        $prefectures = MstPrefecture::select('id', 'name')->get();
        // dd($prefectures);    
        return view('station.mypage.index', compact('images', 'prefectures'));
    }

    public function getPrefecture()
    {
        $prefectures = DB::table('mst_prefectures')->get();
    }
}
