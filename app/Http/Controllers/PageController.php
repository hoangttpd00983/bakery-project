<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;
use Illuminate\Http\Request;
use App\Cart;
use Session;

class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
    	
    	$new_product = Product::where('new',1)->get();
    	// return view('page.trangchu',['slide'=>$slide]);
    	// dd($new_product);
    	return view('page.trangchu',compact('slide','new_product'));
    }

    public function getChiTietSanPham(Request $req){
    	$sanpham = Product::where('id',$req->id)->first();
    	return view('page.chi-tiet-san-pham',compact('sanpham'));
    }

    public function getGioHang(){
    	return view('page.gio-hang');
    }

    public function getDangNhap(){
    	return view('page.dang-nhap');
    }

    public function getAddtoCart(Request $req, $id){
    	$product = Product::find($id);
    	$oldCart = Session('cart')?Session::get('cart'):null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $id);
    	$req->session()->put('cart',$cart);
    	return redirect()->back();
    }
}
