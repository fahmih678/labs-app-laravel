<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManajemenUserController extends Controller
{
    public function index(){
        $newUser = User::where('is_active', 0)->get();
        $activeUser = User::where('is_active', 1)->get();
        return view('pages.admin.manajemen-user.index', compact('newUser', 'activeUser'));
    }

    public function approve(Request $request){
        $user = User::select('id', 'is_active')->find($request->input('users_id'))->update([
            'is_active' => 1,
        ]);
        return redirect()->route('admin.manajemen-user.index')->with('success', 'User has been approved');
    }

    public function disapprove(Request $request){
        $user = User::select('id', 'is_active')->find($request->input('users_id'))->update([
            'is_active' => 0,
        ]);
        return redirect()->route('admin.manajemen-user.index')->with('success', 'User has been disapproved');
    }
}
