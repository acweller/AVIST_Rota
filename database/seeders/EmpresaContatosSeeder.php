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
            [ //https://www.w3schools.com/php/php_ref_string.asp - Funções de String PHP
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '27992528208',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27992528208',
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => '',
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
            ],*/
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 8, // Site
                'descricao'       => 'https://www.instagram.com/aproaast.galeria/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
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
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'vinicolarassele@gmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
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

        // Mattiello
        $empresa = 4;
        DB::table('empresa_contatos')->insert([
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '27999085282',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '27998506158',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27999085282',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27998506158',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'cantinamattiello2@hotmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'CantinaMattiello',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'cantinamattiello',
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
                'descricao'       => 'https://www.cantinamattiello.com.br/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 10, // Tour Virtual
                'descricao'       => 'https://tinyurl.com/y2j7vxtd',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Romanha
        $empresa = 5;
        DB::table('empresa_contatos')->insert([
            /*[
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27998774105',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'ristoranteromanhast@yahoo.com.br',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'RistoranteRomanha',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'ristorante.romanha',
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
                'descricao'       => 'https://www.instagram.com/ristorante.romanha',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Espumantes
        $empresa = 6;
        DB::table('empresa_contatos')->insert([
            /*[
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27999743774',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27998150273',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'casadosespumantes@hotmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'CasaDosEspumantes',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'casadosespumantes',
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
                'descricao'       => 'http://www.casadosespumantes.com.br',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tomazelli
        $empresa = 7;
        DB::table('empresa_contatos')->insert([
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '2722358170',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27999671295',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27998711965',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'vinicolatomazelli@gmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'vinicolatomazelli',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'vinicolatomazelli',
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
                'descricao'       => 'https://www.instagram.com/vinicolatomazelli',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Braun
        $empresa = 8;
        DB::table('empresa_contatos')->insert([
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '27998094127',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27998094127',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'elidatonn@gmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'CantinaBraun',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'CantinaBraun',
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
                'descricao'       => 'https://www.facebook.com/CantinaBraun',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Grotteschi
        $empresa = 9;
        DB::table('empresa_contatos')->insert([
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '2731190364',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27996441934',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27999272190',
                'created_at' => $data,
                'updated_at' => $data,
            ],/*
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'grotteschicantina',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'cantinagrotteschi',
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
                'descricao'       => 'https://cantina-grotteschi.negocio.site/?utm_source=gmb&utm_medium=referral',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tabocas
        $empresa = 10;
        DB::table('empresa_contatos')->insert([
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '27998407860',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27998407860',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '27998166511',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27998166511',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '27998338203',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27998338203',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'vcorbellini@gmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'VindeGarageTabocas',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'tabocasvindegarage',
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
                'descricao'       => 'https://www.vinicolatabocas.com/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 9, // Telegram
                'descricao'       => 'tabocas',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Ziviani
        $empresa = 11;
        DB::table('empresa_contatos')->insert([
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '27999740850',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27999632055',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'wilhan_carlini@hotmail.com',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'vinicola.ziviani',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'vinicolaziviani',
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
                'descricao'       => 'https://www.instagram.com/vinicolaziviani',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // AVIST (Atualmente é a Romanha)
        $empresa = 12;
        DB::table('empresa_contatos')->insert([
            /*[
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 1, // Telefone Fixo
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],*/
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 2, // Whatsapp
                'descricao'       => '27998774105',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 3, // Email
                'descricao'       => 'ristoranteromanhast@yahoo.com.br',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 4, // Facebook
                'descricao'       => 'RistoranteRomanha',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 5, // Instagram
                'descricao'       => 'ristorante.romanha',
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
                'descricao'       => 'https://www.instagram.com/ristorante.romanha',
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
            [
                'empresa_id'      => $empresa,
                'contato_tipo_id' => 9, // Telegram
                'descricao'       => '',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */
    }
}
