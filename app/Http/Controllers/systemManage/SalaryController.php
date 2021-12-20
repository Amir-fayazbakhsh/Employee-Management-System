<?php

namespace App\Http\Controllers\systemManage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salary;
class SalaryController extends Controller
{
    //

    public function index(){
        return Salary::all();
    }
}
