<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
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
        // $user = User::findOrFail($id);
        $user = Auth::user();
        unset($user['password']);
        return view('user.setingprofile', compact('user'));
        //return view('user.setingprofile');
    }
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(Auth::user()->id)->update(['password' => Hash::make($request->new_password)]);
        return redirect()->route('profile.index');
    }
}
