<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index(){
        $user = Auth::user();
        $reservationTotal = Reservation::select('id')->where('users_id', $user->id)->count();
        $labTotal = Lab::select('id')->count();
        return view('pages.member.dashboard.index', compact('user','reservationTotal', 'labTotal'));
    }
}
