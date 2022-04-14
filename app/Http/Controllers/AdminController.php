<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointement;
use Notification;
use App\Notifications\EmailNotification;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.add');
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
       $doctor=new Doctor;

    //    get the image file
    $image=$request->file;

    // get the image name
    $imagename=time().'.' .$image->getClientOriginalExtension();
    // store the image file in the folder
     $request->file->move('doctorimage',$imagename);

    //  set the image name for database
     $doctor->image=$imagename;
     $doctor->doctorname=$request->doctorname;
     $doctor->phonenumber=$request->phonenumber;
     $doctor->speciality=$request->speciality;
     $doctor->roomnumber=$request->roomnumber;
     $doctor->desc=$request->desc;
     
     $doctor->save();

     return redirect()->back()->with('message','Doctor Added Successfully');

    }
    public function showappointement()
    {
        $data=Appointement::all();
       return view('admin.showappointement',compact('data'));
    }

    public function approved($id)
    {
        $data=Appointement::find($id);
        $data->status="Approved";

        $data->save();
        return redirect()->back();
    }


    public function canceled($id)
    {
        $data=Appointement::find($id);
        $data->status="Canceled";

        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {
       $data=Doctor::all();
        return view('admin.showdoctor',compact('data'));
        return redirect()->back();
    }

    public function deletedoctor($id)
    {
      $data=Doctor::find($id);
      $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
      $data=Doctor::find($id);

     return view('admin.update_doctor',compact('data'));
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
    public function edit_doctor(Request $request,$id)
    {
        $data=Doctor::find($id);

        $data->doctorname=$request->doctorname;
        $data->phonenumber=$request->phonenumber;
        $data->speciality=$request->speciality;
        $data->roomnumber=$request->roomnumber;
        $image=$request->file;
   if($image){
    // get the image name
    $imagename=time().'.' .$image->getClientOriginalExtension();
    // store the image file in the folder
     $request->file->move('doctorimage',$imagename);

    //  set the image name for database
     $data->image=$imagename;
   }
        $data->save();
        return redirect()->back()->with('message','The Doctor Information Updated Successfully');

    }


    public function email_view($id)
    {
        $data=Appointement::find($id);
        return view("admin.emailview",compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendemail(Request $request, $id)
    {
       $data=Appointement::find($id);

       $details=[
    'greetings'=>$request->greetings,
    'body'=>$request->body,
    'actiontext'=>$request->actiontext,
    'actionurl'=>$request->actionurl,
    'endpart'=>$request->endpart
       ];

       Notification::send($data,new EmailNotification($details));

       return redirect()->back()->with('message','You successfully send Email To User');
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
