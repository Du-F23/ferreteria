@extends('layouts.app')
@extends('layouts.header')
@section('content')

<div class="panel-body">
    @if (session('mesage'))
    <div class="alert alert-info alert-dismissible text-white" role="alert">
      <span class="text-sm"> <a href="javascript:;" class="alert-link text-white">Excelente</a>. {{ session('mesage')
        }}.</span>
      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if (session('mesageDelete'))
    <div class="alert alert-danger alert-dismissible text-white" role="alert">
      <span class="text-sm"> <a href="javascript:;" class="alert-link text-white">Excelente</a>. {{
        session('mesageDelete') }}.</span>
      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if (session('mesageUpdate'))
    <div class="alert alert-info alert-dismissible text-white" role="alert">
      <span class="text-sm"> <a href="javascript:;" class="alert-link text-white">Excelente</a>. {{ session('mesageUpdate')
        }}.</span>
      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Lista de Ventas</h6>
                <div class="float-end">
                <a href="/ventas/add">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="tooltip" data-bs-placement="top" title="Agregar">
                      <i class="fas fa-plus-circle"></i>
                    </button>
                </a>
                </div>
              </div>
            </div>

        <table class="table">
            <thead>
                <tr>
                <th>Clave</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Categorias</th>
                <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $ventas)
                <tr>
                    <td>{{$ventas->id}}</td>
                    <td>{{$ventas->client_id}}</td>
                    <td>{{$ventas->product_id}}</td>
                    <td>{{$ventas->category_id}}</td>
                    <td>{{$ventas->quantity}}</td>
                    <td>
                        <button type='button' class="btn btn-primary"><i class="far fa-eye"></i></button>
                        <a type='button' href="/ventas/{{$ventas->id}}/edit"><button type='button' class="btn btn-success"><i class="fas fa-pen-square"></i></button></a>
                        <button type='submit' class="btn btn-danger"
                        onClick="return confirm('estas seguro  a eliminar el registro?')"><i class="far fa-trash-alt"></i></button>
                  </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        {{$sales->links()}}
    </div>
</div>
@endsection
