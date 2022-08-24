@extends('layout.mainlayout')

@section('cabecalho')
    Vinícolas
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success" role="alert">
            {{ $mensagem }}
        </div>
    @endif
    <ul class="list-group">
        @foreach ($empresas as $empresa)
            @if (($empresa->empresa_tipo_id == 2) || ($empresa->empresa_tipo_id == 3))
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('rota_profile_empresa', $empresa->id)}}">
                        {{ $empresa->nomeEmpresa }}
                    </a>
                    <span class="d-flex">
                        <a href="{{ $empresa->linkGoogleMaps }}" class="btn btn-outline-primary btn-sm mr-0" data-toggle="tooltip" data-placement="bottom" title="Link Google Maps" target="_blank">
                            <i class="fa-solid fa-map-location"></i>
                        </a>
                        <a href="http://www.google.com/maps/place/{{$empresa->latitude}},{{$empresa->longitude}}" class="btn btn-outline-primary btn-sm ml-0"  data-toggle="tooltip" data-placement="bottom" title="Mapa via Coordenadas" target="_blank">
                            <i class="fa-solid fa-earth-americas"></i>
                        </a>
                    </span>
                </li>
            @endif
        @endforeach
    </ul>
@endsection
