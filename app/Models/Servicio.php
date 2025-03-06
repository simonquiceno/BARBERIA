<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios';

    protected $fillable = ['nombre', 'descripcion', 'precio'];

    // Relación Many-to-Many (muchos a muchos) con Cita.
    public function citas()
    {
        return $this->belongsToMany(Cita::class, 'cita_servicio', 'servicio_id', 'cita_id');
    }
}
