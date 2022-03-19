<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function mostrar()
    {
        $products = ['Jabòn', 'Papel', 'Detergente', 'Cepillo'];
        $providers = ['A', 'B', 'C', 'D'];
        //return view('products/index')->with('products', $products)->with('providers', $providers);
        return view('products/index', compact('products', 'providers'));

        //return ('Hola mundo controller'); //ademas podemos retornar un mensaje
    }
}
