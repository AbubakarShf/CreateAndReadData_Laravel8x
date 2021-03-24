<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function list(){
        $AllUsersData=UserModel::all();
        return view('UserList',['AllUsersData'=>$AllUsersData]);
    }
    function layout(){
        return view('Layout');
    }
    function create(){
        return view('Signup');
    }
    function login(){
        return view('Login');
    }
    function register(Request $req){
        return UserModel::select('*')->where(
            [
                ['Email','=',$req->emailField],
                ['Password','=',$req->PasswordField],
            ]
        )->get();
        
    }
    function Signup(Request $req){
        $Box=new UserModel;
        $Box->Name=$req->nameField;
        $Box->Email=$req->emailField;
        $Box->Password=$req->passwordField;
        $result=$Box->save();
        if($result)
        {
            return redirect('Layout');
        }

    }
}
