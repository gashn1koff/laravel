<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $products = Product::query()->orderByDesc('id')->paginate();
//        dd($request->get('id', 5));

        return (view('catalog.catalog', compact('categories', 'products')));
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
