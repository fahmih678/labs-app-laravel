<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $labs = Lab::all();
        return view('pages.home.index', compact('labs'));
    }
}
