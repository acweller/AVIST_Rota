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
                'hiperlink'  => '',
                'horario'    => 'Diariamente, das 8h às 17h.',
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
                'hiperlink'  => '',
                'horario'    => 'Todos os dias das 07:30 às 17:30 horas.',
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
                'hiperlink'  => '',
                'horario'    => 'Das', // Pendente
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
                'nome'       => 'Serviço de Vendas Online',
                'descricao'  => 'Clique aqui, consulte e peça direto conosco!',
                'hiperlink'  => 'https://is.gd/stdi0g',
                'horario'    => 'Diariamente, pela Internet.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'Segunda a Sexta',
                'hiperlink'  => '',
                'horario'    => 'Das 09:00 às 16:00.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'Sábado e Domingo',
                'hiperlink'  => '',
                'horario'    => 'Das 08:00 às 17:00.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Visita Guiada',
                'descricao'  => 'Sábado, Domingo e Feriados. Com agendamento prévio, é possível fazer uma visitação pela fábrica, conhecendo o processo de produção e degustação de vinhos (consulte valores e datas via WhatsApp, consulte link abaixo).',
                'hiperlink'  => '',
                'horario'    => 'Das 13:00 às 15:00 (duração aproximada de 50 minutos por grupo).',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Assinatura MINHA RESERVA',
                'descricao'  => 'Pensando em atender melhor os nossos clientes, estamos disponibilizando agora na forma de assinatura o serviço Assinatura MINHA RESERVA, onde estaremos entregando, todos os meses na sua casa, os melhores vinhos, de acordo com o tipo de assinatura que você, nosso cliente, escolher (consulte valores via WhatsApp ou através de nosso site).',
                'hiperlink'  => '',
                'horario'    => 'A Assinatura MINHA RESERVA, inaugurada em 2006 para guardar os vinhos dos nossos clientes e amigos, foi ideia do nosso amigo Ronald Mansur.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Romanha
        $empresa = 5;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente da loja',
                'descricao'  => 'Diariamente',
                'hiperlink'  => '',
                'horario'    => 'Das ...', // Pendente
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente do Restaurante',
                'descricao'  => 'Sábado',
                'hiperlink'  => '',
                'horario'    => 'Das 11:30 às 17:00.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente do Restaurante',
                'descricao'  => 'Domingo',
                'hiperlink'  => '',
                'horario'    => 'Das 11:30 às 15:00.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Espumantes
        $empresa = 6;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'Terça à Sábado',
                'hiperlink'  => '',
                'horario'    => 'Das 08h às 17h.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'Domingos e Feriados',
                'hiperlink'  => '',
                'horario'    => 'Das 09h às 16h.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Degustação Orientada',
                'descricao'  => 'A Casa dos Espumantes é uma oportunidade para que os amantes de um bom espumante possam passar por uma experiência exclusiva de degustação dos nossos produtos, com organização e atendimento personalizados.',
                'hiperlink'  => '',
                'horario'    => 'Agende sua Experiência via WhatsApp (consulte link abaixo).',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tomazelli
        $empresa = 7;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente da loja',
                'descricao'  => 'Diariamente',
                'hiperlink'  => '',
                'horario'    => 'Das 08h às 17h.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente do Restaurante',
                'descricao'  => 'Sábado',
                'hiperlink'  => '',
                'horario'    => 'Almoço: Das 11h às 15. Jantar: Das 18h às 22h.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente do Restaurante',
                'descricao'  => 'Domingo e Feriado',
                'hiperlink'  => '',
                'horario'    => 'Almoço: Das 11h às 15. ',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Braun
        $empresa = 8;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'Sexta',
                'hiperlink'  => '',
                'horario'    => 'Das 12:00 às 18:00',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'Sábado, Domingo e Feriado',
                'hiperlink'  => '',
                'horario'    => 'Das 08:00 às 18:00',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'empresa_id' => $empresa,
                'nome'       => 'Agendamento de excursão',
                'descricao'  => 'Traga sua família para se divertir e conhecer nossas parreiras e a vinícola com grande variedade de produtos regionais.',
                'hiperlink'  => '',
                'horario'    => 'Sábados, Domingos e Feriados. Agende sua visita via WhatsApp (consulte link abaixo).',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Grotteschi
        $empresa = 9;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'Todos os dias',
                'hiperlink'  => '',
                'horario'    => 'Das 09:00 às 17:00.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Tabocas
        $empresa = 10;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'De Segunda-Feira a Sexta-Feira',
                'hiperlink'  => '',
                'horario'    => 'Das 13:00 às 17:00.',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);

        // Ziviani
        $empresa = 11;
        DB::table('empresa_servicos')->insert([
            [
                'empresa_id' => $empresa,
                'nome'       => 'Expediente',
                'descricao'  => 'Diariamente',
                'hiperlink'  => '',
                'horario'    => 'Das ', // Pendente
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
                'hiperlink'  => '',
                'horario'    => 'Das ',
                'ativo'      => true,
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
        */

    }
}
