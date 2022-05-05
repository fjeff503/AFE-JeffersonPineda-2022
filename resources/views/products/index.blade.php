@extends('layouts.app')

@section('css')

@endsection

@section('buttons')
   <a class="btn btn-primary mr-2" href="{{route('products.create')}}">Crear Productos</a>
@endsection


@section('content'){{-- nombre del yield en la pagina que heredamos --}}
<h1>Productos</h1>
<h2 class="text-center mb-5">Administración de productos</h2>
<div class="col-md10 mx-auto bg-white p-3">
   <table class="table">
      <thead class="bg-danger text-light">
         <tr>
            <th scole="col">Código</th>
            <th scole="col">Nombre</th>
            <th scole="col">Precio</th>
            <th scole="col">Código de barra</th>
            <th scole="col">Proveedor</th>
            <th scole="col">Acciones</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($products as $item)
             <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->productName}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->barcode}}</td>
                <td>{{$item->supplier_id}}</td>
                <td>
                   <a href="" class="btn btn-danger mr-1">Eliminar</a>
                   <a href="" class="btn btn-warning mr-1">Editar</a>
                   <a href="" class="btn btn-success mr-1">Mostrar</a>
                </td>
             </tr>
         @endforeach
      </tbody>
   </table>
</div>
@endsection

@section('js')
@endsection