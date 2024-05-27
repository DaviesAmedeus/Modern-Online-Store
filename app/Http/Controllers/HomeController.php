<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $viewData = [];
        $viewData["title"]='Home Page';
        $viewData['products'] = Product::limit(4)->get();
        $viewData['locations'] = Location::all();



        return view('home.index')->with("viewData", $viewData);
    }


    public function about(){

        $viewData = [];
        $viewData["title"]='About Page';


        return view('home.about')->with("viewData", $viewData);
    }



    
}
