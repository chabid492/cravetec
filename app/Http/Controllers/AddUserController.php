<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddUserModel;
use App\Http\Requests\UserForm;

class AddUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=AddUserModel::get();

        

        return view('cravetec.admin.showdetails')->with('results',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cravetec.admin.adduserinfo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserForm $request)
    {
        $data=new AddUserModel();

        $data->name=$request->name;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->age=$request->age;
        $data->address=$request->address;

        $check=$data->save();
        if ($check) {
               return redirect()->back()->with('success','Data saved successfully');
           }else{
             return redirect()->back()->with('errMsg','Data not saved');
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
        $data=AddUserModel::where('id',$id)->get();

        

        return view('cravetec.admin.showsingleuser')->with('results',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=AddUserModel::where('id',$id)->get();
        

        return view('cravetec.admin.edituser')->with('results',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserForm $request, $id)
    {
        

        $data=AddUserModel::find($id);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->age=$request->age;
        $data->address=$request->address;

        $check=$data->update();
        if ($check) {
               return redirect('/adduser')->with('success','Data updated successfully');
           }else{
             return redirect('/adduser')->with('errMsg','Data data not updated');
           }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $data=AddUserModel::find($id);

        $check=$data->delete();

        if ($check) {
               return redirect('/adduser')->with('success','Data deleted successfully');
           }else{
             return redirect('/adduser')->with('errMsg','Data not deleted');
           }   
    }
}
