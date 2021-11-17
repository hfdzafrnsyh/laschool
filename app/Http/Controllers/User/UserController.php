<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::paginate(5);
        return view('user.index' , ['users' => $users]);
    }
    

    public function profile($user){
        $users= User::find($user);
        return view('user.profile' , ['users' => $users]);
    }


}
