<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
class DepartmentController extends Controller
{
    public function index(){

        
        $departments = Department::all();
        return view('department.index',compact('departments'));
    }

    public function store(Request $request){

        $departments = new Department;
        $departments->department = $request->department;
        $departments->save();

        return redirect()->route('department.index');
    }

    
    public function delete($id){
        
        $departments = Department::findorfail($id);
        $departments->delete();

        return redirect()->route('department.index');
    }
}
