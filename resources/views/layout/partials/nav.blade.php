<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/images/avist logo.png" alt="" width="80" height="23" class="d-inline-block align-text-top">
            &nbsp;<!--TITULO DA NAVBAR-->
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-0 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Vinícolas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/empresas">Todas as Vinícolas</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 1)}}">Galeria de Artesanato</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 2)}}">Vinícola Rassele</a></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 3)}}">Vinícola Labiata</a></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 4)}}">Cantina Mattiello</a></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 5)}}">Cantina Romanha</a></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 6)}}">Casa dos Espumantes</a></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 7)}}">Vinícola Tomazelli</a></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 9)}}">Cantina Grotteschi</a></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 8)}}">Cantina Braun</a></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 10)}}">Tabocas Vin de Garage</a></li>
                        <li><a class="dropdown-item" href="{{route('rota_profile_empresa', 11)}}">Vinícola Ziviani</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Parceiros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="https://www.gov.br/agricultura/pt-br" target="_blank">MAPA (Ministério da Agricultura, Pecuária e Abastecimento)</a></li>
                        <li><a class="dropdown-item" href="https://santateresa.ifes.edu.br/" target="_blank">IFES (Instituto Federal do Espírito Santo - Campus Santa Teresa)</a></li>
                        <li><a class="dropdown-item" href="https://sebrae.com.br/sites/PortalSebrae/ufs/es?codUf=8" target="_blank">Sebrae (Serviço Brasileiro de Apoio às Micro e Pequenas Empresas)</a></li>
                        <li><a class="dropdown-item" href="https://www.embrapa.br/" target="_blank">Embrapa (Empresa Brasileira de Pesquisa Agropecuária)</a></li>
                        <li><a class="dropdown-item" href="https://cnabrasil.org.br/senar/institucional-senar" target="_blank">Senar (Serviço Nacional de Aprendizagem Rural)</a></li>
                        <li><a class="dropdown-item" href="https://seag.es.gov.br/" target="_blank">Seag (Secretaria de Estado da Agricultura, Abastecimento, Aquicultura e Pesca)</a></li>
                        <li><a class="dropdown-item" href="https://incaper.es.gov.br/" target="_blank">Incaper (Instituto Capixaba de Pesquisa, Assistência Técnica e Extensão Rural)</a></li>
                        <li><a class="dropdown-item" href="https://www.santateresa.es.gov.br/" target="_blank">PMST (Prefeitura Municipal de Santa Teresa)</a></li>
                        <li><a class="dropdown-item" href="https://www.facebook.com/Apruvit" target="_blank">APRUVIT (Associação dos Produtores de Uva e Vinho Teresense)</a></li>
                    </ul>
                </li>
                <!--li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Listagens
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/empresas">Todas as Vinícolas</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/empresa_tipos">Tipos de Empresa</a></li>
                        <li><a class="dropdown-item" href="/contato_tipos">Tipos de Contato</a></li>
                        <li><a class="dropdown-item" href="/imagem_tipos">Tipos de Imagem</a></li>
                        <li><a class="dropdown-item" href="/informacao_tipos">Tipos de Informação</a></li>
                    </ul>
                </li-->
                <li class="nav-item">
                <a class="nav-link" href="{{route('rota_about_empresa')}}">Sobre a AVIST</a>
                </li>
            </ul>
            <!--form class="d-inline-flex">
                <input class="form-control me-2" type="search" placeholder="O que você procura?" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form-->
        </div>
    </div>
</nav>
