<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use DB;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin/AdminLoginView');
    }
    public function login(Request $req){
      
        $this->validate($req,[
            'email' => 'required|exists:App\Models\Admin,email',
            'password' => 'required'
        ]);
        $credential = $req->only('email','password');
        if(Auth::guard('admin')->attempt($credential)){
            return redirect()->route('admin.dashboard.get')->with("message","Login succssfully"); 
        }
        else{
            dd($credential);
        }
        
        
            
    }
}
