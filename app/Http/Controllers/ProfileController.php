<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('pages.profile.index', compact('user'));
    }

    public function update(Request $request){
        $user = User::find($request->input('id'));
        $user->update([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
        ]);

        return redirect()->route('profile.index')->with('success', 'Profile has been updated successfully');;
    }
}
