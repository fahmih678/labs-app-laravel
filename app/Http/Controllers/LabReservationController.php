<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LabReservationController extends Controller
{
    public function index(){
        $labs = Lab::all();
        return view('pages.member.lab-reservation.index', compact('labs'));
    }

    public function history(){
        $reservations = Reservation::where('users_id', Auth::user()->id)->get();
        // dd($reservations);
        return view('pages.member.reservation-history.index', compact('reservations'));
    }
    
    public function store(Request $request){
        $lab = Lab::find($request->input('labs_id'))->name;
        $user = Auth::user();
        $slug = Str::of($lab . ' ' . $user->username)->slug('-');
        $file = $request->file('invoice');

        if($request->file('invoice') != null) {
            $ekstensi = $file->getClientOriginalExtension();
            $nama_file = $slug ."-". Carbon::now()->timestamp . "." . $ekstensi;
            $file->storeAs('public/reservation', $nama_file);
        } else{
            $nama_file = null;
        }

        Reservation::create([
            'users_id' => $user->id,
            'labs_id' => $request->input('labs_id'),
            'slug' => $slug,
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'invoice' => $nama_file,
        ]);
        return redirect()->route('member.lab-reservation.index')->with('success', 'Reservation has been created successfully');
    }
}
