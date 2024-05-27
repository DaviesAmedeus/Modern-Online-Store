<?php

namespace App\Http\Controllers\Account;

use App\Models\Product;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountProductController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData["products"]= Product::where('user_id', Auth::user()->id)->latest()->paginate(10);
        $viewData["locations"]= Location::all();
        $viewData["categories"]= Category::all();
        return view('account.product.index')->with('viewData', $viewData);
    }

    public function store(Request $request){
        
       
        Product::validate($request);
        $data = $request->except('_token');
        $data['user_id'] = Auth::user()->id; 
        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('products_image', 'public'); 
        }

        Product::create($data);
        return back()->with("success-message", "You created a PRODUCT ".$request->name);
    }

    public function edit($id){
        $viewData = [];
        $viewData["locations"]= Location::all();
        $viewData["categories"]= Category::all();
        $viewData["product"]=Product::findOrFail($id);
        return view('account.product.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id){
        
        Product::validate($request);
        $data = $request->except(['_token','_method']);

        if($request->hasFile('image')){
            $product = Product::findOrFail($id);
            // This deletes the existing picture and clears the space
            if($product->name && Storage::disk('public')->exists($product->name)) {
                Storage::disk('public')->delete($product->name);
            }

            $data['image']=$request->file('image')->store('products_image', 'public'); 
        }

        Product::where('id', $id)->update($data);
        return redirect(route('account.product.index'))->with("success-message", "You update a PRODUCT: ".$request->name);

       
    }


    public function delete($id){
        Product::destroy($id);
        return back()->with("success-message", "You deleted a PRODUCT");
    }



}
