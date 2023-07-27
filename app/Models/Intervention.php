<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Intervention extends Model
{
    use HasFactory, SoftDeletes;

    public function tipoFluido()
    {
        return $this->belongsTo(TipoFluido::class, 'tipo_fluidos_id');
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'veiculos_id');
    }

    public function fatura()
    {
        return $this->belongsTo(Fatura::class, 'faturas_id');
    }
}
