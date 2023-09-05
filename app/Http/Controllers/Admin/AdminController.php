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



    private function sum($a, $b){
        return ($a+$b);
    
    }
}


