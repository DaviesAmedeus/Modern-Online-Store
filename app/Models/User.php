<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Product;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


public function getId(){
return $this->attributes['id'];
}

public function setId($id){
$this->attributes['id'] = $id;
}

public function getName(){
return $this->attributes['name'];
}

public function setName($name){
$this->attributes['name'] = $name;
}

public function getEmail()
{
return $this->attributes['email'];
}

public function setEmail($email)
{
$this->attributes['email'] = $email;
}

public function getPassword()
{
return $this->attributes['password'];
}

public function setPassword($password)
{
$this->attributes['password'] = $password;
}

public function getRole()
{
return $this->attributes['role'];
}

public function setRole($role)
{
$this->attributes['role'] = $role;
}

public function getBalance()
{
return $this->attributes['balance'];
}

public function setBalance($balance)
{
$this->attributes['balance'] = $balance;
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

public function products(){
    return $this->hasMany(Product::class);
}

public function getProducts()
{
return $this->products;
}


public function setProducts($products)
{
$this->products = $products;
}

// f(x) below represents an Eloquent relationship i.e a user has many orders
public function orders()
{
return $this->hasMany(Order::class);
}

public function getOrders(){
    return $this->orders;
}

public function setOrders($orders){
     $this->orders = $orders;
}

public function sales(){
    return $this->hasMany(Sale::class);
}


}
