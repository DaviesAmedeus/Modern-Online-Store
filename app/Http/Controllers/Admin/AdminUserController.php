<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
   public function index(){

    $viewData = [];
    $viewData['users'] = User::latest()->paginate(10);

    
    return view('admin.users.index')->with('viewData', $viewData);

   }


}