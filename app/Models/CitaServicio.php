<?php

namespace App\Models;

// Como esta es la tabla de pivoting entonces extendemos de Pivot en ves de Model
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
class CitaServicio extends Pivot
{
    use HasFactory;

    protected $table = 'cita_servicio';

    protected $fillable = ['cita_id', 'servicio_id'];
}
