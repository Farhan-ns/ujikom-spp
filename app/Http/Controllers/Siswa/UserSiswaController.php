<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserSiswaController extends Controller
{
    public function home()
    {
        return view('siswa.home');
    }
}
