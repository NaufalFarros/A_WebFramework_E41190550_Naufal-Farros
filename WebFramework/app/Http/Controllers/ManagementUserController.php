<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index(){
        return "Hallo ini adalah method index, dalam controller management" ;
    }
    public function create(){
        return "Method ini digunakan untuk menambah data user" ;
    }
    public function store(Request $request){
        return "Method ini digunakan untuk menciptakan method baru" ;
    }
    public function show($id){
        return "Method ini diguanakan untuk menampilkan data dengan id=".$id ;
    }
    public function edit($id){
        return "Method ini untuk menampilkan form edit data id=".$id ;
    }
  
    
}
