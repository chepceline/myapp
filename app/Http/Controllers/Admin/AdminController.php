<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard() {
        return view('admin.pages.dashboard');
        
    }
    public function users(){
        return view('admin.pages.users');
    }



    private function sum($a, $b){
        return ($a+$b);
    
    }
}


