<?php

namespace App\Http\Controllers\Account;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountOrderController extends Controller
{
   
    public function index(){
        $viewData = [];
        $viewData["title"] = "My Orders - Online Store";
        $viewData["subtitle"] = "My Orders";
        $viewData["orders"] = Order::where('user_id', Auth::user()->id)->get();
        return view('account.orders.index')->with("viewData", $viewData);
    }
}
