<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLocationController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData["title"] = "Admin: Location";
        $viewData["locations"] = Location::latest()->paginate(10);
        return view('admin.location.index')->with("viewData", $viewData);
        }


        public function store(Request $request){
            
            Location::validate($request);
            $data = $request->all();
            Location::create([
                "name"=>$data["name"],
                "latitude"=>$data["latitude"],
                "longitude"=>$data["longitude"],
            ]);
            return back()->with("success-message", "You've Successfully added a LOCATION");
            }
        
        public function edit($id){
            $viewData=[];
            $viewData["location"] = Location::findOrFail($id); 
            return view('admin.location.edit')->with('viewData', $viewData);
        }

        public  function update(Request $request, $id){

            
            
            Location::validate($request);
            $data = $request->all();
            Location::where('id', $id)->update([
                "name"=>$data["name"],
                "latitude"=>$data["latitude"],
                "longitude"=>$data["longitude"],
            ]);
            return redirect(route('admin.location.index'))->with("success-message", "You've Successfully updated a LOCATION");
        }


        public function delete($id){
            Location::destroy($id);
            return back()->with("success-message", "You've successfully deleted a LOCATION!");
        }

}
