<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class tutorModel extends Model
{
    use HasFactory;
    public function insertData($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectData($table)
    {
       return  DB::table($table)->get();
    }
    public function selectTables($table1,$table2)
    {
        return DB::table($table1)->join($table2,$table2.'.cls_id','=',$table1.'.cls_id')->get();
    }
    public function selectById($table,$id)
    {
        return DB::table($table)->where('cls_id',$id)->get();
    }
}
