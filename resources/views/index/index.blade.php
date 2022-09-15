@extends('layout.mainlayout')

@section('estilo')
    <style>
        .fa-facebook, .fa-facebook-f, .fa-twitter, .fa-instagram, .fa-youtube, .fa-telegram,
        .fa-whatsapp {
            padding: 8px;
            font-size: 22px;
            width: 40px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }
        .fa-whatsapp {
          background: #128c7e;
          color: white;
        }
    </style>
@endsection

@section('cabecalho')
  Vinhos de Santa Teresa
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success" role="alert">
            {{ $mensagem }}
        </div>
    @endif
    
    <div id="carouselEmpresas" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
          @foreach ($imagems as $imagem)
          <button type="button" data-bs-target="#carouselEmpresas" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : '' }}"  aria-label="{{ addslashes($imagem->descricao) }}"></button>
          @endforeach
      </div>
      <div class="carousel-inner">
          @foreach ($imagems as $imagem)
          <div class="carousel-item {{ $loop->first ? 'active' : '' }} bg-image"
              style="background-image: url('{{ $imagem->caminho }}');">
              <div class="carousel-caption d-none d-md-block">
                  <h5><a href="{{route('rota_profile_empresa', $imagem->empresa_id)}}" class="link-light">{{ addslashes($imagem->descricao) }}</a></h5>
                  <p></p>
              </div>
          </div>
          @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselEmpresas" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselEmpresas" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>

    <div class="container-fluid" id="sobre_avist">
      <br>
      <!--h2>
        Sobre a Rota
      </h2-->
      <p>
        O vinho é uma das grandes paixões dos capixabas. E o município de Santa Teresa é o maior produtor de uva e de vinhos do Estado do Espírito Santo.
      </p>
      <p>
        Em 16 de Abril de 2002 foi fundada a AVIST, que é a Associação dos Vitivinicultores de Santa Teresa, para fortalecer a produção de vinhos no município, com ações que visam o melhoramento dos produtos, a troca de experiências entre seus associados e a divulgação dessa atividade econômica, que é um dos principais atrativos para turistas desta cidade.</p>
      </p>
      <p>
        Este site tem como objetivo divulgar as <a href="{{ route('rota_index_empresas') }}" class="link-dark">vinícolas associadas à AVIST</a>, que são referência na área de vitivinicultura.
        Aqui você pode acessar as informações de cada uma delas, como telefones de contato, redes sociais, produtos e serviços e a localização de cada uma delas.
      </p>
    </div>

    <div class="container-fluid">
      <div class="row d-flex align-items-center">
        <div class="col-xl-7 col-lg-7 col-md-7" style="border:0px solid #ddd">
          <h2>
            <a href="{{route('rota_index_empresas')}}">
              Conheça a Rota das Vinícolas
            </a>
          </h2>
          <p>
            Conheça cada uma das vinícolas e empresas associadas à AVIST. Clique na imagem ou no botão abaixo para conferir a relação de nossas vinícolas organizada em ordem alfabética.
          </p>
          <p>
            <a href="{{route('rota_index_empresas')}}" class="btn btn-outline-primary btn-sm ml-0"  data-toggle="tooltip" data-placement="bottom" title="Vinícolas">
              <i class="fa-solid fa-wine-glass"></i> Conheça as nossas Vinícolas
            </a>
          </p>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5" style="border:0px solid #ddd">
          <p>
            <a href="{{route('rota_index_empresas')}}"  data-toggle="tooltip" data-placement="bottom" title="Vinícolas">
              <img src="images/RotaDoVinho.jpg" alt="Vinícolas" class="img-fluid rounded">
            </a>
          </p>
        </div>
      </div>
    </div>
    
    <br>

    <div class="container-fluid">
      <div class="row d-flex">
        <div class="col-xl-3 col-lg-3 col-md-3" style="border:0px solid #ddd">
          <!-- QR-Code do Site -->
          <a href="/images/qrcode.png" target="_blank">
            <img src="/images/qrcode.png" alt="QR-Code de divulgação do site" class="img-fluid rounded">
          </a>
        </div>

        <div class="col-xl-9 col-lg-9 col-md-9" style="border:0px solid #ddd">
          <h2>Divulgue em suas redes sociais</h2>
          <div class="container">
            <!-- Compartilhar no WhatsApp -->
            <a href="https://api.whatsapp.com/send?text=Conheça a Rota das Vinícolas de Santa Teresa. Acesse o nosso site: https://www.vinhosdesantateresa.com.br"
              class="btn" target="_blank" data-bs-toggle="tooltip"
              data-bs-title="Compartilhar no WhatsApp">
              <i class="fa-brands fa-whatsapp"></i> 
            </a>
            <!-- Compartilhar no Facebook -->
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.vinhosdesantateresa.com.br"
              class="btn" target="_blank" data-bs-toggle="tooltip"
              data-bs-title="Compartilhar no Facebook">
              <i class="fa-brands fa-facebook-f"></i> 
            </a>
            <!-- Compartilhar no Twitter -->
            <a href="https://twitter.com/intent/tweet?url=https://www.vinhosdesantateresa.com.br&text=Conhe%C3%A7a%20a%20Rota%20das%20Vin%C3%ADcolas%20de%20Santa%20Teresa.%20Acesse%20o%20nosso%20site."
              class="btn" target="_blank" data-bs-toggle="tooltip"
              data-bs-title="Compartilhar no Twitter">
              <i class="fa-brands fa-twitter"></i> 
            </a>
            <!-- Compartilhar no Telegram -->
            <a href="https://telegram.me/share/url?url=https://www.vinhosdesantateresa.com.br&text=Conheça a Rota das Vinícolas de Santa Teresa. Acesse o nosso site."
              class="btn" target="_blank" data-bs-toggle="tooltip"
              data-bs-title="Compartilhar no Telegram">
              <i class="fa-brands fa-telegram"></i>
            </a>
          </div>

          <h2>Sobre a AVIST</h2>
          <p>
            A Associação dos Vitivinicultores de Santa Teresa tem a missão de ajudar a desenvolver e fortalecer a vitivinicultura no município.
          </p>
          <p>
            <a href="{{route('rota_about_empresa')}}" class="btn btn-outline-primary btn-sm ml-0"  data-toggle="tooltip" data-placement="bottom" title="Conheça mais sobre a AVIST">
            <i class="fa-solid fa-magnifying-glass-plus"></i> Conheça mais sobre a AVIST
            </a>
          </p>

        </div>
      </div>
    </div>

    <div class="container-fluid" id="parcerias">
      <div class="row d-flex align-items-center">
        <div class="col-xl-8 col-lg-8 col-md-8" style="border:0px solid #ddd">
          <p></p>
          <h2>
            Parcerias
          </h2>
          <p>
            A AVIST, em parceria com 
            o <a href="https://www.gov.br/agricultura/pt-br" class="link-dark" target="_blank">MAPA</a> (Ministério da Agricultura, Pecuária e Abastecimento),
            o <a href="https://santateresa.ifes.edu.br/" class="link-dark" target="_blank">IFES</a> (Instituto Federal do Espírito Santo - Campus Santa Teresa),
            o <a href="https://sebrae.com.br/sites/PortalSebrae/ufs/es?codUf=8" class="link-dark" target="_blank">Sebrae</a> (Serviço Brasileiro de Apoio às Micro e Pequenas Empresas),
            a <a href="https://www.embrapa.br/" class="link-dark" target="_blank">Embrapa</a> (Empresa Brasileira de Pesquisa Agropecuária),
            o <a href="https://cnabrasil.org.br/senar/institucional-senar" class="link-dark" target="_blank">Senar</a> (Serviço Nacional de Aprendizagem Rural),
            a <a href="https://seag.es.gov.br/" class="link-dark" target="_blank">Seag</a> (Secretaria de Estado da Agricultura, Abastecimento, Aquicultura e Pesca),
            o <a href="https://incaper.es.gov.br/" class="link-dark" target="_blank">Incaper</a> (Instituto Capixaba de Pesquisa, Assistência Técnica e Extensão Rural),
            a <a href="https://www.santateresa.es.gov.br/" class="link-dark" target="_blank">PMST</a> (Prefeitura Municipal de Santa Teresa)
            e a <a href="https://www.facebook.com/Apruvit" class="link-dark" target="_blank">APRUVIT</a> (Associação dos Produtores de Uva e Vinho Teresense)
            vem buscando formas de divulgar o trabalho realizado por seus associados.
          </p>
          <p>
            Uma das formas identificadas foi a elaboração de um site da Internet
            (A Rota das Vinícolas de Santa Teresa)
            para centralizar as informações de cada uma das vinícolas da AVIST
            e para facilitar a localização dos empreendimentos por parte dos turistas.
            O desenvolvimento do site foi feito pelo grupo
            LEDS (Laboratório de Extensão em Desenvolvimento de Soluções),
            formado por alunos e professores do IFES Campus Santa Teresa.
          </p>
          <p>
            Agradeçemos a todos os parceiros pela ajuda na contrução dessa história e com certeza juntos podemos chegar mais longe!!!
          </p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4" style="border:0px solid #ddd">
          <a href="https://santateresa.ifes.edu.br/"  data-toggle="tooltip" data-placement="bottom" title="Conheça o Ifes Santa Teresa" target="_blank">
            <img src="images/ifes_st_leds_logo.png" alt="Conheça o IFES Santa Teresa" class="img-fluid rounded">
          </a>
        </div>
      </div>
  </div>

@endsection
