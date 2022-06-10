@extends('layout/base')

@section('content')
    <div class="ShopCart__Texto">
        <p>Cesta</p>
    </div>
    <div class="ShopCart">
        <div class="ShopCart__Box"><!-- En la cesta cada vex que añadimos un libro se añade a los items de cart por lo que se va mostrando con el bucle -->
            @foreach ($cartItems as $item)  
                <div class="ShopCart__Box__Item">
                    <div class="ShopCart__Box__Item__Foto">
                        <img src="{{asset ($item->attributes->foto)}}" />
                    </div>

                    <div class="ShopCart__Box__Item__Info">
                        <p class="Titulo">{{$item->attributes->titulo}}</p>
                        <p class="Autor">{{$item->attributes->autor}}</p>

                        <select name="cantidad" class="Cantidad">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>

                        <p class="Precio">{{$item->attributes->precio}}</p>
                        <div class="Eliminar">
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="id">
                                <button class="Eliminar__Boton">x</button>
                                <!--El boton eliminar borra el libro introducido-->
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="ShopCart__Total">
            <div class="ShopCart__Total__Texto">
                <p>Total: {{ Cart::getTotal() }} €</p> <!-- Llamo al metodo getTotal que va calculando el precio que le envio a cada item de cart -->
            </div>
            <div class="ShopCart__Total__Limpiar">
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button class="ShopCart__Total__Limpiar__Boton">Limpiar Cesta</button>
                    <!-- El boton de Limpiar borra toda la cesta -->
                </form>
            </div>
        </div>
    </div>
@endsection