@extends('layouts.app')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Editar Categoria</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container">
                                <form action="{{route('producto.update', ['id'=>$product->id])}}" method="POST">
                                    {{-- generar el token para el envio de dato csrf --}}
                                    @csrf
                                    @method('PUT')
                                    <label class="col" for="">Nombre Producto:</label>
                                    <br>
                                    <div class="card">
                                        <div class="card-header card-header-primary">
                                            <h4 class="card-title">Editar producto</h4>
                                            <!-- <p class="card-category">User information</p> -->
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <label for="title" class="col-sm-2 col-form-label">Nombre</label>
                                                <div class="col-sm-7">
                                                    <div class="form-group bmd-form-group is-filled">
                                                        <input class="form-control" name="name"  id="title"  value="{{$product->name}}" type="text" placeholder="Nombre" required aria-required="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="subtitle" class="col-sm-2 col-form-label">Cantidad</label>
                                                <div class="col-sm-7">
                                                    <div class="form-group bmd-form-group is-filled">
                                                        <input class="form-control" name="cantidad" id="cantidad" type="number" value="{{$product->cantidad}}" placeholder="Cantidad" required aria-required="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="subtitle" class="col-sm-2 col-form-label">Precio</label>
                                                <div class="col-sm-7">
                                                    <div class="form-group bmd-form-group is-filled">
                                                        <input class="form-control" name="precio" id="precio" type="number" value="{{$product->precio}}" placeholder="Precio" required aria-required="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <label for="category_id" class="col-sm-2 col-form-label">Categoría</label>
                                                <div class="col-sm-7">
                                                    <select class="form-group bmd-form-group" name="category_id" id="category_id">
                                                        <option selected value="">Selecciona</option>

                                                    </select> -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
