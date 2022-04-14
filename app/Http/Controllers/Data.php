<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\aboutus;
use App\Models\Doctor;
use App\Models\comment;
class Data extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function aboutus()
    {          
              $doctor=Doctor::all();
              $data=aboutus::all();
                return view("pages.aboutus")->with(['doctor'=>$doctor,'data'=>$data]);
        
    }
    public function doctordetail($id)
    {
        $data=Doctor::find($id);
        return view('pages.doctordetail',compact('data'));
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

    public function aboutcompany()
    {
        if(Auth::id()){
            return view('admin.aboutcompany');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uploadabout(Request $request)
    {
        $data=new aboutus;

        $data->title=$request->title;
        $data->desc=$request->desc;

        $data->save();

        return redirect()->back()->with('message','You Successfully upload About Your company Detail');
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
    public function comment(Request $request)
    {
       $msg=new comment;
       
       $msg->name=$request->name;
       $msg->message=$request->message;

       $msg->save();

       return redirect()->back()->with('message','You Have Commented On the Post');
    }
}
