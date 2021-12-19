@extends('layouts.app')
@extends('layouts.header')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <form method="POST" action="{{route('producto.store', ['id'=>$producto->id])}}" class="form-horizontal">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Crear artículo</h4>
                        <!-- <p class="card-category">User information</p> -->
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label for="title" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="name"  id="title" type="text" placeholder="Nombre" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Cantidad</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="cantidad" id="cantidad" type="number" placeholder="Cantidad" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Precio</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="precio" id="precio" type="number" placeholder="Precio" required aria-required="true">
                                </div>
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
