<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function getId()
    {
    return $this->attributes['id'];
    }

    public function setId($id)
    {
    $this->attributes['id'] = $id;
    }

    public function getProductId()
    {
    return $this->attributes['product_id'];
    }

    public function setProductId($product_id)
    {
    $this->attributes['product_id'] = $product_id;
    }

    public function sellerId()
    {
    return $this->attributes['seller_id'];
    }

    public function setSellerId($seller_id)
    {
    $this->attributes['seller_id'] = $seller_id;
    }

    public function getCreatedAt()
    {
    return $this->attributes['created_at'];
    }
    
    public function setCreatedAt($createdAt)
    {
    $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
    return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt)
    {
    $this->attributes['updated_at'] = $updatedAt;
    }

    public function user(){
      return  $this->belongsTo(User::class);
    }

    public function product(){
       return $this->belongsTo(Product::class);
    }

    

    
}
