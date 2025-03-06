<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Cita extends Model
{
    use HasFactory;

    protected $table = 'citas';

    protected $fillable = ['idUsuario', 'idBarbero', 'fecha', 'hora'];

    // Relación Many-to-One (muchas a uno) con Usuario.
    public function usuario()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }

    // Relación Many-to-One (muchas a uno) con Barbero.
    public function barbero()
    {
        return $this->belongsTo(Barbero::class, 'idBarbero');
    }

    // Relación Many-to-Many (muchos a muchos) con Servicio.
    public function servicios()
    {
        // cita_id y servicio_id, cláves foráneas para la tablita pivoting
        return $this->belongsToMany(Servicio::class, 'cita_servicio', 'cita_id', 'servicio_id');
    }
}
