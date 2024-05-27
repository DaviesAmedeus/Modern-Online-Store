<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData["title"] = "Product: Categories";
        $viewData["categories"] = Category::latest()->paginate(10);
        return view('admin.category.index')->with("viewData", $viewData);
        }


    public function store(Request $request){
        Category::validate($request);
        $data = $request->all();
        Category::create([
            'name'=> $data['category']
        ]);
        return back()->with("success-message", "You've Successfully Added a CATEGORY: ".$request->name);
        }

    public function edit($id){
        $viewData = [];
        $viewData["title"] = "Product: Update";
        $viewData["category"] = Category::findOrFail($id);
        return view('admin.category.edit')->with("viewData", $viewData);
    }
        
    public function update(Request $request, $id){
        Category::validate($request);
        $data = $request->all();
        Category::where('id', $id)->update([
            'name'=> $data['category']
        ]);
        return redirect(route('admin.category.index'))->with("success-message", "You've Successfully deleted a CATEGORY: ".$request->name);
        }
    
    public function delete($id){
        Category::destroy($id);
        return back()->with("success-message", "You've successfully deleted a CATEGORY!");
    }

}
