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
          {{-- enctype="multipart/form-data" para que acepte imagenes --}}
          <form method="POST" action="{{route('products.store')}}" novalidate enctype="multipart/form-data"> {{--novalidate para no validar con el form sino con el framework--}}
            @csrf
            {{-- Titulo Producto --}}
            <div class="row mb-3">
                <label for="productName">Titulo Producto</label>
                <div class="col-md-6">
                    <input type="text" name="productName" id="productName" class="form-control @error('productName') is-invalid @enderror" placeholder="Nombre del producto" value="{{old('productName')}}"/>
                    @error('productName')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
                </div>
            </div>
            {{-- Precio --}}
            <div class="row mb-3">
                <label for="price">Precio</label>
                <div class="col-md-6">
                    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Precio del producto" value="{{old('price')}}"/>
                    @error('price')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
                </div>
            </div>
            {{-- Código de barras --}}
            <div class="row mb-3">
                <label for="barcode">Código de barras</label>
                <div class="col-md-6">
                    <input type="text" name="barcode" id="barcode" class="form-control @error('barcode') is-invalid @enderror" placeholder="Código de barras" value="{{old('barcode')}}"/>
                    @error('barcode')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
                </div>
            </div>
            {{-- Proveedores --}}
            <div class="row mb-3">
                <label for="supplier">Proveedores</label>
                <div class="col-md-6">
                    <select name="supplier" class="form-control" @error('supplier') is-invalid @enderror id="supplier">
                     <option>Seleccione---</option>
                        {{-- @foreach ($suppliers as $id => $supplier) --}}
                        @foreach ($suppliers as $supplier)
                           <option value="{{ $supplier->id }}"{{old('supplier')==$supplier->id ? 'selected':''}}>{{$supplier->supplierName}}</option>
                       @endforeach
                    </select>
                   @error('supplier')
                   <span class="invalid-feedback d-block" role="alert">
                       <strong>{{$message}}</strong>
                   </span>
                   @enderror
                 </div>
            </div>
            {{-- Imagen --}}
            <div class="row mb-3">
                <label for="image">selecciona una imagen para el Producto</label>
                <div class="col-md-6">
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Seleccione una imagen" value="{{old('image')}}"/>
                    @error('image')
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