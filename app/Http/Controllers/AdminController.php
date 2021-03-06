<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
class AdminController extends Controller
{

    public function admin_dashboard(){
        return view('layouts.dashboard');
    }
    
    public function ticket(){
        return view('admin.ticket');
    }

    public function team(){
        return view('admin.team');
    }

    public function user(){
        return view('admin.user');
    }

    public function settings(){
        return view('admin.settings');
    }

}
