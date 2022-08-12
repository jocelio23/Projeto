@extends('layouts.usuario')
@section('title', 'Serviços')
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
                    <a href="/equipamentos" class="nav-item nav-link">Equipamentos</a>
                    <a href="/servico" class="nav-item nav-link">Serviços</a>
                    <a href="/cefic" class="nav-item nav-link active">Cefic</a>
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
    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="row g-3">
                <div class="col-sm-12">
                    <div class="section-title text-center position-relative pb-3 mb-3 mx-auto"
                        style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">EDITAIS ANTERIORES MECENAS DO CEARÁ</h5>
                    </div>
                    <p class="py-1"><b>
                            Instituído pela Lei Estadual Nº13.811, de 16 de agosto de 2006, o Mecenato Estadual é o
                            fomento a
                            atividades culturais por meio da conjugação de recursos do poder público estadual com os de
                            instituições privadas, no qual ocorra renúncia fiscal nas modalidades doação, patrocínio e
                            investimento.</b>
                    </p>
                </div>
            </div>
            <div class="row g-0 py-1">
                <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/1177/" target="_blank">I Edital Mecenas -
                            2008</a>
                    </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/1179/" target="_blank">III Edital Mecenas
                            do Ceará -
                            2011</a>
                    </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/1287/" target="_blank">VI Edital Mecenas
                            do Ceará -
                            2013</a>
                    </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/1289/" target="_blank">VIII Edital
                            Mecenas do Ceará -
                            2015</a>
                    </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/732/#" target="_blank">X Edital Mecenas
                            do Ceará -
                            2017</a>
                    </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/1409/" target="_blank">XII Mecenas do
                            Ceará - 2019</a>
                    </h5>
                </div>
                <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/1178/" target="_blank">II Edital Mecenas
                            do Ceará -
                            2010</a>
                    </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/1180/" target="_blank">V Edital Mecenas
                            do Ceará -
                            2012</a>
                    </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/1288/" target="_blank">VII Edital Mecenas
                            do Ceará -
                            2014</a>
                    </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/215/#" target="_blank">IX Edital Mecenas
                            do Ceará -
                            2016</a>
                    </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/1302/#" target="_blank">XI Edital Mecenas
                            do Ceará -
                            2018</a>
                    </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>
                        <a href="https://mapacultural.secult.ce.gov.br/projeto/2876/" target="_blank">XIII Edital
                            Mecenas do Ceará -
                            2021</a>
                    </h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <p align=" justify" style="margin: auto;"><b>Quem pode incentivar?</b></br>
                    Empresa contribuinte de ICMS no Ceará e que não gozem de nenhuma dedução legal que
                    ultrapasse os
                    70%
                    (setenta por cento) do imposto ou que tenha muita substituição tributária e que se
                    encontra
                    em
                    situação de regularidade fiscal com a Secretaria da Fazenda Estadual do Ceará e com a
                    Receita
                    Federal.
                </p>
                <p align=" justify" style="margin: auto;"><b>Como funciona o incentivo fiscal?</b></br>
                    O Contribuinte, em situação de regularidade fiscal com a SEFAZ, pode deduzir o ICMS até
                    o
                    limite
                    de 2% (dois por cento)* devido mensalmente e de acordo com o valor constante do
                    Certificado
                    Fiscal
                    de Incentivo à Cultura (CEFIC), que é definido pela Secult com base no limite financeiro
                    mensal
                    no
                    limite de 2% do recolhimento do ICMS dos últimos 6 meses do contribuinte.
                </p>
                <p align=" justify" style="margin: auto;"><b>Quais projetos podem ser incentivados?</b></br>
                    Os projetos inscritos e aprovados no edital Mecenas do Ceará, lançado anualmente pela
                    Secretaria da
                    Cultura do Estado do Ceará. A autorização para captação de recursos ocorrerá após
                    homologação dos
                    projetos pela Comissão Estadual de Incentivo à Cultura – CEIC, responsável pela
                    avaliação e
                    decisão
                    sobre os projetos submetidos ao Mecenato Estadual.
                    A CEIC é vinculada ao Conselho Estadual de Política Cultural do Ceará e é formada por
                    representantes
                    da Secult e por representantes indicados pelas associações civis e entidades escolhidos
                    por
                    meio de
                    editais públicos da Secult
                </p>
                <p align=" justify" style="margin: auto;"><b>Quais os benefícios para o incentivador?</b></br>
                    O incentivo ao setor cultural tem impacto principalmente sobre a imagem institucional da
                    empresa,
                    pois ela poderá agregar valor a sua marca, reforçar seu papel na localidade onde atua,
                    desenvolver
                    novas oportunidades de negócio e reforçar a política de relacionamento da empresa com
                    outras
                    esferas
                    do governo e, principalmente, com os artistas e grupos artísticos.
                </p>
            </div>
        </div>
    </div>
        <!-- Features End -->
@endsection