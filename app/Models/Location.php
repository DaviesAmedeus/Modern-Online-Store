<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public static function validate($request){
        $request->validate([
            "name"=>"required|alpha_dash:ascii|max:15|unique:locations,name",
            "latitude"=>"required|numeric|unique:locations,latitude",
            "longitude"=>"required|numeric|unique:locations,longitude"

        ]);
    }


     // Setters & Getters
     public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getLocation(){
        return $this->attributes['name'];
    }

    public function setLocation($name){
        $this->attributes['name'] = $name;
    }

    public function getLatitude(){
        return $this->attributes['latitude'];
    }

    public function setLatitude($latitude){
        $this->attributes['latitude'] = $latitude;
    }


    public function getLongitude(){
        return $this->attributes['longitude'];
    }

    public function setLongitude($longitude){
        $this->attributes['longitude'] = $longitude;
    }



    public function getCreatedAt(){
        return $this->attributes['created_at'];
    }
    
    public function setCreatedAt($createdAt){
        $this->attributes['created_at'] = $createdAt;
    }
    
    public function getUpdatedAt(){
        return $this->attributes['updated_at'];
    }
    
    public function setUpdatedAt($updatedAt){
        $this->attributes['updated_at'] = $updatedAt;
    }

    public function products(){
        return $this->hasMany(Product::class);
     }
}
