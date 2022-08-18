<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaContatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Carbon::now()->toDateTimeString();

        // 1 - Telefone Fixo
        // 2 - Whatsapp
        // 3 - Email
        // 4 - Facebook
        // 5 - Instagram
        // 6 - Twitter
        // 7 - YouTube

        // Galeria de Artesanato (CNPJ: 01300688000198)
        $empresa = 1;
        DB::table('empresa_contatos')->insert([
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '27996135694',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [ //https://www.w3schools.com/php/php_ref_string.asp - Funções de String PHP
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27996135694',
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'artesanato_ST@TESTE.br',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'aproaast.galeria',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            /*
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => '100069791351439', //https://www.facebook.com/people/Aproaast-Santa-Teresa/100069791351439/
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 6, // Twitter
                'descricao'       => 'Canal no Twitter',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 7, // YouTube
                'descricao'       => 'Canal no YouTube',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 8, // Site
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
        ]);

        // Rassele
        $empresa = 2;
        DB::table('empresa_contatos')->insert([
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '2732591486',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27997041800',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27999955926',
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'vinicolarassele',
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 6, // Twitter
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 7, // YouTube
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 8, // Site
                'descricao'       => 'https://www.instagram.com/vinicolarassele/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Labiata
        $empresa = 3;
        DB::table('empresa_contatos')->insert([
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '27999744710',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27999744710',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27999919045',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'vinicolalabiata@hotmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'vinicolalabiata',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'Vinícola-Labiata-1321091338053955',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            /*
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 6, // Twitter
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 7, // YouTube
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 8, // Site
                'descricao'       => 'https://www.instagram.com/vinicolalabiata/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        /*
        // MODELO
        $empresa = ;
        DB::table('empresa_contatos')->insert([
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 6, // Twitter
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 7, // YouTube
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 8, // Site
                'descricao'       => 'https://www.instagram.com/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */
    }
}
