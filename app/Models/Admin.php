<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class Admin extends Authenticatable
{   
    protected $table = 'tbl_admin_users';
    use HasFactory;
    public $timestamps = false;

    public static function ShowInfo($data){
        dd($data);
    }
    public static function Userdata(){
        $data = DB::select('select * from tbl_admin_users where role_id!=0');
        return $data;
    }


}
