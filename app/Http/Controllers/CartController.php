<?php

namespace App\Http\Controllers;

use App\Http\Resources\LibroResource;
use Illuminate\Http\Request;
use App\Models\Libro;

class CartController extends Controller
{

    public function shop()

    {

        $libro = Libro::all();

       //dd($libro);

        return view('shopcart')->with(['libro' => $libro]);

    }


    public function cart()  {

        $cartCollection = \Cart::getContent();

        //dd($cartCollection);

        return view('cart')->with(['cartCollection' => $cartCollection]);;

    }

    public function remove(Request $request){

        \Cart::remove($request->id);

        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');

    }


    public function add(Request $request){

        $libro = new LibroResource(Libro::obtenerLibrosPorId($request->id));

        \Cart::add(array(
            $libro -> id,
            $libro -> nombre,
            $libro -> precio,
            $libro -> foto,
            $libro -> autor -> nombre,
        ));

        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');

    }


    public function update(Request $request){

        \Cart::update($request->id,

            array(

                'quantity' => array(

                    'relative' => false,

                    'value' => $request->quantity

                ),

        ));

        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');

    }


    public function clear(){

        \Cart::clear();

        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');

    }
}