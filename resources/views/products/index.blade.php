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
            <th scole="col">Codigo</th>
            <th scole="col">Nombre</th>
            <th scole="col">Acciones</th>
         </tr>
      </thead>
      <tbody>
         
      </tbody>
   </table>
</div>
@endsection

@section('js')
@endsection