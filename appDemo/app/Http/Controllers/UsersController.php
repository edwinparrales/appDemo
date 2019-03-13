<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    //Controlador index

    public function index( Request $request){
     //  dd($request);
        $users = User::all();

      //return $users;
        return view("users.index")->with('users',$users);

    }

    public function getUser( Request $request,$id){
        //  dd($request);
        $users = User::find($id);

        return $users;

    }
}
