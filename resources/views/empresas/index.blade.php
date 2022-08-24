@extends('layout.mainlayout')

@section('cabecalho')
    Veja nossas Vinícolas e Associados
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success" role="alert">
            {{ $mensagem }}
        </div>
    @endif

    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
            <p>
                <a href="images/RotaDoVinho.jpg"  data-toggle="tooltip" data-placement="bottom" title="Ampliar a imagem" target="_blank">
                <img src="images/RotaDoVinho.jpg" alt="Ampliar a imagem" class="img-fluid rounded">
                </a>
            </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                <ul class="list-group">
                    @foreach ($empresas as $empresa)
                        @if (($empresa->empresa_tipo_id == 2) || ($empresa->empresa_tipo_id == 3))
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="{{route('rota_profile_empresa', $empresa->id)}}">
                                    {{ $empresa->nomeEmpresa }}
                                </a>
                                <span class="d-flex">
                                    <a href="{{ $empresa->linkGoogleMaps }}" class="btn btn-outline-primary btn-sm mr-0" data-toggle="tooltip" data-placement="bottom" title="Rota via Google Maps" target="_blank">
                                        <i class="fa-solid fa-map-location"></i> Maps
                                    </a>
                                    <!--a href="http://www.google.com/maps/place/{{$empresa->latitude}},{{$empresa->longitude}}" class="btn btn-outline-primary btn-sm ml-0"  data-toggle="tooltip" data-placement="bottom" title="Mapa via Coordenadas" target="_blank">
                                        <i class="fa-solid fa-earth-americas"></i>
                                    </a-->
                                    <a href="https://waze.com/ul?ll={{$empresa->latitude}},{{$empresa->longitude}}&z=10&navigate=yes" class="btn btn-outline-primary btn-sm ml-0"  data-toggle="tooltip" data-placement="bottom" title="Rota via Waze" target="_blank">
                                        <i class="fa-brands fa-waze"></i> Waze
                                    </a>
                                </span>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
  
@endsection
