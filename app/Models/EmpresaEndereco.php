<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaEndereco extends Model
{
    use HasFactory;

    protected $fillable = [''];

    public function empresa() {
        // Um "Endereço" pertence a uma "Empresa"
        return $this->belongsTo(Empresa::class);
    }
}
