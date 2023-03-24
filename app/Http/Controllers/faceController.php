<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faceController extends Controller
{
    public function detect() {
        return view('faceDetect');
    }
}
