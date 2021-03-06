<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= DB::select('select * from users');
        // foreach($data as $user){
        //     echo $user->name."<br>";
        // }
        // dd($users);
        return view('abc.index', ['data'=>$data]);
        // echo "Abccontroller index<br>";
        // return view('abc.index');
        // $data=['name' => 'moon',
        //         'id'=>'1',
        //         'chinese'=>'80',
        //         'math'=>'91',
        //         'english'=>'92',
        //         ];
        // $data['sum']=$data['chinese']+$data['math']+$data['english'];
        // $data['avg']=$data['sum']/3;

        // $data['message']='ok';
        

        // return view('abc.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo "Abc controller";
        return view('abc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$request->all();
        dd($input);
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
    public function myForm(Request $request){
        $input=$request->all();
        dd($input);
    }
}
