<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Backend\UserRequest;
use App\Models\User;

class LoginController extends Controller
{
    // return view Login
    public function Login()
    {
        return view('Backend.Login');
    }

    // check and Login
    public function loginUser(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|',
            'password' => 'required'    
        ]);   
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) 
        {
            return redirect('home');
        }
        Session::flash('error','Sai mật khẩu');

        return redirect('userLogin');
    }

    public function home()
    {
        return view('Backend.home');
    }

    public function Register()
    {
        return view('Backend.register');
    }

    public function userRegister(UserRequest $request)
    {
        $user = User::Register($request);

        return redirect('userLogin');
    }
}
