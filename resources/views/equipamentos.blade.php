@extends('layouts.usuario')
@section('title', 'Equipamentos')
@section('content')
<!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/editais" class="nav-item nav-link">Editais</a>
                    <a href="/equipamentos" class="nav-item nav-link active">Equipamentos</a>
                    <a href="/servico" class="nav-item nav-link">Serviços</a>
                    <a href="/cefic" class="nav-item nav-link">Cefic</a>
                </div>
            </div>
        </nav>
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/logo/logoNova.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                        <!-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Lançamentos</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Editais culturais</h1>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Navbar End -->
<!-- Sobre Inicio -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">Rede de Equipamentos Culturais</h1>
                    </div>
                    <p class="mb-4">Para democratizar, fomentar e fazer circular as artes no Ceará, além de proporcionar
                        a formação e a profissionalização para diversas áreas, a Secult mantém uma rede de equipamentos
                        culturais na capital e no interior do Estado. O Instituto Dragão do Mar contribui com a gestão
                        de equipamentos como o Centro Dragão do Mar de Arte e Cultura, o Centro Cultural Grande Bom
                        Jardim, a Escola Porto Iracema das Artes, entre outros, fortalecendo esta rede estadual.

                    </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                                <a href="https://mapacultural.secult.ce.gov.br/espaco/499/">Arquivo Público Estadual do
                                    Ceará </a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                                <a href="https://mapacultural.secult.ce.gov.br/espaco/490/">Casa de Juvenal Galeno</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://ccbj.org.br/">Centro Cultural Bom Jardim</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="http://www.dragaodomar.org.br/">Centro Dragão do Mar de Arte e Cultura</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="http://eao.org.br/">Escola de Artes e Ofícios Thomaz Pompeu Sobrinho</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="http://www.dragaodomar.org.br/espacos/museu-de-arte-contemporanea">Museu de
                                    Arte Contemporânea do Ceará</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="http://www.dragaodomar.org.br/espacos/museu-da-cultura-cearense">Museu da
                                    Cultura Cearense</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://mapacultural.secult.ce.gov.br/espaco/265/">Museu da Imagem e do
                                    Som</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://mapacultural.secult.ce.gov.br/espaco/485/">Teatro Carlos Câmara</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://portoiracemadasartes.org.br/">Porto Iracema das Artes</a>
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="http://www.bece.cultura.ce.gov.br/">Biblioteca Pública do Estado do Ceará </a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://mapacultural.secult.ce.gov.br/espaco/891/">Casa de Saberes Cego
                                    Aderaldo – Quixadá </a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://mapacultural.secult.ce.gov.br/espaco/1632/">Centro Cultural Porto
                                    Dragão</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://www.cineteatrosaoluiz.com.br/">Cineteatro São Luiz</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://gastronomiasocial.org.br/">Escola de Gastronomia Social Ivens Dias
                                    Branco</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://mapacultural.secult.ce.gov.br/espaco/87/">Museu do Ceará</a>
                            </h5>

                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://mapacultural.secult.ce.gov.br/espaco/539/">Museu Sacro São José de
                                    Ribamar</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://mapacultural.secult.ce.gov.br/espaco/305/">Sobrado Dr. José
                                    Lourenço</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://mapacultural.secult.ce.gov.br/espaco/317/">Theatro José de Alencar</a>
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a
                                    href="https://mapacultural.secult.ce.gov.br/espaco/1499/">Vila da Música – Crato</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Sobre Fim -->
@endsection