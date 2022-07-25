<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Student;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function log()
    {
        return view('students.log');
    }
    public function result(Request $request)
    {
        $result = 'result';  


        
         $data= Student::where('matricule', $request->input('matricule'))->get(['name', 'matricule', 'result']);

         return view('students.result', ['students'=>$data]);
    

     

       
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('students.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'matricule'=> 'required|numeric|unique:students,matricule',
            'password'=> 'required|numeric|digits:4|unique:students,password',

        ]);
        
        $query = DB::table('students')->insert([
            'name'=>$request->input('name'),
            'matricule'=>$request->input('matricule'),
            'password'=>$request->input('password'),
        
        ]);

      
    
        if($query){
            return back()->with('success', 'Data have been successfuly inserted');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
