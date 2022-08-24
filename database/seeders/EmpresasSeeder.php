<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Carbon::now()->toDateTimeString();
        
        DB::table('empresas')->insert([
            [
                'id' => 1,
                'empresa_tipo_id'   => 3, // Galeria de Artesanato
                'nomeEmpresa'       => 'Galeria Cultural Virgínia Gasparini Tamanini',// (Galeria de Artesanato)',
                'linkGoogleMaps'    => 'https://goo.gl/maps/E36qQN6ikvpDJWug6',
                'latitude'          => -19.9300019,
                'longitude'         => -40.5990548,
                'caminhoImagem'     => '/images/01galeriaartesanato/',
                'created_at' => $data,
                'updated_at' => $data,
                // Site de Documentação do Google
                // https://developers.google.com/maps/documentation?hl=pt-BR
                // https://developers.google.com/maps/documentation/urls/get-started?hl=pt-br
                // Padrão do Google Maps
                // http://www.google.com/maps/place/-19.9300019,-40.5990548
                // http://www.google.com/maps/place/lat,lng
                // https://stackoverflow.com/questions/30544268/create-google-maps-links-based-on-coordinates
            ],
            [
                'id' => 2,
                'empresa_tipo_id'   => 2, // Vinícola/Cantina
                'nomeEmpresa'       => 'Vinícola Rassele',
                'linkGoogleMaps'    => 'https://goo.gl/maps/ZZkyny31Cvn1kQFk6',
                'latitude'          => -19.932677,
                'longitude'         => -40.604819,
                'caminhoImagem'     => '/images/02rassele/',
                'created_at' => $data,
                'updated_at' => $data,
                // http://www.google.com/maps/place/-19.932677,-40.604819
            ],
            [
                'id' => 3,
                'empresa_tipo_id'   => 2, // Vinícola/Cantina
                'nomeEmpresa'       => 'Vinícola Labiata',
                'linkGoogleMaps'    => 'https://goo.gl/maps/7FCtM6FHkSvWgPd47',
                'latitude'          => -19.933667,
                'longitude'         => -40.604982,
                'caminhoImagem'     => '/images/03labiata/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 4,
                'empresa_tipo_id'   => 2, // Vinícola/Cantina
                'nomeEmpresa'       => 'Cantina Mattiello',
                'linkGoogleMaps'    => 'https://g.page/CantinaMattiello?share',
                'latitude'          => -19.931491,
                'longitude'         => -40.615283,
                'caminhoImagem'     => '/images/04mattiello/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 5,
                'empresa_tipo_id'   => 2, // Vinícola/Cantina
                'nomeEmpresa'       => 'Cantina Romanha',
                'linkGoogleMaps'    => 'https://goo.gl/maps/EcM8bhez5C3pjLHZ6',
                'latitude'          => -19.929757,
                'longitude'         => -40.622155,
                'caminhoImagem'     => '/images/05romanha/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 6,
                'empresa_tipo_id'   => 2, // Vinícola/Cantina
                'nomeEmpresa'       => 'Casa dos Espumantes',
                'linkGoogleMaps'    => 'https://g.page/CasaDosEspumantes?share',
                'latitude'          => -19.916327,
                'longitude'         => -40.638203,
                'caminhoImagem'     => '/images/06casaespumante/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 7,
                'empresa_tipo_id'   => 2, // Vinícola/Cantina
                'nomeEmpresa'       => 'Vinícola Tomazelli',
                'linkGoogleMaps'    => 'https://goo.gl/maps/rWGRQNSuP9Hwexj16',
                'latitude'          => -19.932515,
                'longitude'         => -40.637202,
                'caminhoImagem'     => '/images/07tomazelli/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 8,
                'empresa_tipo_id'   => 2, // Vinícola/Cantina
                'nomeEmpresa'       => 'Cantina Braun',
                'linkGoogleMaps'    => 'https://goo.gl/maps/x3VnS2moV5C6ZWaY7',
                'latitude'          => -19.918594,
                'longitude'         => -40.693288,
                'caminhoImagem'     => '/images/08braun/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 9,
                'empresa_tipo_id'   => 2, // Vinícola/Cantina
                'nomeEmpresa'       => 'Cantina Grotteschi',
                'linkGoogleMaps'    => 'https://goo.gl/maps/UedVX9w2N7GWpcU69',
                'latitude'          => -19.917884,
                'longitude'         => -40.693252,
                'caminhoImagem'     => '/images/09grotteschi/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 10,
                'empresa_tipo_id'   => 2, // Vinícola/Cantina
                'nomeEmpresa'       => 'Tabocas Vin De Garage',
                'linkGoogleMaps'    => 'https://goo.gl/maps/gH1HEL2nQARE5sf18',
                'latitude'          => -19.912115,
                'longitude'         => -40.694446,
                'caminhoImagem'     => '/images/10tabocas/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 11,
                'empresa_tipo_id'   => 2, // Vinícola/Cantina
                'nomeEmpresa'       => 'Vinícola Ziviani',
                'linkGoogleMaps'    => 'https://goo.gl/maps/2uGZRTdkzKuB8MnF7',
                'latitude'          => -19.887331,
                'longitude'         => -40.702003,
                'caminhoImagem'     => '/images/11ziviani/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
            [
                'id' => 12,
                'empresa_tipo_id'   => 1, // Associação
                'nomeEmpresa'       => 'AVIST (Associação dos Vitivinicultores de Santa Teresa)',
                'linkGoogleMaps'    => '',
                'latitude'          => 0,
                'longitude'         => 0,
                'caminhoImagem'     => '/images/',
                'created_at' => $data,
                'updated_at' => $data,
            ],
        ]);
    }
}
