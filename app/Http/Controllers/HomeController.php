<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Auth::loginUsingId('1');
        //Auth::logout();
        //Auth::attempt([
            //'email'=>'gashnikoff.nikita@yandex.ru','password'=> '12345678']);
        //dd(Auth::user());
        return view('home.main');
    }
}
