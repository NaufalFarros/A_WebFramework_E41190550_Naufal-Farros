<?php

namespace App\Http\Controllers;
use App\Models\Student ;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct(){
        $this->middleware('auth');
     }
     
    public function index()
    {
        // $students = DB::table('students')->get();
        
        $students = student::orderBy('nama','asc')->paginate(6);
        // return view('User.index',['students' => $students]);
        return view('User.index',compact('students'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student ;
        // $student->nama = $request->Nama ;
        // $student->nim = $request->Nim ;
        // $student->prodi = $request->Prodi ;
        // $student->save();
        
        
        // menggunakan fillable
        
        // student::create([
        //     'nama' => $request->Nama,
        //     'nim' => $request->Nim,
        //     'prodi' => $request->Prodi,
        // ]);

        $request->validate([
            'Nama' => 'required',
            'Nim' => 'required|size:9',
            'Prodi' => 'required'
        ]);


        student::create($request->all());

        return redirect('/User')->with('status','Data Berhasil Di Tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $students = student::find($id);

        return view('User.Show', compact('students'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/User')->with('delete','Data Berhasil Dihapus');
    }



   
}