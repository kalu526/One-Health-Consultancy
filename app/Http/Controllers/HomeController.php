<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointement;
use App\Models\blog;
use App\Models\comment;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::id()){
      if(Auth::user()->usertype==0){
        $doctor=Doctor::all();
        $blog=blog::all();
        return view('user.home')->with(['doctor'=>$doctor,'blog'=>$blog]);
      }
      elseif(Auth::user()->usertype==1){
         $data=Auth::user();
          return view("admin.Homie",compact('data'));
      }
      } 
      else{
          return redirect()->back();
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $doctor=Doctor::all();
        $blog=blog::all();
        return view('user.home')->with(['doctor'=>$doctor,'blog'=>$blog]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointement=new Appointement;

        $appointement->name=$request->name;
        $appointement->email=$request->email;
        $appointement->phone=$request->phone;
        $appointement->doctor=$request->doctor;
        $appointement->date=$request->date;
        $appointement->message=$request->message;
        $appointement->status='In Progress';
        if(Auth::id()){
            $appointement->user_id=Auth::user()->id;
        }
        else {$appointement->user_id='null';}
       $appointement->save();
       return redirect()->back()->with('message','Appointement Request Successfull Delivered');
    }

    public function myappointement()
    {
        if(Auth::id()){

            $userid=Auth::user()->id;

            $appoint=Appointement::where('user_id',$userid)->get();
            return view('user.myappointement',compact('appoint'));
        }
        else{
            return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       return view('user.home');
    }

    public function cancelappoint($id)
    {
       $data=Appointement::find($id);
       $data->delete();

       return redirect()->back();
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
    
    public function doctors()
    {     
      
              $doctor=Doctor::all();
                return view("pages.doctors",compact('doctor'));
        
    }

    public function news()
    {
              $blog=blog::all();
                return view("pages.news",compact('blog'));
        
    }

    public function contact()
    {
              $doctor=Doctor::all();
                return view("pages.contact",compact('doctor'));
        
    }

    public function singlepage($id)
    {
                  $blogs=blog::all();
                  
                  $blog=blog::find($id);
                  $total=comment::all()->count();
                  $com=comment::all();
                return view("pages.singlepage")->with(['blog'=>$blog,'blogs'=>$blogs,'total'=>$total,'com'=>$com]);
             
                
        
    }
}
