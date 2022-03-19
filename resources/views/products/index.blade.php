<h1>Productos</h1>
@foreach ($products as $product)
   <li>{{$product}}</li> 
@endforeach

<h1>Proveedores</h1>
@foreach ($providers as $provider)
   <li>{{$provider}}</li> 
@endforeach