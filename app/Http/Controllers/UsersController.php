<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\user;
//use Illuminate\user;
class UsersController extends Controller
{
    //
    Public function index(){
      $users = User::paginate(10); //page limit 10
      /*$users=[
        '0'=>[
          'first_name'=>'David',
          'last_name'=>'Wong',
          'location'=>'Indonesia'
        ],
        '1'=>[
          'first_name'=>'Jes',
          'last_name'=>'Limit',
          'location'=>'Evos'
        ]
      ];*/
        //$users = User::all(); //select all
        //return $users;
        return view('admin.users.index',compact('users'));
    }

    Public function create(){

      return view('admin.users.create');
    }

    Public function store(Request $request){
      user::create($request->all());
      return 'Success';
      return $request->all();
    }
}
