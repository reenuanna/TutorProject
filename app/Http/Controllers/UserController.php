<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tutorModel;
use Session;

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
    public function about()
    {
        return view('user.about');
    }
    public function login()
    {
        return view('user.login');
    }
    public function loginfun(Request $request)
    {
        $email=$request->input('email');
        $pass=$request->input('pass');
        $data=User::where('email',$email)->where('password',$pass)->first();
        if(isset($data))
        {
            // $request->session()->put(array('userid',$data->id));
            Session::put('sessid',$data->id);
            return redirect('/home');
        }
        else{
            return redirect('/login')->with('msg','Invalid Email ID or Password');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('sessid');
        return redirect('/login');
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
        $email=$req->input('email');
        $pass=$req->input('pass');
        $data=User::where('email',$email)->where('password',$pass)->first();
        if(isset($data))
        {
            // $request->session()->put(array('userid',$data->id));
            Session::put('sessid',$data->id);
            return redirect('/home');
        }
    }
    public function home()
    {
        $data['result']=$this->tot->selectData('classes');
        $data['sub']=$this->tot->selectData('subjects');
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
            // echo $cls;
            // exit();
         $data['result']=tutorModel::selectTutor('tutor_models','subjects','classes',$sub,$cls);
        // print_r($data);
        // exit();
        return view('user.viewTutor',$data); 
        }
        public function userlogin()
        {
            return view('user.userlogin');
        }
        public function loginaction(Request $req)
        {
            $email=$req->input('email');
            $pass=$req->input('pass');
            $data=User::where('email',$email)->where('password',$pass)->first();
            if(isset($data))
            {
                Session::put('s_id',$data->id);
               return redirect('/userprofile');
            }
            else{
                return redirect('/userlogin')->with('error','Invalid Email or Password');
            }
        }
            public function userprofile()
            {
                $id=session('s_id');
                $data=User::find($id);
                return view('userprofile'.$data);
            }
        }
    

