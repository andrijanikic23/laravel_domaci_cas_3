<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $current_time = date("h:i:s");
        $current_hour = date("h");
        return view("welcome", compact('current_time'), compact('current_hour'));
       

        
        
       
    }
    
}
