<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        $data = Carbon::now()->toDateTimeString();
        
        DB::table('contato_tipos')->insert([
            [
                'id' => 1,
                'nomeContatoTipo' => 'Telefone Fixo',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 2,
                'nomeContatoTipo' => 'Whatsapp',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 3,
                'nomeContatoTipo' => 'Email',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 4,
                'nomeContatoTipo' => 'Facebook',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 5,
                'nomeContatoTipo' => 'Instagram',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 6,
                'nomeContatoTipo' => 'Twitter',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 7,
                'nomeContatoTipo' => 'YouTube',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 8,
                'nomeContatoTipo' => 'Site',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 9,
                'nomeContatoTipo' => 'Telegram',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
    }
}
