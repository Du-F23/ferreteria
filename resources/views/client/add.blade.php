@extends('layouts.app')
@extends('layouts.header')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <form method="POST" action="{{route('cliente.store', ['id'=>$cliente->id])}}" class="form-horizontal">
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
                            <label for="subtitle" class="col-sm-2 col-form-label">Domicilio</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="home_address" id="home_address" type="text" placeholder="Domicilio" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Numero Telefonico</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="phone_number" id="phone_number" type="number" placeholder="Numero telefonico" required aria-required="true">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <button type="submit" id="btn-guardar" class="btn btn-primary">guardar</button>
            </form>
        </div>

    </div>
</div>
@endsection
