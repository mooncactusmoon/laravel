<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Phone;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::with('phoneRelation')->with('lovesRelation')->get();        
        // dd($data);
        // dd($data[0]->phoneRelation->name);
        // dd($data[0]->lovesRelation);
        
        // foreach ($data[0]->lovesRelation as $key => $value) {
        //     echo "$value->name.<br>";
        // }

        return view('student.index', ['data' => $data]);
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
        // dd('student store ok');
        $input = $request->all();
        $input = $request->except('_token');

        $data = new Student;
 
        $data->name = $input['name'];
        $data->chinese = $input['chinese'];
        $data->english = $input['english'];
        $data->math = $input['math'];
 
        $data->save();
        $student_id = $data->id;
        
        $dataPhone = new Phone;
        $dataPhone->name = $input['phone'];
        $dataPhone->student_id = $student_id;
        $dataPhone->save();

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
        // $data = Student::find($id);            
        $data = Student::where('id',$id)->with('phoneRelation')->first();            
        // dd($data->phoneRelation->name);

        return view('student.edit', ['data' => $data]);
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
        $input = $request->except('_token','_method');
        $data = Student::find($id);
        $data->name = $input['name'];
        $data->chinese = $input['chinese'];
        $data->english = $input['english'];
        $data->math = $input['math'];
        // save() 他是一個method
        $data->save();

        $student_id = $data->id;        
        Phone::where('student_id',$id)->delete();
        $dataPhone = new Phone;
        $dataPhone->name = $input['phone'];
        $dataPhone->student_id = $student_id;
        $dataPhone->save();

             
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
        $data = Student::find($id);        
        $data->delete();
        Phone::where('student_id',$id)->delete();
        return redirect()->route('students.index');
    }
    
    public function updateAll()
    {
        // dd('update All');
        Student::where('chinese', '>', 60)->update(['address' => "test"]);
    }
}
