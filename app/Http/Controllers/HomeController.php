<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
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
//        \Session::flash('success', 'HELLO WORLD!');
//        \Session::push('ff', "ff");




        //dd($country->brands[0]->name);
        return view('home.main');
    }
}
