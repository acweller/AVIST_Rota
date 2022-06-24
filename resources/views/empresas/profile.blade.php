@extends('layout.mainlayout')

@section('cabecalho')
    {{ $empresa->nomeEmpresa }}
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success" role="alert">
            {{ $mensagem }}
        </div>
    @endif
    <!--a href="{ { route('rota_form_criar_empresa') }}" class="btn btn-dark mb-2">Adicionar</a-->
    <ul class="list-group">
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

            <!--span class="d-flex">

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
            </span-->
        </li>
    </ul>

    <div class="bd-content ps-lg-4">
        <h2 id="empresa-info">Informações<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-info" style="padding-left: 0.375em;"></a></h2>
        @foreach ($informacaos as $info)
        <p>(Tipo: {{ $info->informacao_tipo_id }}) {{ addslashes($info->descricao) }}</p>
        @endforeach
        
        <h2 id="empresa-contato">Contatos<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-contato" style="padding-left: 0.375em;"></a></h2>
        @foreach ($contatos as $contato)
        <p>(Tipo: {{ $contato->contato_tipo_id }}) {{ addslashes($contato->descricao) }}</p>
        @endforeach

        <h2 id="empresa-endereco">Endereço(s)<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-endereco" style="padding-left: 0.375em;"></a></h2>
        @foreach ($enderecos as $end)
        <p>
            {{ addslashes($end->rua) }}, 
            {{ addslashes($end->numero) }}, 
            {{ addslashes($end->complemento) }}, 
            {{ addslashes($end->bairro) }}, 
            {{ addslashes($end->cidade) }}, 
            {{ addslashes($end->estado) }}. 
            {{ addslashes($end->cep) }}
        </p>
        @endforeach
        
        <h2 id="empresa-imagem">Imagens<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-imagem" style="padding-left: 0.375em;"></a></h2>
        @foreach ($imagems as $imagem)
            <p>(Tipo: {{ $imagem->imagem_tipo_id }})</p>
            <div class="text-center">
                <img src="{{ addslashes($imagem->caminho) }}" class="rounded" alt="{{ addslashes($imagem->descricao) }}">
            </div>
        @endforeach
        
        <h2 id="empresa-pessoa">Responsável<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-pessoa" style="padding-left: 0.375em;"></a></h2>
        @foreach ($pessoas as $pessoa)
        <p>Nome: {{ $pessoa->nome }} E-Mail: {{ addslashes($pessoa->email) }}</p>
        @endforeach
        
        <h2 id="empresa-produto">Produtos<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-produto" style="padding-left: 0.375em;"></a></h2>
        @foreach ($produtos as $produto)
        <p>- {{ $produto->nome }}:</p>
        <p>Descrição: {{ addslashes($produto->descricao) }}</p>
        <p>Ativo: {{ addslashes($produto->ativo) }}</p>
        @endforeach
        
        <h2 id="empresa-servico">Serviços Prestados<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#empresa-servico" style="padding-left: 0.375em;"></a></h2>
        @foreach ($servicos as $servico)
        <p>- {{ $servico->nome }}:</p>
        <p>Descrição: {{ addslashes($servico->descricao) }}</p>
        <p>Horário: {{ addslashes($servico->horario) }}</p>
        <p>Ativo: {{ addslashes($servico->ativo) }}</p>
        @endforeach
</div>



@endsection
