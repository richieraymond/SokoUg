<?php
namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Subcategory;
use App\Order;
use Cart;
class GeneralController extends Controller
{
  protected function index(){
    $categories=Category::all();
    $products=Product::all();
    return view('home',compact('products','categories'));
  }
  public function productdetails($id){
    $categories=Category::all();
    $products=Product::where('slug','=',$id)->paginate();
    return view('products.details',compact('products','categories'));
  }
  public function categorydetails($id){
    $categories=Category::all();
    $category = Category::with('subcategories', 'products')->findOrFail($id);
    return view('products.categories',compact('category','categories'));
  }

}
