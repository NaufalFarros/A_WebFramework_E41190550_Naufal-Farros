<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home(){
        return view('index') ;
        
    }
    public function User(){
        return view('User.index');
    }
    public function About(){
        return view('About');
    }
}