<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }
    public function Home(){
        return view('index') ;
        
    }
  
    
    public function About(){
        return view('About');
    }
}
