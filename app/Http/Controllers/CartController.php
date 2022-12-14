<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);
      

            return view('cart', ['msg' => 'Delete item in cart successfully!']);
            //session()->flash('success','Product remove successfully');
        }
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            sesstion()->put('cart', $cart);

            $subTotal = $cart[$request->id]['quantity'] * $cart[$request->id]['price'];

            $total = $this->getCartTotal();
            dd($cart);
            return view('cart', ['msg' => 'Cart update successfully','total' => $total, 'subTotal' => $subTotal]);

            //session()->flash('success', 'Cart update successfully');  
        }
    }

    public function cart()
    {
        return view('cart');
    }
}

