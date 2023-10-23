<?php

namespace App\Http\Controllers\Wiramuda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class c_bio extends Controller
{
    public function index(){
        return view('Wiramuda.bio.index');
    }
}
