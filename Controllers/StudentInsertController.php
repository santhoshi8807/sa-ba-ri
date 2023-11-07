<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StudentInsertController extends Controller
{
    public function insert_form(){
        return view('insert_form');
    }
    public function insert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');

        //insert operation
        
        DB::insert("insert into clgstudent(name,email) values(?,?)",[$name,$email]);
        return 'Record inserted successfully! <a href="/">Click here to go back </a>';

    }
    public function student_list(){
        $students = DB::select("select * from clgstudent");
        return view('student_list',['students'=>$students]);
        }
     
        public function edit($id){
            $student = DB::select("select * from clgstudent where id=?", [$id] );
            return view('student_edit',['student'=>$student]);
        }
        
        public function update(Request $request,$id){
            $name = $request->input('name');
            $email = $request->input('email');
            DB::update("update clgstudent set name=?, email=? where id=?",[$name,$email,$id]);
            return 'Record updated successfully! <a href="/view-records">Click here to go back</a>';
        }    

        public function delete($id){
            DB::delete("delete from clgstudent where id =?",[$id]);
            return 'Record deleted successfully! <a href="/view-records">Click here to go back</a>';
        }
}
