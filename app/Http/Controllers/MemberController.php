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
        $reservations = Reservation::join('labs','reservations.labs_id','=','labs.id')->select('reservations.id','labs.name','reservations.start_time', 'reservations.end_time', 'reservations.created_at','reservations.updated_at')->latest()->take(10)->get();
        return view('pages.member.dashboard.index', compact('user','reservationTotal', 'labTotal', 'reservations'));
    }
}
