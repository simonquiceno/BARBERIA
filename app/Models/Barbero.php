<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barbero extends Model
{
    use HasFactory;

    // Relación One-to-Many (uno a muchos) con Cita.
    protected $table = 'barberos';

    protected $fillable = ['nombre', 'correo', 'telefono'];

    public function citas()
    {
        return $this->hasMany(Cita::class, 'idBarbero');
    }
}