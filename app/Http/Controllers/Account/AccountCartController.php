<?php

namespace App\Http\Controllers\Account;

use App\Models\Item;
use App\Models\Sale;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AccountCartController extends Controller
{
    
    public function index(Request $request){
        
        $total = 0;
        //Below I guess this will be an array which will have all products added to the cart
        $productsInCart =[];

        // Then we wil get all products in a session
        $productsInSession=$request->session()->get("products"); 
        // we check if there are products in a session
        if($productsInSession){
            // Then we extract related products based on the id which is stored as key in $productsInSession
            $productsInCart=Product::findMany(array_keys($productsInSession));
            // Then, we update the total value by invoking the sumPricesByQuantities defined in the Product model
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);

        }

        $viewData = [];
        $viewData["title"] = "Cart - Online Store";
        $viewData["subtitle"] = "Shopping Cart";
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;
        return view('account.cart.index')->with("viewData", $viewData);
    }

    // This function is called first as soon as a product is added to the cart
    public function add(Request $request, $id){
        // The following line of code is the same as declaring an empty array [] 
        // but this array is different because it will grap data from the request session.

        $products = $request->session()->get("products");
       
        $products[$id]=$request->input('quantity');
        
        
        $request->session()->put('products', $products);
        // inside the line above exisists a session product = ['idKey'=>'quantyValue'] eg:  product = [2=>"3"]
        // And this session can be accessed entirley anywhere in our application so we carry on the mechanism to the
        // route('account.cart.index')
    
        return redirect(route('account.cart.index'));
    }

    public function delete(Request $request)
        {
        $request->session()->forget('products');
        return back();
        }

    public function purchase(Request $request)
    {
        $productsInSession = $request->session()->get("products");

        if ($productsInSession) {
            $userId = Auth::user()->id;
            $order = new Order();
            $order->setUserId($userId);
            $order->setTotal(0);
            $order->save();
            $total = 0;

            $productsInCart = Product::findMany(array_keys($productsInSession));

            foreach ($productsInCart as $product) {
                
                $quantity = $productsInSession[$product->getId()];
               
                $total = $total + ($product->getPrice()*$quantity);

                if($total> Auth::user()->getBalance()){

                    return back()->with("warning-message", "Your balance is not enough!");
                  
                }else{
                      // This creates a record in items table
                Item::create([
                    'quantity'=> $quantity,
                    'price'=> $product->getPrice(),
                    'order_id'=> $order->getId(),
                    'product_id'=> $product->getId(),
                 ]);
 
                 // This creates a sales record of certain product in sales table
                 Sale::create([
                     'product_id'=> $product->getId(),
                     'seller_id'=> $product->getUserId(),
                  ]);
                 $total = $total + ($product->getPrice()*$quantity);
                }

                // This updates seller balance for the item bought
                $seller = User::findOrFail($product->getUserId());
                $seller_balance = $seller->balance;
                $seller_new_balance = $seller_balance + ($product->price *$quantity );
                
                User::where('id', $product->getUserId())->update(
                   [ 'balance' => $seller_new_balance]
                );
                
                
                
            }

            $order->setTotal($total);
            $order->save();

            // Updating balance of the user (buyer)
            $newBalance = Auth::user()->getBalance() - $total;
            Auth::user()->setBalance($newBalance);
            Auth::user()->save();

            

            $request->session()->forget('products');
            $viewData = [];
            $viewData["title"] = "Purchase - Online Store";
            $viewData["subtitle"] = "Purchase Status";
            $viewData["order"] = $order;
            return view('account.cart.purchase')->with("viewData", $viewData);
            
        } else {
            
        return redirect(route('account.cart.index'));
        }
    }
    
}
