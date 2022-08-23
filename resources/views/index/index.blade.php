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
      <p>
        O vinho é uma das grandes paixões dos capixabas. E Santa Teresa é o maior produtor de uva e de vinhos do Espírito Santo.
      </p>
      <p>
        Este site tem como objetivo divulgar as vinícolas associadas à AVIST, que são referência na área de vitivinicultura.
      </p>
      <p>
        Acesse as informações de contato, produtos e serviços de cada uma das vinícolas através do menu de opções
      </p>
      <p>
        Na página de cada <a href="http://localhost:8080/empresas">vinícola</a> está disponível um <i>link</i> para calcular a rota até a empresa.
      </p>
      <h2>
        História da AVIST
      </h2>
        <p>
        A história do vinho em Santa Teresa começa com a chegada dos imigrantes italianos na região onde encontraram a jabuticaba, fruta nativa da mata atlântica, e que a usaram para a produção de um vinho para o consumo das próprias famílias.
        </p>
        <p>
          Muitas dessas famílias continuaram essa tradição até os dias de hoje. Assim, o fermentado de jabuticaba é reconhecido como um dos nossos produtos mais atrativos.
        </p>
        <p>
          Depois, veio a uva e hoje temos 9 vinícolas registradas no MAPA em busca constante por melhorias nos nossos vinhos.
        </p>
        <p>
          Em 16 de Abril de 2002 foi fundada a AVIST, que é a Associação dos Vitivinicultores de Santa Teresa, para ajudar a desenvolver e fortalecer a vitivinicultura no município.
        </p>
        <h2>
          Ações da AVIST
        </h2>
        <p>
          Em nossas reuniões traçamos algumas ações que julgamos serem prioritárias para alavancar os nossos trabalhos. A primeira é a formalização das vinícolas junto ao MAPA.
        </p>
        <p>
          Para dar sequência aos trabalhos estamos com dois trabalhos de parceria com o IFES Santa Teresa para formatar de forma digital a rota das vinícolas (este site) e também para contrução de um viveiro de mudas de uvas, jabuticaba, citrus, pantas ornamentais e para reflorestamento que será instalado no campus do IFES em barracão.
        </p>
        <p>
          Essas são as ações de base para começar a profissionalizar nossa vitivinicultura e melhorar cada vez mais o turismo em Santa Teresa e as vinícolas tem uma contribuição muito importante nesse desenvolvimento e só vai acontecer se estivermos preparados para superar os desafios que naturalmente vamos encontrar.
        </p>
        <p>
          Gostariamos de destacar a importância de todos os parceiros aqui presentes para realização deste evento e das nossas metas de trabalho.
        </p>
        <p>
          Também parabenizamos as vinícolas que com muito esforço e investimento estão trabalhando para construir esse caminho de sucesso para nosso município.
        </p>
        <p>
          Agradeçemos a todos os parceiros pela ajuda na contrução dessa história e com certeza juntos podemos chegar mais longe!!!
        </p>
    </div>

@endsection
