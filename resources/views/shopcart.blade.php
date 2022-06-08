@extends('layout/base')

@section('content')
    <div class="ShopCart">
        <div class="ShopCart__Texto">
            <p>Cesta</p>
        </div>

        <div class="ShopCart__Box">
            @foreach ($cartItems as $item)  
                <div class="ShopCart__Box__Item">
                    <div class="ShopCart__Box__Item__Foto">
                        <img src="{{asset ($item->foto)}}" />
                    </div>

                    <div class="ShopCart__Box__Item__Info">
                        <p class="Titulo">{{$item->titulo}}</p>
                        <p class="Autor">{{$item->autor}}</p>

                        <div class="Cantidad">
                            <form action="{{ route('cart.update') }}" method="POST" class="Cantidad__form">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id}}" >
                                <input type="number" name="cantidad" value="{{ $item->cantidad }}"  />
                                <button type="submit" class="Cantidad__form__Boton">Actualizar</button>
                            </form>
                        </div>

                        <p class="Precio">{{$item->precio}}</p>
                        <div class="Eliminar">
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="id">
                                <button class="Eliminar__Boton">x</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="ShopCart__Total">
            <div class="ShopCart__Total__Texto">
                <p>Total: {{ Cart::getTotal() }}</p>
            </div>
            <div class="ShopCart__Total__Limpiar">
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button class="ShopCart__Total__Limpiar__Boton">Limpiar Cesta</button>
                </form>
            </div>
        </div>
    </div>
@endsection