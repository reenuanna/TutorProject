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
    public static function selectData($table)
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
    public static function selectTutor($table1,$table2,$table3,$sub,$cls)
    {
        return DB::select("SELECT * from $table1 join $table2 on $table1.subjects=$table2.sub_id join $table3 on $table3.cls_id=$table1.classes where  $table1.subjects LIKE '%$sub%'  AND  $table1.classes LIKE '%$cls%'");
    }
}
