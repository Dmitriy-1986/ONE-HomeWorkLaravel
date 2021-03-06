<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ShopController extends Controller
{
    public function category($slug)
    {
        $category = Category::firstWhere('slug', $slug);
        $products = Product::where('category_id', $category->id)->get();
        return view('shop.category', compact('category', 'products'));
    }
}
