<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaInformacao extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];

    public function empresa() {
        // Vários registros pertencem a uma "Empresa".
        return $this->belongsTo(Empresa::class);
    }

}
