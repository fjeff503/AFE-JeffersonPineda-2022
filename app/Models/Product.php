<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'productName',
        'price',
        'barcode',
        'image',
        'supplier_id',
    ];

    //Relacion de 1:1 de Ususario a productos
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
