<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('user.profile');
    }

    public function profileSettings()
    {
        return view('user.setingprofile');
    }
}
