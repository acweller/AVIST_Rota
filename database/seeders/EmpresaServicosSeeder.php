<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Carbon::now()->toDateTimeString();

        // Galeria de Artesanato
        $empresa = 1;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => '',
                'horario'    => 'Diariamente, de 8h às 17h.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Rassele
        $empresa = 2;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => '',
                'horario'    => 'Todos os dias de 07:30 às 17:30 horas.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Labiata
        $empresa = 3;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => '',
                'horario'    => 'De ', // Pendente
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Mattiello
        $empresa = 4;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'Segunda a Sexta',
                'horario'    => 'De 09:00 às 16:00.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'Sábado e Domingo',
                'horario'    => 'De 08:00 às 17:00.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Visita Guiada',
                'descricao'  => 'Sábado, Domingo e Feriados. Com agendamento prévio, é possível fazer uma visitação pela fábrica, conhecendo o processo de produção e degustação de vinhos (consulte valores e datas via WhatsApp).',
                'horario'    => 'De 13:00 às 15:00 (duração aproximada de 50 minutos por grupo).',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Assinatura MINHA RESERVA',
                'descricao'  => 'Pensando em atender melhor os nossos clientes, estamos disponibilizando agora na forma de assinatura o serviço Assinatura MINHA RESERVA, onde estaremos entregando, todos os meses na sua casa, os melhores vinhos, de acordo com o tipo de assinatura que você, nosso cliente, escolher (consulte valores via WhatsApp ou através de nosso site).',
                'horario'    => 'A Assinatura MINHA RESERVA, inaugurada em 2006 para guardar os vinhos dos nossos clientes e amigos, foi ideia do nosso amigo Ronald Mansur.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        /*
        // MODELO
        $empresa = ;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => '',
                'horario'    => 'De ',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */

    }
}
