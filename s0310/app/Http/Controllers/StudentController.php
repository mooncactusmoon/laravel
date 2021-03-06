<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data= DB::select('select * from students');
        $data=Student::all();
        // $data=Student::with('phones')->get();
        // dd($data[0]->phone->name);
        return view('student.index', ['data'=>$data]);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input =$request->all();
        $input =$request->except('_token');

        $data =new Student;
        $data->name=$input['name'];
        $data->chinese=$input['chinese'];
        $data->english=$input['english'];
        $data->math=$input['math'];

        $data->save();

        return redirect()->route('students.index');
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
        // dd($id);
        
        $data= Student::find($id);

        $data->save();
        return view('student.edit',['data'=>$data]);
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
        $input =$request->except('_token','_method');
        $data= Student::find($id);
        $data->name=$input['name'];
        $data->chinese=$input['chinese'];
        $data->english=$input['english'];
        $data->math=$input['math'];
        $data->save(); //save() ?????????method(??????)

        return redirect()->route('students.index');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('student del');
        $data= Student::find($id);
        $data->delete();
        return redirect()->route('students.index');
    }
    public function updateAll()
    {
        // dd('update all');
        Student::where('chinese','>',60) ->update(['address'=>"test"]);
        return redirect()->route('students.index');
    }

}
