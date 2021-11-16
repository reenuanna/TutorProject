<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tutorModel;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->obj= new User();
        $this->tot = new tutorModel();
    }
    public function index()
    {
        return view('user.index');
    }
    public function login()
    {
        return view('user.login');
    }
    public function loginfun(Request $request)
    {
        $email=$request->input('email');
        $pass=$request->input('pass');
        $data=$this->obj->loginfun('users',$email,$pass);
        if(isset($data))
        {
            $request->session()->put(array('userid',$data->id));
            return redirect('/home');
        }
        else{
            return redirect('/login')->with('msg','Invalid Email ID or Password');
        }
    }
    public function register()
    {
        return view('user.register');
    }
    public function regFun(Request $req)
    {
        $data['name']=$req->input('name');
        $data['address']=$req->input('address');
        $data['state']=$req->input('state');
        $data['city']=$req->input('city');
        $data['gender']=$req->input('gender');
        $data['mobile']=$req->input('mobile');
        $data['email']=$req->input('email');
        $data['password']=$req->input('pass');
        $this->obj->insertData('users',$data);
        $email=$request->input('email');
        $pass=$request->input('pass');
        $data=$this->obj->loginfun('users',$email,$pass);
        if(isset($data))
        {
            $request->session()->put(array('userid',$data->id));
            return redirect('/home');
        }
    }
    public function home()
    {
        $data['result']=$this->tot->selectData('classes');
        return view('user.home',$data);
    }
    public function clsSubj($id)
    {
        $data=$this->tot->selectById('subjects',$id);
        foreach($data as $value)
        {
        ?>
        
        <option value="<?php echo $value->sub_id;?>"><?php echo $value->sub_name;?></option>
  <?php
        }
    }
        public function selectClassSub(Request $req)
        {
         $cls=$req->input('cls');
         $sub=$req->input('sub');
        //  $data['result']=$this->viewTotur('tutor',$cls,$sub);
        //  return view('viewTutor',$data);  
        return view('user.viewTutor'); 
        }
    
}
