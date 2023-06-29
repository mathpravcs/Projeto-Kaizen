<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KodokanController extends Controller
{
    public function Kodokan()
    {
        return view('kodokan');
    }
}
