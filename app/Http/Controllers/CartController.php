<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $cart = Session::get('cart', []);
        $id = $request->input('product_id');

        if(isset($cart[$id])){
            $cart[$id] += 1;
        }else{
            $cart[$id] = 1;
        }
        Session::put('cart', $cart);
        return back();
    }


    public function showCart(){
        $cart = collect(Session::get('cart', []));
        $ids = $cart->keys();
        $products = Product::query()->whereIn('id', $ids)->get();
        dump($products);
    }


    public function addToWish(Request $request){
        $id = $request->input('product_id');
        $wishlist = Session::get('wishlist', []);
        $wishlist[$id] = ($wishlist[$id] ?? 0) + 1;
        Session::put('wishlist', $wishlist);
        return back();
    }

    public function showWish(){
        $wishlist = collect(Session::get('wishlist', []));
        $ids = $wishlist->keys();
        $products = Product::query()->whereIn('id', $ids)->get();
        dump($products->count());
    }
}
