<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;


class AuthController extends Controller
{
    function index()
    {
        return view('login');
    }


    function checklogin(Request $request)
    {
        $this->validate($request, [
          'login'   => 'required|string|max:20',
          'password'  => 'required|string|min:3'
        ]);

        /*$userData = array(
            'login'  => $request->get('login'),
            'password' => $request->get('pass')
        );*/
        // $password = Input::get('passwordformfield');
        // $hashed = Hash::make($password);

        $user = DB::table("users")
            ->where("login", '=', $request->get('login'))
            // ->where("password", '=', Hash::make($request->get('password')) )
            ->first();

        // dd($user);

            // echo $user->id; die;

        if( empty($user->id) ){
            return back()->with('error', 'Wrong Login Details');
        }
        else{

            // echo 
            // dd($user);
            // $token = Str::random(60);
            // , $user->remember_token

            // echo $token, '<br>';
            echo hash('sha256', $request->get('password')), '<br>';

            echo $user->password, '<br>';
            // return redirect('main/successlogin');
            echo Hash::make($request->get('password'));
        }
    }

    

    function successlogin()
    {
        return view('successlogin');
    }

    function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
