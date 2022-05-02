@extends('layouts.app')

@section('css')

@endsection

@section('buttons')
   <a class="btn btn-primary mr-2" href="{{route('products.index')}}">Regresar</a>
@endsection


@section('content'){{-- nombre del yield en la pagina que heredamos --}}
   <h2 class="text-center mb-5">Crear nuevo producto</h2>
   <div class="row justify-content-center">
      <div class="col-md-8">
         <form method="POST" action="{{route('products.store')}}" novalidate>
            @csrf
            <div class="row mb-3">
                <label for="supplier">Proveedores</label>
                <div class="col-md-6">
                   <select name="supplier" class="form-control" id="supplier">
                      @foreach ($suppliers as $id => $supplier)
                          <option value="{{ $id }}">{{$supplier}}</option>
                      @endforeach
                   </select>
                  
                </div>
            </div>

            <div class="row mb-3">
                <label for="productName">Titulo del producto</label>
                <div class="col-md-6">
                    <input type="text" name="productName" id="productName" class="form-control @error('productName') is-invalid @enderror" placeholder="Nombre del producto" value="{{old('productName')}}">
                    @error('productName')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
                </div>
            </div>
            <div class="row-mb-0"></div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Agregar Producto">
            </div>
        </form>
      </div>
   </div>
@endsection

@section('js')
@endsection