@extends('layout.mainlayout')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        <div class="row">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fa-solid fa-clapperboard"></i>
                </span>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">
                <span class="input-group-text">
                    <i class="fa-solid fa-calendar-days"></i>
                </span>
                <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas" placeholder="Núm. Temporadas" aria-label="Núm. Temporadas" aria-describedby="basic-addon1">
                <span class="input-group-text">
                    <i class="fa-solid fa-list-ol"></i>
                </span>
                <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada" placeholder="Episódios/Temporada" aria-label="Episódios/Temporada" aria-describedby="basic-addon1">
            </div>
        </div>
        <button class="btn btn-primary">Adicionar</button>

    </form>
@endsection
