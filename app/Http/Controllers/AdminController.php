<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tutorModel;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->obj = new tutorModel();
    }
    public function index()
    {
        return view('admin.index');
    }
    public function getClass()
    {
        $data['result']=$this->obj->selectData('classes');
        return view('admin.viewClass',$data);
    }
    public function clsForm()
    {
        return view('admin.clsForm');
    }
    public function insertClass(Request $req)
    {
        $data['class']=$req->input('cls');
        $this->obj->insertData('classes',$data);
        return redirect('/classes');
    }
    public function getsubject()
    {
        $data['result']=$this->obj->selectTables('subjects','classes');
        return view('admin.viewSubj',$data);
    }
    public function addsubject()
    {
        $data['result']=$this->obj->selectData('classes');
        return view('admin.subjForm',$data);
    }
    public function insertSubject(Request $req)
    {
        $data['cls_id']=$req->input('cls');
        $data['sub_name']=$req->input('subj'); 
        $this->obj->insertData('subjects',$data);
        return redirect('/subject');

    }
}
