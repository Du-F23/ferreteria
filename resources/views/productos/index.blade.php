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
                <h6 class="text-white text-capitalize ps-3">Lista De Articulos</h6>
                <div class="float-end">
                <a href="/productos/add">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="tooltip" data-bs-placement="top" title="Agregar">
                      <i class="fas fa-plus-circle"></i>
                    </button>
                </a>
                </div>
              </div>
            </div>
                  {{-- <!-- Modal ADD  STAR-->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ingresa Una Categoria </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label=""></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">

                              {{-- <form action="{{route('category.store') }}" method="POST">
                                {{-- generar el token para el envio de dato csrf --}}


                                {{-- <label class="col" for="">Nombre Categoria:</label>
                                <input id= "name" class="col from-control" type="text" name="name" placeholder="Deportes">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                              <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            </form> --}}
                          {{-- </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                  <!-- Modal ADD  END  -->
        <table class="table">
            <thead>
                <tr>
                <th>Clave</th>
                <th>nombre</th>
                <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->name}}</td>
                    <td>
                        <button type='button' class="btn btn-primary"><i class="far fa-eye"></i></button>
                        <a type='button' href="/article/{{$article->id}}/edit"><button type='button' class="btn btn-success"><i class="fas fa-pen-square"></i></button></a>
                        <button type='submit' class="btn btn-danger"
                        onClick="return confirm('estas seguro  a eliminar el registro?')"><i class="far fa-trash-alt"></i></button>
                       {{--  <input
                          type="submit"
                          value="Eliminar"
                          class="btn btn-sm btn-danger"
                          onClick="return confirm('estas seguro  a eliminar el registro?')">
                           --}}
                  </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        {{$products->links()}}
    </div>
</div>
@endsection
