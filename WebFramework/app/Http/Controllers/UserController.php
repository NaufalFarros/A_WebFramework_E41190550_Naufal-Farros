<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('User.index');
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
    public function update(Request $request,$id){
        return "Method ini digunakan untuk mengubah data user id=".$id ;
    }
    public function destroy($id){
        return "Method ini digunakan untuk menghapus data user id=".$id ;
    }
}
