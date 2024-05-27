<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Location;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index(){
        $viewData = [];
        $viewData['title'] = "Products Page";
        $viewData['products'] = Product::latest()->filter(request(['search']))->paginate();
        $viewData['locations'] = Location::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show($id){
        $viewData = [];
        $viewData['title'] = "Products Page";
        $viewData['product'] = Product::findOrFail($id);
        return view('product.show')->with('viewData', $viewData);
    }
}
