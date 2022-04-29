<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContatoTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contato_tipos')->insert([
            ['nomeContatoTipo' => 'Telefone Fixo'],
            ['nomeContatoTipo' => 'Whatsapp'],
            ['nomeContatoTipo' => 'Email'],
            ['nomeContatoTipo' => 'Facebook'],
            ['nomeContatoTipo' => 'Instagram'],
            ['nomeContatoTipo' => 'Twitter'],
            ['nomeContatoTipo' => 'YouTube'],
        ]);
    }
}
