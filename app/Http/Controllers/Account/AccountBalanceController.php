<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountBalanceController extends Controller
{
    public function index(){

        $viewData= [];
        return view('account.balance.index')->with('viewData', $viewData);
    }
}
