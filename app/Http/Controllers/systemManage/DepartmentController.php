<?php

namespace App\Http\Controllers\systemManage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
    //

    public function index(){
        $data = Department::orderBy('created_at','desc')->get();
     
        return view('sys-mg.department.index',['data'=>$data]);
    }

    public function create(Request $req){
        
        $this->validate($req,[

            'name'=>'required|min:3|max:40|unique:departments|regex:/(^([a-zA-Z]+)(\d+)?$)/u',

        ]);

        $dept = new Department;
        $dept->name = $req->name;
        $dept->save();
        return redirect('Departments');
    }

    public function delete(Department $id){
         $id->delete();
        return back();
    }

    public function details($id){
        $department = Department::find($id);
        return view('sys-mg.department.update',['dept'=>$department]);
    }

    public function update(Request $req,$id){
        $this->validate($req,[
            'name'=>'required|min:3|max:40|unique:departments|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
        ]);

        $dept = Department::find($id);
        $dept->name = $req->name;
        $dept->save();
        return redirect('Departments');

    }
}
