<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\city;

class citycontroller extends Controller
{
    public function index(Request $request,$data){

        
        

       
        $data=city::where('a', 'like', "%$data%")
        
        ->get();
        
        return $data;
    }
}
