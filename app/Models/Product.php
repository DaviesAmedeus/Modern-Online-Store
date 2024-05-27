<?php

namespace App\Models;

use Illuminate\Contracts\Session\Session;
use Illuminate\Validation\Rules\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name', 'like', '%' . request('search'). '%')
            ->orWhere('location', 'like', '%' . request('search'). '%')
            ->orWhere('description', 'like', '%' . request('search'). '%');
        }
    }

    public static function validate($request){
        $request->validate([
            "name"=>"required|max:255",
            "description"=>"max:500",
            "price"=>"required|numeric",
            "category"=>"required",
            "location"=>"required",
            "image"=>[File::image()->dimensions(\Illuminate\Validation\Rule::dimensions()->maxWidth(1080)->maxHeight(1080)),]
        ]);

        
    }

// A function which calculates the total amount to be paid for products added in the cart
public static function sumPricesByQuantities($products, $productsInSession){
    $total = 0;
    foreach($products as $product){
        $total = $total + ($product->getPrice()*$productsInSession[$product->getId()]);
    }

    return $total;
    

}
    
    // Setters and getters
public function getId(){
    return $this->attributes['id'];
}

public function setId($id){
    $this->attributes['id'] = $id;
}

public function getUserId(){
    return $this->attributes['user_id'];
}

public function setUserId($id){
    $this->attributes['user_id'] = $id;
}

public function getName(){
    return $this->attributes['name'];
}

public function setName($name){
    $this->attributes['name'] = $name;
}

public function getDescription(){
    return $this->attributes['description'];
}

public function setDescription($description){
    $this->attributes['description'] = $description;
}

public function getImage(){
    return $this->attributes['image'];
}

public function setImage($image){
    $this->attributes['image'] = $image;
}

public function getLocation(){
    return $this->attributes['location'];
}

public function setLocation($location){
     $this->attributes['location'] = $location ;
}

public function getCategory(){
    return $this->attributes['category'];
}

public function setCategory($category){
    $this->attributes['category'] = $category;
}

public function getPrice(){
    return $this->attributes['price'];
}

public function setPrice($price){
    $this->attributes['price'] = $price;
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

// f(x) below represents an Eloquent relationship i.e an product has many items 
// (eg: product computer has many items interms of quantity i.e 3 Computers )
public function items(){
    $this->hasMany(Item::class);
}

public function getItems(){
    $this->items;
}

public function setItems($items){
    $this->items = $items;
}

// f(x) below represents an Eloquent relationship i.e an product belongs to a certain category
public function category()
{
    return $this->belongsTo(Category::class);
}

public function location()
{
    return $this->belongsTo(Location::class);
}


public function user()
{
    return $this->belongsTo(User::class);
}

public function getUsers()
{
    return $this->users;
}

public function sales(){
   return $this->hasMany(Sale::class);
}

}
