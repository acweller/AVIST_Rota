@extends('layout.mainlayout')

<style>
    .carousel-item{
        background-repeat: no-repeat;
        background-position: 50% center;
        background-size: 100vw;
        width: auto;
        height: 50vw;
    }
    .carousel-item:before{
        content: "";
        background-image:
            linear-gradient(
                to bottom,
                transparent, rgba(0,0,0,0.5)
            );
        display: block;
        position: relative;
        top: 0;
        width: auto;
        height: 50vw;
    }
</style>

<!--
    https://www.youtube.com/watch?v=KHF6nysy0-c
    https://developer.mozilla.org/en-US/docs/Web/CSS/object-fit

    .carousel-item img {
        object-fit: cover;
        object-position: center;
        overflow: hidden;
        height: 40vh;
    }

        .carousel-item:before{
        content: "";
        background-image:
            linear-gradient(
                to bottom,
                transparent, rgba(0,0,0,0.5)
            );
        display: block;
        position: relative;
        top: 0;
        width: auto;
        height: 50%;
    }

-->

@section('cabecalho')
    Rota das Vinícolas
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success" role="alert">
            {{ $mensagem }}
        </div>
    @endif

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active bg-image"
                style="background-image: url('./images/RotaDoVinho.png');">
            <div class="carousel-caption d-none d-md-block">
              <h5>XXXXX Primeiro slide label</h5>
              <p>YYYYY Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item bg-image"
                style="background-image: url('./images/parreira01.JPG');">
            <div class="carousel-caption d-none d-md-block">
              <h5>XXXXX Segundo slide label</h5>
              <p>YYYYY Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item bg-image"
                style="background-image: url('./images/vinho01.jpg');">
            <!--img src="/images/parreira02.JPG" class="mx-auto d-block img-fluid" alt="Vazio"-->
            <div class="carousel-caption d-none d-md-block">
              <h5>XXXXX Terceiro slide label</h5>
              <p>YYYYY Some representative placeholder content for the third slide.</p>
            </div>
          </div>
          <div class="carousel-item bg-image"
                style="background-image: url('./images/parreira03.JPG');">
            <!--img src="/images/parreira02.JPG" class="mx-auto d-block img-fluid" alt="Vazio"-->
            <div class="carousel-caption d-none d-md-block">
              <h5>XXXXX Quarto slide label</h5>
              <p>YYYYY Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- incluir aqui o include das informacaos_empresa AVIST - PENDENTE -->
    <div class="container-fluid" id="sobre_avist">
        ... Sobre a AVIST ...
    </div>

@endsection

