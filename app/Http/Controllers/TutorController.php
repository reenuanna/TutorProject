<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutorModel;
use App\Models\video;
use Session;

class TutorController extends Controller
{
    public function tutorlog()
    {
    		return view('Tutor.login');
    }
    public function logintut(Request $req)
    {
    	$email=$req->input('email');
        $pass=$req->input('pass');
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
    public function tutorsignup()
    {
         $data['sub']=tutorModel::selectData('subjects');  
         $data['cls']=tutorModel::selectData('classes');              
    	return view('Tutor.register',$data); 
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
        // $sub=$req->input('subject');
        // $cls=$req->input('classs');
        // echo $sub;
        // exit();
        $data->subjects=$req->input('subject');
         $data->classes=$req->input('classs');
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
    public function tutorHome()
    {
        $id=session('tutorid');
        $data['result']=tutorModel::where('id',$id)->get();
        return view('Tutor.home',$data);
    }
    public function videoup()
    {
       
        $id=session('tutorid');
        $data['result']=tutorModel::where('id',$id)->get();
        $data['sub']=tutorModel::selectData('subjects');  
        $data['cls']=tutorModel::selectData('classes');  
        return view('Tutor.videoupload',$data);
    }
    public function uploadvideo(Request $req)
    {
        $id=session('tutorid');
        $data=new video;
        $data->c_id=$req->input('cls');
        $data->s_id=$req->input('sub');
        $data->u_id=$id;
        $data->topic=$req->input('name');
        $video=$req->file('video');
        $videoname=$video->getClientOriginalName();
        $video->move(public_path().'/video',$videoname);
        $data->video=$videoname;
        $data->save();
        return redirect('/viewVideos');
    }
    public function viewVideos()
    {
        $id=session('tutorid');
        $data['result']=tutorModel::where('id',$id)->get();
        $data['sub']=tutorModel::selectData('subjects');  
        $data['cls']=tutorModel::selectData('classes');  
        $data['video']=video::where('u_id',$id)->get();
        return view('viewVideos',$data);
    }
}
