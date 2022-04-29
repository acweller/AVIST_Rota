@extends('layout.mainlayout')

@section('cabecalho')
    Tipos de Empresa
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success" role="alert">
            {{ $mensagem }}
        </div>
    @endif
    <!--a href="{ { route('rota_form_criar_empresa_tipo') }}" class="btn btn-dark mb-2">Adicionar</a-->
    <ul class="list-group">
        @foreach ($tipos as $tipo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $tipo->nomeEmpresaTipo }}
                <!--span class="d-flex">

                    <a href="{ { route('rota_index_XXX', $tipo->id) }}" class="btn btn-outline-danger btn-sm mr-1">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>

                    <form action="{ { route('rota_remover_empresa_tipo', $tipo->id) }}"
                        method="post"
                        onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($tipo->nomeEmpresaTipo) }}')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm ml-1">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </span-->
            </li>
        @endforeach
    </ul>
@endsection
