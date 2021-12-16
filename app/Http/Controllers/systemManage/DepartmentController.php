<?php

namespace App\Http\Controllers\systemManage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
    //

    public function index(){
       return Department::all();
    }
}
