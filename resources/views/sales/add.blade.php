@extends('layouts.app')
@extends('layouts.header')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <form method="POST" action="{{route('venta.store', ['id'=>$venta->id])}}" class="form-horizontal">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Crear Venta</h4>
                        <!-- <p class="card-category">User information</p> -->
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Cantidad</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="quantity" id="quantity" type="number" placeholder="Cantidad" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="product_id" class="col-sm-2 col-form-label">Producto</label>
                    <div class="col-sm-7">
                        <select class="form-group bmd-form-group" name="product_id" id="product_id">
                            <option selected value="">Selecciona</option>
                            @foreach($products as $product)
                            <option value="{!! $product->id !!}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                        </div>
                        <div class="row">
                            <label for="user_id" class="col-sm-2 col-form-label">Usuario</label>
                    <div class="col-sm-7">
                        <select class="form-group bmd-form-group" name="user_id" id="user_id">
                            <option selected value="">Selecciona</option>
                            @foreach($usuarios as $usuario)
                            <option value="{!! $usuario->id !!}">{{ $usuario->name }}</option>
                            @endforeach
                        </select>
                    </div>
                        </div>
                        <div class="row">
                            <label for="client_id" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-7">
                        <select class="form-group bmd-form-group" name="client_id" id="client_id">
                            <option selected value="">Selecciona</option>
                            @foreach($clientes as $cliente)
                            <option value="{!! $cliente->id !!}">{{ $cliente->name }}</option>
                            @endforeach
                        </select>
                    </div>
                        </div>
                        <div class="row">
                            <label for="category_id" class="col-sm-2 col-form-label">Categoría</label>
                    <div class="col-sm-7">
                        <select class="form-group bmd-form-group" name="category_id" id="category_id">
                            <option selected value="">Selecciona</option>
                            @foreach($categorias as $categoria)
                            <option value="{!! $categoria->id !!}">{{ $categoria->name }}</option>
                            @endforeach
                        </select>
                    </div>
                        </div>
                    </div>
                </div>

                <button type="submit" id="btn-guardar" class="btn btn-primary">guardar</button>
            </form>
        </div>

    </div>
</div>
@endsection
