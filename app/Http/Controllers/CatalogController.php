<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
//        dd($request->get('id', 5));
        return (view('catalog.catalog'));
    }

    public function category(Request $request, Category $category)
    {
        $categories = Category::all();
        $products = Product::query()->paginate(9);
        return (view('catalog.catalog', compact('category', 'categories', 'products')));
    }

    public function product()
    {
        return (view('catalog.product'));
    }
}