<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenReservationController extends Controller
{
    public function index(){
        return view('pages.admin.manajemen-reservation.index');
    }
}
