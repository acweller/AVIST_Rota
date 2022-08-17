@extends('layout.mainlayout')

@section('estilo')
    <style>
        .fa-facebook, .fa-twitter, .fa-instagram, .fa-youtube {
            padding: 8px;
            font-size: 22px;
            width: 40px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }
    </style>
@endsection

@section('cabecalho')
    {{ $empresa->nomeEmpresa }}
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success" role="alert">
            {{ $mensagem }}
        </div>
    @endif

    <div class="bd-content ps-lg-4">

        @foreach ($imagems as $imagem)
        @if ($imagem->imagem_tipo_id == 2)
            <a href="{{ $empresa->linkGoogleMaps }}" data-toggle="tooltip" data-placement="bottom" title="Clique para abrir o Google Maps" target="_blank">
                <div class="text-center">
                    <img src="{{ addslashes($imagem->caminho) }}" class="img-fluid rounded" alt="{{ addslashes($imagem->descricao) }}">
                </div>
            </a>
        @endif
        @endforeach

        @foreach ($informacaos as $info)
            <p>{{ addslashes($info->descricao) }}</p>
        @endforeach
        
        <h2 id="empresa-endereco">Endereço e Rota<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-endereco" style="padding-left: 0.375em;"></a></h2>
        @foreach ($enderecos as $end)
        <p>
            {{ addslashes($end->rua) }}, 
            @if (!empty($end->numero))
                {{ addslashes($end->numero) }}, 
            @endif
            @if (!empty($end->complemento))
                {{ addslashes($end->complemento) }}, 
            @endif
            @if (!empty($end->bairro))
                {{ addslashes($end->bairro) }}, 
            @endif
            {{ addslashes($end->cidade) }}, 
            {{ addslashes($end->estado) }}. 
            {{ addslashes($end->cep) }}
            <a href="{{ $empresa->linkGoogleMaps }}" target="_blank">(Ver no mapa)</a>
        </p>
        @endforeach

        <p>
            @foreach ($imagems as $imagem)
            @if ($imagem->imagem_tipo_id == 1)
                <a href="{{ $empresa->linkGoogleMaps }}" data-toggle="tooltip" data-placement="bottom" title="Clique para abrir no Google Maps" target="_blank">
                    <div class="text-center">
                        <img src="{{ addslashes($imagem->caminho) }}" class="img-fluid rounded" alt="{{ addslashes($imagem->descricao) }}">
                    </div>
                </a>
            @endif
            @endforeach
        </p>

        <p>
            <h2 id="empresa-redes">Redes Sociais<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-rede" style="padding-left: 0.375em;"></a></h2>
            <div class="container text-center">
                <div class="row">
                    @foreach ($contatos as $contato)
                        @switch($contato->contato_tipo_id)
                        @case(4)
                            <div class="col">
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/{{ addslashes($contato->descricao) }}" class="fa-brands fa-facebook" target="_blank"></a>
                            </div>
                            @break
                        @case(5)
                            <div class="col">
                                <!-- Instagram -->
                                <a href="https://instagram.com/{{ addslashes($contato->descricao) }}" class="fa-brands fa-instagram" target="_blank"></a>
                            </div>
                            @break
                        @case(6)
                            <div class="col">
                                <!-- Twitter -->
                                <a href="https://twitter.com/{{ addslashes($contato->descricao) }}" class="fa-brands fa-twitter" target="_blank"></a>
                            </div>
                            @break
                        @case(7)
                            <div class="col">
                                <!-- YouTube -->
                                <a href="https://www.youtube.com/{{ addslashes($contato->descricao) }}" class="fa-brands fa-youtube" target="_blank"></a>
                            </div>
                            @break
                        @endswitch
                    @endforeach
                </div>
            </div>
        </p>
        
        <h2 id="empresa-produto">Produtos<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-produto" style="padding-left: 0.375em;"></a></h2>
        <ol class="list-unstyled list-group-numbered">
            @foreach ($produtos as $produto)
            @if ($produto->ativo != 11)
                <li class="list-group-item"><b>{{ $produto->nome }}</b>: {{ addslashes($produto->descricao) }}</li>
            @endif
            @endforeach
        </ol>
        
        <h2 id="empresa-servico">Serviços<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-servico" style="padding-left: 0.375em;"></a></h2>
        <ol class="list-unstyled list-group-numbered">
            @foreach ($servicos as $servico)
            @if ($servico->ativo == 1)
                <li class="list-group-item">
                    <b>{{ $servico->nome }}</b>:
                    {{ addslashes($servico->descricao) }}<br>
                    Horário: {{ addslashes($servico->horario) }}
                </li>
            @endif
            @endforeach
        </ol>
        
        <p>
            <h2 id="empresa-imagem">Galeria de imagens<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-imagem" style="padding-left: 0.375em;"></a></h2>
            <div id="carouselEmpresaImagem" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($imagems as $imagem)
                    <button type="button" data-bs-target="#carouselEmpresaImagem" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : '' }}"  aria-label="{{ addslashes($imagem->descricao) }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($imagems as $imagem)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }} bg-image"
                        style="background-image: url('{{ $imagem->caminho }}');">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <!--p>{{ addslashes($imagem->descricao) }}</p-->
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselEmpresaImagem" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselEmpresaImagem" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </p>

        <h2 id="empresa-contato">Contato<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-contato" style="padding-left: 0.375em;"></a></h2>
        @foreach ($pessoas as $pessoa)
            <div class="btn-group btn-group-sm">
                <div class="container">{{ $pessoa->nome }}</div>
                @if (!empty($pessoa->email))
                    <!--a href="mailto:{{ addslashes($pessoa->email) }}" class="btn btn-outline-primary fa-solid fa-envelope"></a>
                    <a href="mailto:{{ addslashes($pessoa->email) }}" class="btn btn-outline-primary">{{ addslashes($pessoa->email) }}</a-->
                @endif
            </div>
        @endforeach
        
        @foreach ($contatos as $contato)
            <div>
            @switch($contato->contato_tipo_id)
                @case(1)
                    <div class="btn-group btn-group-sm">
                        <a href="tel:{{ addslashes($contato->descricao) }}" class="btn fa-solid fa-phone"></a>
                        <a href="tel:{{ addslashes($contato->descricao) }}" class="link-dark">{{ addslashes($contato->descricao) }}</a>
                    </div>
                    @break
                @case(2)
                    <div class="btn-group btn-group-sm">
                        <a href="https://api.whatsapp.com/send?phone=55{{ addslashes($contato->descricao) }}" class="btn fa-brands fa-whatsapp"></a>
                        <a href="https://api.whatsapp.com/send?phone=55{{ addslashes($contato->descricao) }}" class="link-dark">{{ addslashes($contato->descricao) }}</a>
                    </div>
                    @break
                @case(3)
                    <div class="btn-group btn-group-sm"
                        style="--bs-btn-padding-y: .9rem; --bs-btn-padding-x: .9rem; --bs-btn-font-size: .75rem;">
                        <a href="mailto:{{ addslashes($contato->descricao) }}" class="btn fa-solid fa-envelope"></a>
                        <a href="mailto:{{ addslashes($contato->descricao) }}" class="link-dark">{{ addslashes($contato->descricao) }}</a>
                    </div>
                    @break
            @endswitch
            </div>
        @endforeach

        
        <!--a href="{ { route('rota_form_criar_empresa') }}" class="btn btn-dark mb-2">Adicionar</a-->
        <!--ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">

                <a href="{{route('rota_index_empresas')}}">
                    Voltar
                </a>

                <span class="d-flex">
                    <span class="d-flex">
                        {{ addslashes($empresaTipo->nomeEmpresaTipo) }}
                    </span>
                    <a href="{{ $empresa->linkGoogleMaps }}" class="btn btn-outline-primary btn-sm mr-0" data-toggle="tooltip" data-placement="bottom" title="Link Google Maps" target="_blank">
                        <i class="fa-solid fa-map-location"></i>
                    </a>
                    <a href="http://www.google.com/maps/place/{{$empresa->latitude}},{{$empresa->longitude}}" class="btn btn-outline-primary btn-sm ml-0"  data-toggle="tooltip" data-placement="bottom" title="Mapa via Coordenadas" target="_blank">
                        <i class="fa-solid fa-earth-americas"></i>
                    </a>
                </span>

                <span class="d-flex">

                    <a href="{ { route('rota_index_XXX', $empresa->id) }}" class="btn btn-outline-danger btn-sm mr-1">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>

                    <form action="{ { route('rota_remover_empresa', $empresa->id) }}"
                        method="post"
                        onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($empresa->nomeEmpresa) }}')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm ml-1">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </span>
            </li>
        </ul-->
    </div>


@endsection
