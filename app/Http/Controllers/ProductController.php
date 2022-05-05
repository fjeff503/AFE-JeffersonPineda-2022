<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Model;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //para autenticacion
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Usando la función auth, recuperamos todos los productos creados por el usuario.
        luego de user()-›products(Es el nombre de la relación que se hizo en user).
        Todo se asigna a una variable $products la cual se envía mediante with y
        es recorrida en el index.blade*/
        $products = auth()->user()->products;
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$suppliers = DB::table('suppliers')->get()->pluck('supplierName', 'id'); //->dd(); //obtener todos los registros de proveedores

        //Obtener proveedores atravez del modelo
        $suppliers = Supplier::all(['id', 'supplierName']);
        return view('products.create')->with('suppliers', $suppliers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all()); //siver para mostar el consola
        //dd($request['image']->store('upload-productos', 'public')); //siver para mostar el consola
        //Validaciones para el formulario
        $data = request()->validate([
            'productName' => 'required|min:5|max:50',
            'price' => 'required',
            'barcode' => 'required|min:5|max:8',
            'image' => 'required|image',
            'supplier' => 'required'
        ]);
        //Obtener ruta de la imagen
        $ruta_imagen = $request['image']->store('upload-productos', 'public');
        //Resize de la imagen
        //importante la instancia 
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000, 550);
        $img->save();
        //Almacenamos datos del form en la DB sin usar modelo xD
        // DB::table('products')->insert([
        //     'productName' => $data['productName'],
        //     'price' => $data['price'],
        //     'barcode' => $data['barcode'],
        //     'image' => $ruta_imagen,
        //     'user_id' => Auth::user()->id,
        //     'supplier_id' => $data['supplier'],
        // ]);

        //Almacenamos con modelo
        //para almacenar debemos verificar que esten los campos en el model
        auth()->user()->products()->create([
            'productName' => $data['productName'],
            'price' => $data['price'],
            'barcode' => $data['barcode'],
            'image' => $ruta_imagen,
            'supplier_id' => $data['supplier'],
        ]);
        $products = auth()->user()->products;
        return view('products.index')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
