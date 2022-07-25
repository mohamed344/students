<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard(Request $req)
    {
        // $req->validate([
            
        //     'email'=> 'required',
        //     'password'=> 'required'

        // ]);
        
        $data=Student::all();
        return view('dashboard', ['students'=>$data]);
    }

    public function delete($id)
    {
        $data=Student::find($id);
        $data->delete();
        return redirect('dashboard');
    }

    public function add()
    {
        return view('admins.add');
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
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'matricule'=> 'required|numeric|unique:students,matricule',
            'result'=> 'required',
            'password'=> 'required|numeric|digits:4|unique:students,password'

        ]);
        
        $query = DB::table('students')->insert([
            'name'=>$request->input('name'),
            'matricule'=>$request->input('matricule'),
            'result'=>$request->input('result'),
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
        $data = Student::find($id);
         return view('admins.edit', ['students'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data=Student::find($request->id);
        $data->id=$request->id;
        $data->name=$request->name;
        $data->matricule=$request->matricule;
        $data->result=$request->result;
        $data->save();
        return redirect('dashboard');
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
