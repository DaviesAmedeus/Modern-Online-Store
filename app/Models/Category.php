<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function validate($request){
        $request->validate([
        "category" => "required|max:100|unique:categories,name",
        ]);
    }

    // Setters & Getters
    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getCategory(){
        return $this->attributes['name'];
    }

    public function setCategory($category){
        $this->attributes['name'] = $category;
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


    // f(x) below represents an Eloquent relationship i.e a category has many products
    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
