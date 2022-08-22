@extends('layout.mainlayout')

@section('estilo')
@endsection

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
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-current="" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-current="" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-current="" aria-label="Slide 4"></button>
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
            <div class="carousel-caption d-none d-md-block">
              <h5>XXXXX Terceiro slide label</h5>
              <p>YYYYY Some representative placeholder content for the third slide.</p>
            </div>
          </div>
          <div class="carousel-item bg-image"
                style="background-image: url('./images/parreira03.JPG');">
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
      <br>
      <h2>
        A Rota do Vinho de Santa Teresa
      </h2>
      <p>O vinho é uma das grandes paixões dos capixabas. E Santa Teresa é o maior produtor de uva e de vinhos do Espírito Santo.</p>
      <p>Este site tem como objetivo divulgar as vinícolas associadas à AVIST, que são referência na área de vitivinicultura.</p>
      <p>Acesse as informações de contato, produtos e serviços de cada uma das vinícolas através do menu de opções</p>
      <p>Na página de cada vinícola está disponível <i>link</i> para calcular a rota até a empresa.</p>
      <h2>
        Sobre a AVIST
      </h2>
      <p>A AVIST é a Associação dos Vitivinicultores de Santa Teresa (AVIST), que foi fundada em 16 de Abril de 2002, com o objetivo de fortalecer o setor de vitivinicultura na cidade de Santa Teresa, ES.</p>
    </div>

@endsection
