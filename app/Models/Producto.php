<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = ['nombre', 'descripcion', 'precio', 'idProveedor'];

    // Relación Many-to-One (muchos a uno) con Proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'idProveedor');
    }
}
