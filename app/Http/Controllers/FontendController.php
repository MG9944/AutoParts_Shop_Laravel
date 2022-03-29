<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\SearchableProduct;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function index(){
        $products = Product::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->latest()->limit(10)->get();
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.index',compact('products','categories','lts_p'));
    }

    // ----------- product details ---------
    public function productDetail($product_id){
        $product = Product::findOrFail($product_id);
        $category_id = $product->category_id;
        $related_p = Product::where('category_id',$category_id)->where('id','!=',$product_id)->latest()->get();
        return view('pages.product-deatails',compact('product','related_p'));
    }

    // ==================================== shop Page ===========================
    public function shopPage(){
        $brands = Brand::where('status',1)->latest()->get();
        $products = Product::where('status',1)->latest()->paginate(4);
        $productsp = Product::where('status',1)->latest()->paginate(9);
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.shop',compact('brands', 'products','categories','productsp'));
    }

    
    public function search(Request $request)
    { 
        $request->validate([
            'query' => 'required|min:3',
        ]);
        
        $query = $request->input('query');
        $brands = Brand::where('status',1)->latest()->get();
        $productslp = Product::where('status',1)->latest()->paginate(4);
        $categories = Category::where('status',1)->latest()->get();
        //$products = Product::where('product_name', 'like', '%$query%')->orWhere('product_code', 'like', '%$query%')->get()->paginate(10);
        $products = Product::search($query)->paginate(10);

        session()->flash('error', 'Wiadomosc wyslana, odpowiemy jak najszybciej!');
       return view('pages.search-result', compact('brands','categories','productslp', 'products'));
    }
    

    // categorywiese product
    public function catWiseProduct($cat_id){
        $brands = Brand::where('status',1)->latest()->get();
        $products = Product::where('category_id',$cat_id)->latest()->paginate(9);
        $productsp = Product::latest()->paginate(9);
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.cat-product',compact('products','categories', 'brands', 'productsp'));
    }

    public function catWiseBrands($cat_id){
        $brands = Brand::where('status',1)->latest()->get();
        $products = Product::where('category_id',$cat_id)->latest()->paginate(9);
        $productsp = Product::latest()->paginate(9);
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.cat-product',compact('products','categories', 'brands', 'productsp'));
    }
}
