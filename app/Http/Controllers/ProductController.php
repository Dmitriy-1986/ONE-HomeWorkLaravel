<?php
//заполнить вид продукта
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        //dd($categories);
        //$products = Product::where('recomended', '=', 1); если равно то его можно и не ставить...
        $products = Product::where('recomended', 1)->get()->whereNotNull('img');
       // dd($products);       
        return view('product.index', compact('categories', 'products'));
    }   
}
