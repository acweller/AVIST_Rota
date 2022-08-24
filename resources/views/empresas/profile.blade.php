@extends('layout.mainlayout')

@section('estilo')
    <style>
        .fa-facebook, .fa-facebook-f, .fa-twitter, .fa-instagram, .fa-youtube, .fa-telegram {
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

        <!-- Mostra a primeira Logomarca da Empresa -->
        @foreach ($imagems as $imagem)
            @if ($imagem->imagem_tipo_id == 2)
                @if ($empresa->empresa_tipo_id != 1) <!-- Se não for a associação -->
                    <a href="{{ $empresa->linkGoogleMaps }}" data-toggle="tooltip" data-placement="bottom" title="Clique para abrir o Google Maps" target="_blank">
                @else
                    <a href="{{route('rota_index_empresas')}}"  data-toggle="tooltip" data-placement="bottom" title="Vinícolas">
                @endif
                        <div class="text-center">
                            <img src="{{ addslashes($imagem->caminho) }}" class="img-fluid rounded" alt="{{ addslashes($imagem->descricao) }}">
                        </div>
                    </a>
                @break
            @endif
        @endforeach
        <br>

        <!-- Texto informativo da empresa -->
        @foreach ($informacaos as $info)
            <p>
                @if (! $info->titulo)
                    {{ addslashes($info->descricao) }}
                @else
                    <h4 id="empresa-informacao">{{ addslashes($info->descricao) }}<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-informacao" style="padding-left: 0.375em;"></a></h4>
                @endif
            </p>
        @endforeach
        
        @if ((!empty($enderecos)) && ($enderecos->count() > 0))
            <!-- Endereços da Empresa -->
            <h2 id="empresa-endereco">
                Endereço e Rota
                    <a href="{{ $empresa->linkGoogleMaps }}" class="btn btn-outline-primary btn-sm mr-0" data-toggle="tooltip" data-placement="bottom" title="Rota via Google Maps" target="_blank">
                        <i class="fa-solid fa-map-location"></i> Maps
                    </a>
                    <a href="https://waze.com/ul?ll={{$empresa->latitude}},{{$empresa->longitude}}&z=10&navigate=yes" class="btn btn-outline-primary btn-sm ml-0"  data-toggle="tooltip" data-placement="bottom" title="Rota via Waze" target="_blank">
                        <i class="fa-brands fa-waze"></i> Waze
                    </a>
                <a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-endereco" style="padding-left: 0.375em;"></a>
            </h2>
            @foreach ($enderecos as $end)
                <span class="d-flex">
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
                    {{ addslashes($end->cep) }}.
                </span>
            @endforeach
        @endif

        <p> <!-- Mostra um Mapa da Empresa -->
            @foreach ($imagems as $imagem)
                @if ($imagem->imagem_tipo_id == 1) <!-- Se não for um mapa -->
                    @if ($empresa->empresa_tipo_id != 1) <!-- Se não for a associação -->
                        <a href="{{ $empresa->linkGoogleMaps }}" data-toggle="tooltip" data-placement="bottom" title="Clique para abrir no Google Maps" target="_blank">
                            <div class="text-center">
                                <img src="{{ addslashes($imagem->caminho) }}" class="img-fluid rounded" alt="{{ addslashes($imagem->descricao) }}">
                            </div>
                        </a>
                    @else
                        <h2 id="empresa-vinicolas">Conheça as Vinícolas<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-vinicolas" style="padding-left: 0.375em;"></a></h2>
                        <a href="{{route('rota_index_empresas')}}"  data-toggle="tooltip" data-placement="bottom" title="Vinícolas">
                            <div class="text-center">
                                <img src="{{ addslashes($imagem->caminho) }}" class="img-fluid rounded" alt="Vinícolas">
                            </div>
                        </a>
                    @endif
                    @break
                @endif
            @endforeach
        </p>
        
        <p><!-- Redes Sociais da Empresa -->
            <h2 id="empresa-redes">Redes Sociais<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-rede" style="padding-left: 0.375em;"></a></h2>
            <div class="container text-center">
                <div class="row">
                    @foreach ($contatos as $contato)
                        @switch($contato->contato_tipo_id)
                        @case(4)
                            <div class="col">
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/{{ addslashes($contato->descricao) }}"
                                    class="fa-brands fa-facebook-f" 
                                    target="_blank"
                                    data-bs-title="Facebook da {{ $empresa->nomeEmpresa }}" data-bs-toggle="tooltip">
                                </a>
                            </div>
                            @break
                        @case(5)
                            <div class="col">
                                <!-- Instagram -->
                                <a href="https://instagram.com/{{ addslashes($contato->descricao) }}"
                                    class="fa-brands fa-instagram"
                                    target="_blank"
                                    data-bs-toggle="tooltip" data-bs-title="Instagram da {{ $empresa->nomeEmpresa }}">
                                </a>
                            </div>
                            @break
                        @case(6)
                            <div class="col">
                                <!-- Twitter -->
                                <a href="https://twitter.com/{{ addslashes($contato->descricao) }}"
                                    class="fa-brands fa-twitter"
                                    target="_blank"
                                    data-bs-title="Twitter da {{ $empresa->nomeEmpresa }}" data-bs-toggle="tooltip">
                                </a>
                            </div>
                            @break
                        @case(7)
                            <div class="col">
                                <!-- YouTube -->
                                <a href="https://www.youtube.com/{{ addslashes($contato->descricao) }}"
                                    class="fa-brands fa-youtube"
                                    target="_blank"
                                    data-bs-title="YouTube da {{ $empresa->nomeEmpresa }}" data-bs-toggle="tooltip">
                                </a>
                            </div>
                            @break
                        @case(9)
                            <div class="col">
                                <!-- Telegram -->
                                <a href="https://t.me/{{ addslashes($contato->descricao) }}"
                                    class="fa-brands fa-telegram"
                                    target="_blank"
                                    data-bs-title="Telegram da {{ $empresa->nomeEmpresa }}" data-bs-toggle="tooltip">
                                </a>
                            </div>
                            @break
                        @endswitch
                    @endforeach
                </div>
            </div>
        </p>
        
        @if ((!empty($produtos)) && ($produtos->count() > 0))
        <!-- Produtos da Empresa -->
            <h2 id="empresa-produto">Produtos<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-produto" style="padding-left: 0.375em;"></a></h2>
            <ol class="list-unstyled list-group-numbered">
                @foreach ($produtos as $produto)
                @if ($produto->ativo == 1)
                    <li class="list-group-item">
                        @if(strlen($produto->descricao) > 0)
                            <b>{{ $produto->nome }}</b>: {{ addslashes($produto->descricao) }}
                        @else
                            <b>{{ $produto->nome }}</b>
                        @endif
                    </li>
                @endif
                @endforeach
            </ol>
        @endif
        
        @if ((!empty($servicos)) && ($servicos->count() > 0))
        <!-- Serviços da Empresa -->
            <h2 id="empresa-servico">Serviços<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-servico" style="padding-left: 0.375em;"></a></h2>
            <ol class="list-unstyled list-group-numbered">
                @foreach ($servicos as $servico)
                @if ($servico->ativo == 1)
                    <li class="list-group-item">
                        @if(strlen($servico->descricao) > 0)
                            <b>{{ $servico->nome }}</b>: {{ addslashes($servico->descricao) }}
                        @else
                            <b>{{ $servico->nome }}</b>
                        @endif
                        <br>Horário: {{ addslashes($servico->horario) }}
                    </li>
                @endif
                @endforeach
            </ol>
        @endif
        
        <p>
        @if ($empresa->empresa_tipo_id != 1)
        <!-- Carrossel de imagens das vinícolas e da galeria -->
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
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselEmpresaImagem" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        @endif
        </p>

        <h2 id="empresa-contato">Contato(s)<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-contato" style="padding-left: 0.375em;"></a></h2>
        <!-- Pessoas da Empresa -->
        @foreach ($pessoas as $pessoa)
        <div>
            <div class="btn-group btn-group-sm">
                <div class="btn fa-solid fa-user"></div>
                <div class="spam"><b>{{ $pessoa->nome }}</b></div>
                @if (!empty($pessoa->email))
                @endif
            </div>
        </div>
        @endforeach
        
        <!-- Formas de contatos da Empresa -->
        @foreach ($contatos as $contato)
            <div>
            @switch($contato->contato_tipo_id)
                @case(1)
                    <div class="btn-group btn-group-sm">
                        <!--TEL FIXO-->
                        <a href="tel:0{{ addslashes($contato->descricao) }}" class="btn fa-solid fa-phone" target="_blank"></a>
                        <a href="tel:0{{ addslashes($contato->descricao) }}" class="link-dark" target="_blank">({{ substr($contato->descricao,0,2) }}) {{ substr($contato->descricao,2, strlen($contato->descricao)-6) }}-{{ substr($contato->descricao, strlen($contato->descricao)-4) }}</a>
                    </div>
                    @break
                @case(2)
                    <div class="btn-group btn-group-sm">
                        <!--WHATSAPP-->
                        <a href="https://api.whatsapp.com/send?phone=55{{ addslashes($contato->descricao) }}" class="btn fa-brands fa-whatsapp" target="_blank"></a>
                        <a href="https://api.whatsapp.com/send?phone=55{{ addslashes($contato->descricao) }}" class="link-dark" target="_blank">({{ substr($contato->descricao,0,2) }}) {{ substr($contato->descricao,2, strlen($contato->descricao)-6) }}-{{ substr($contato->descricao, strlen($contato->descricao)-4) }}</a>
                    </div>
                    @break
                @case(3)
                    <div class="btn-group btn-group-sm"
                        style="--bs-btn-padding-y: .9rem; --bs-btn-padding-x: .9rem; --bs-btn-font-size: .75rem;">
                        <!--EMAIL-->
                        <a href="mailto:{{ addslashes($contato->descricao) }}" class="btn fa-solid fa-envelope" target="_blank"></a>
                        <a href="mailto:{{ addslashes($contato->descricao) }}" class="link-dark" target="_blank">{{ addslashes($contato->descricao) }}</a>
                    </div>
                    @break
                @case(8)
                    <div class="btn-group btn-group-sm">
                        <!--SITE-->
                        <a href="{{ addslashes($contato->descricao) }}" class="btn fa-solid fa-earth-americas" target="_blank"></a>
                        <a href="{{ addslashes($contato->descricao) }}" class="link-dark" target="_blank">{{ $contato->descricao }}</a>
                    </div>
                    @break
            @endswitch
            </div>
        @endforeach        
    </div>
@endsection
