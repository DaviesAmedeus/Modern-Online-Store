<?php

namespace App\Http\Controllers\Account;

use App\Models\Item;
use App\Models\Sale;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountSalesController extends Controller
{
    public function sales(){

      $viewData = [];
      $viewData['sales'] = Sale::select('product_id', DB::raw('count(*) as total_sales'))
        ->where('seller_id', Auth::user()->id)
        ->groupBy('product_id')
        ->paginate(10);     
               
               
      return view('account.sales.sale')->with('viewData', $viewData);
      // return $viewData['sales'] = Sale::select('product_id', DB::raw('count(*) as total_sales'))
      // ->where('seller_id', Auth::user()->id)
      // ->groupBy('product_id')
      // ->get();


    
    }
}
