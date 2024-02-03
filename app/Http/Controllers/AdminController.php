<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use PDF;


class AdminController extends Controller
{
    public function view_category()
    {
        $data = category::all();

        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new category;  

        $data->category_name = $request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

     public function delete_category($id){
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
     }

    public function view_product(){

        $category = category::all();

        return view('admin.product', compact('category'));
    }

    // Product functions

    public function add_product(Request $request){

         $product = new product;

         $product->name = $request->name;

         $image = $request->image;

         $imagename = time().'.'.$image->getClientOriginalExtension();
        
         $request->image->move('product',$imagename);
         $product->image =  $imagename;

         $product->price = $request->price;
         $product->quantity = $request->quantity;
         $product->category = $request->category;

         $product->save();

         return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function show_product(){

        $product = product::all();
        return view('admin.show_product', compact('product'));
    }

    public function edit_product($id) {

        $product = product::find($id);

        $category = category::all();

        return view('admin.edit_product', compact('product', 'category'));
    }

    public function edit_product_update(Request $request, $id){

        $product = product::find($id);

        $product->name = $request->name;

        $image = $request->image;

        if($image){
            
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            $product->image = $imagename;
        }
       
        $product->save();
        return redirect('show_product')->with('message', 'Product Updated Successfully');

        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;
    }

    public function delete_product($id){
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }


    // Product Search

    public function admin_search(Request $request){

        $search = $request->search;

        $product = product::where('name', 'LIKE', "%$search%")->get();

        return view('admin.show_product', compact('product'));
    }


    // Download PDF

    public function download_pdf(){
        
        $product = product::all();

        $pdf = PDF::loadView('admin.pdf', compact('product'));
        
        return $pdf->download('product_details.pdf');

    }
  
}
