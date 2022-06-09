<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class CartController extends Controller
{

    public function cart()  {

        $cartItems = \Cart::getContent();
        //dd($cartItems);
        return view('shopcart', ['cartItems' => $cartItems]);

    }


    public function add(Request $request)
    {
        $cart = \Cart::add([
                'id' => $request->id,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'name' => $request->name,
                'attributes' => array(
                    'titulo' => $request->titulo,
                    'precio' => $request->precio,
                    'autor' => $request->autor,
                    'foto' => $request->foto,
                ),
                
        ]);

        return redirect()->route('cart.view', ['Cart' => $cart]);

    }

    
    public function remove(Request $request){

        \Cart::remove($request->id);

        return redirect()->route('cart.view')->with('success_msg', 'Item is removed!');

    }


    public function update(Request $request){

        \Cart::update($request->id,

            array(

                'cantidad' => array(

                    'relative' => false,

                    'value' => $request->quantity

                ),

        ));

        return redirect()->route('cart.view');

    }


    public function clear(){

        \Cart::clear();

        return redirect()->route('cart.view');

    }
}