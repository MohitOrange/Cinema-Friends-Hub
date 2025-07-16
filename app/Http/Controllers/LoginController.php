<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function viewpage(){
        return view('components/register');
    }

    public function adduserss(Request $request){
        dd($request->all());
    //    Login::create($request->all());
    }
}
