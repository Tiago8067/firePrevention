<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;

    public function tipoFluido()
    {
        return $this->belongsTo(TipoFluido::class, 'tipo_fluidos_id');
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'veiculos_id');
    }
}
