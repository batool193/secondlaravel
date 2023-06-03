<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Owner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class ProductController extends Controller
{
    //
    
  public function index(): View
  {
      $products = Product::with('owners')->get();
      return view('products.index', ['products' => $products]);
  }
  
  public function addnewproduct(): View
  {
    $owners = Owner::all();
  return view('products.addnewproduct',['owners'=>$owners]);
  }

public function store(Request $request)
{       
      $product = new Product();
      $product->product_name = $request->input('name');
      $category =DB::table('categories')->select('id')->where('category_name',$request->input('category'))->
      first();
      $product->category_id = $category->id;
      $product->save();
      $product->owners()->sync($request->input('owners'));
      return self::index();
  
}

public function delete($id)
{
  DB::table('products')->where('id', '=',$id)->delete();
  return self::index();

}

}
