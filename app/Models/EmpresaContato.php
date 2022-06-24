<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaContato extends Model
{
    use HasFactory;

    protected $fillable = [''];

    public function empresa() {
        // Um "Contato" pertence a uma "Empresa"
        return $this->belongsTo(Empresa::class);
    }
}
