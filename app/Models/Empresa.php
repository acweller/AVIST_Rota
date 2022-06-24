<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    // Ver explicação sobre FILLABLE E GUARDED
    // https://the-webdev-guy.medium.com/laravel-models-fillable-or-guarded-202bafef51a4
    //protected $guarded = [
    //    'id',
    //];
    protected $fillable = [
        'empresa_tipo_id',
        'nomeEmpresa',
        'linkGoogleMaps',
        'latitude',
        'longitude',
    ];

    // Busca os Contatos
    public function EmpresaContatos() {
        // Uma empres tem muitos Contatos
        return $this->hasMany(EmpresaContato::class);
    }

    // Busca os Endereços
    public function EmpresaEnderecos() {
        // Uma empres tem muitos Endereços
        return $this->hasMany(EmpresaEndereco::class);
    }

    // Busca as Imagems
    public function EmpresaImagems() {
        // Uma empres tem muitas Imagems
        return $this->hasMany(EmpresaImagem::class);
    }

    // Busca as Informações
    public function EmpresaInformacaos() {
        // Uma empres tem muitas Informações
        return $this->hasMany(EmpresaInformacao::class);
    }

    // Busca as Pessoas
    public function EmpresaPessoas() {
        // Uma empres tem muitas Pessoas
        return $this->hasMany(EmpresaPessoa::class);
    }

    // Busca os Produtos
    public function EmpresaProdutos() {
        // Uma empres tem muitos Produtos
        return $this->hasMany(EmpresaProduto::class);
    }

    // Busca os Serviçoes
    public function EmpresaServicos() {
        // Uma empres tem muitos Serviços
        return $this->hasMany(EmpresaServico::class);
    }

}
