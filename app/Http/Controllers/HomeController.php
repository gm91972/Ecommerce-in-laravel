<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Voyager;
use App\Model\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\User as ModelsUser;

class HomeController extends Controller
{
    public function index()
    {

        $product = Product::all();

        return view('main.index', compact('product'));
    }


    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.home');
        } else {

            $product = Product::all();

            return view('main.index', compact('product'));
        }
    }

    // Product Detail Page
    public function product_details($id)
    {

        $product = Product::find($id);
        return view('main.product_details', compact('product'));
    }


    // Add to Cart

    public function show_cart()
    {
        $cart = Cart::all();
        return view('main.cart', compact('cart'));
    }

    public function add_to_cart(Request $request, $id)
    {

        $product = product::find($id);

        $cart = new cart();

        $cart->name = $product->name;

        $cart->price = $product->price * 1;

        $cart->quantity = 1;

        $cart->image = $product->image;

        $cart->save();
        return redirect()->back();
    }

    public function delete_from_cart($id){  
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    } 

    // Checkout

    public function show_checkout(){
        if(Auth::user()){

            return view('main.checkout');
        }

        else{
            return view('auth.login');
        }
    }

    public function place_order(Request $request){

        $checkout = new Checkout;
        $checkout->firstname = $request->firstname;
        $checkout->lastname = $request->lastname;
        $checkout->phone = $request->phone;
        $checkout->email = $request->email;
        $checkout->address = $request->address;
        $checkout->country = $request->country;
        $checkout->city = $request->city;
        $checkout->zip = $request->zip;

        $checkout->save();

        return redirect('/')->with('message', 'Your Order Has Been Placed');
    }


    // Product Search

    public function product_search(Request $request){

        $search = $request->search;

        $product = product::where('name', 'LIKE', "%$search%")->get();

        return view('main.index', compact('product'));
    }



    public function view_all_earbuds()
    {
        return view('pages.view_all_earbuds');
    }

    public function view_all_mobiles()
    {
        return view('pages.view_all_mobiles');
    }

    public function view_all_laptops()
    {
        return view('pages.view_all_laptops');
    }

    public function view_all_accessories()
    {
        return view('pages.view_all_accessories');
    }
}
