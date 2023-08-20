<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'User Panel';
    }

    public function postLogin(Request $request){
        return 1;
    }
}
