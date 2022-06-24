<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaProduto extends Model
{
    use HasFactory;

    protected $fillable = [''];

    public function empresa() {
        // Um "Produto" pertence a uma "Empresa"
        return $this->belongsTo(Empresa::class);
    }
}
