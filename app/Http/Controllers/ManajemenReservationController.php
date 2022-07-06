<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ManajemenReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::all();
        return view('pages.admin.manajemen-reservation.index', compact('reservations'));
    }

    public function approve(Request $request){
        $user = Reservation::select('id', 'is_approved')->find($request->input('reservation_id'))->update([
            'is_approved' => 'approved',
        ]);
        return redirect()->route('admin.manajemen-reservation.index')->with('success', 'Reservation has been approved');
    }
}
