<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('index');
    }

    public function history(Request $request){
        return view('history');
    }
    public function rulers(Request $request){
        return view('rulers');
    }

    public function contacts(Request $request){
        return view('contacts');
    }
}
