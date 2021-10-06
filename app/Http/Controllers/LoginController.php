<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistationRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function hidden(){
        $categories = Category::query()->limit(9)->get();
        return view('hidden_page', compact('categories'));
    }

    public function register(){
        return view('auth.register');
    }


    public function registration(UserRegistationRequest $request){
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        //dd($request);
        User::create($data);
        return redirect()->route('main_page');

    }


    public function login(){

        return view('auth.login');
    }



    public function checklogin(Request $request){
        $user = User::query()->where('email',$request->input('email'))->firstOrFail();
        if(Hash::check($request->input('password'), $user->password)){
            Auth::login($user);

            return redirect()->route('main_page');
        }

        //dd($request->all());
    }
}


