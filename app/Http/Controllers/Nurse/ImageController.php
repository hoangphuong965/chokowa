<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    // View File To Upload Image
    public function index()
    {
        return view('nurse.mypage');
    }

// Store Image
    public function storeImage(Request $request)
    {
       dd($request);
    }
}
