<?php

namespace App\Http\Controllers\Admins;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class adminsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $users = User::orderBy('created_at','desc')->get();
        // $users = User::orderBy('created_at','desc')->get();
        // $users = User::latest()->get();
        return view('admins.index',['users'=>$users]);
    }

    public function create(Request $req){
        $this->validate($req,[

            'name'=>"required|max:255",
            'username'=>"required|max:255",
            'email'=>"required|max:255|unique:users",
            'phone'=>"required|string|min:8|max:11",
            'password'=>"required|confirmed",

        ]);

        User::create([

            'name'=>$req->name,
            'username'=>$req->username,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'password'=>Hash::make($req->password),

        ]);

        auth()->attempt($req->only('email','password'));
        return redirect()->route('admins/index');
    }


    public function delete(User $user){
        $user->delete();
        return back();
    }

    public function details(User $user){
        $user = User::find($user->id);
        return view('admins.update',[
            'user'=>$user,
        ]);
    }


    public function update(Request $req,$id){

        $this->validate($req,[

            'name'=>"required|max:255|min:3",
            'username'=>"required|max:255|min:3",
            'email' => 'required|email|unique:users,email,'.$id,
            'phone'=>"required|string|min:8|max:11",

        ]);
        $user = User::find($id);
        $user->name = $req->name;
        $user->username = $req->username;
        $user->phone = $req->phone;
        $user->email = $req->email;
        $user->save();
        return redirect()->route('admins/index');
    }
}
