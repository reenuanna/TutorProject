<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutorModel;
use Session;

class TutorController extends Controller
{
    public function tutorlog()
    {
    		return view('Tutor.login');
    }
    public function logintut(Request $req)
    {
    	$email=$request->input('email');
        $pass=$request->input('pass');
        $data=tutorModel::where('email',$email)->where('password',$pass)->first();
        if(isset($data))
        {
            // $request->session()->put(array('userid',$data->id));
            Session::put('sessid',$data->id);
            return redirect('/tutor');
        }
        else{
            return redirect('/tutorlog')->with('msg','Invalid Email ID or Password');
        }
    }
    public function tutorsignup()
    {
    	return view('Tutor.register'); 
    }
    public function saveTutor(Request $req)
    {
    	$data = new tutorModel;
    	 $email=$req->input('email');
        $pass=$req->input('pass');
        $data->name=$req->input('name');
        $data->address=$req->input('address');
        $data->state=$req->input('state');
        $data->city=$req->input('city');
        $data->gender=$req->input('gender');
        $data->mobile=$req->input('mobile');
        $data->quali=$req->input('quali');
        $data->subjects=$req->input('sub');
        $data->email=$email;
        $data->password=$pass;
        $data->save();
       
        $data=tutorModel::where('email',$email)->where('password',$pass)->first();
        if(isset($data))
        {
            // $request->session()->put(array('userid',$data->id));
            Session::put('tutorid',$data->id);
            return redirect('/tutor');
        }
        else{
            return redirect('/tutorlog')->with('msg','Invalid Email ID or Password');
        }
    }
}
