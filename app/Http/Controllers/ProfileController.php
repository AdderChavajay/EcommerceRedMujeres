<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Purchase_made as Purchased;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $purchaseds = Purchased::where('user_id', Auth::user()->id)->with('user:name,id,last_name')->paginate(20);
        return view('user.profile', compact('purchaseds'));
    }

    public function profileSettings()
    {
        return view('user.setingprofile');
    }
}
