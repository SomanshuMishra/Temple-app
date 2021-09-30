<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    
    public function prasad(){
        return view('admin/ManagePrasadView');
    }

    public function eventType(){
        return view('admin/ManageEventTypeView');
    }

    public function event(){
        return view('admin/ManageEventView');
    }

    public function addUser(){
        return view('admin/AddUserView');
    }
}
