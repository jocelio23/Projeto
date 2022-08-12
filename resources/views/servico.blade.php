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
                    <a href="/servico" class="nav-item nav-link active">Serviços</a>
                    <a href="/cefic" class="nav-item nav-link ">Cefic</a>
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
     <!-- About Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">Serviços</h1>
                    </div>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a href="https://www.secult.ce.gov.br/ultimas-noticias/menu-servicos/documentos/">Documentos</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a href="http://www.portalcompras.ce.gov.br/compras/menu-registro-de-precos/?repeat=w3tc">Registro de Preços</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a href="https://www.secult.ce.gov.br/ultimas-noticias/menu-servicos/sistemas-e-sites//">Sistemas e sites</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a href="http://editais.cultura.ce.gov.br/edital-mecenas-do-ceara/#cefic">CEFIC</a></h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a href="https://www.secult.ce.gov.br/wp-content/uploads/sites/43/2021/04/nova-logo-secult_Horizontal-e-Vertical.pdf">Logomarcas da Secult – Horizontal e Vertical</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a href="https://www.secult.ce.gov.br/wp-content/uploads/sites/43/2021/04/Manual-de-Identidade-Visual-2021_GovernoCeara.pdf">Manual de Identidade Visual 2021</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a href="https://www.secult.ce.gov.br/wp-content/uploads/sites/43/2022/03/DOE-DA-NOMEAÇÃO_RENATA.pdf">OUVIDORIA SECULT CE </a></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><a href="https://www.secult.ce.gov.br/wp-content/uploads/sites/43/2020/09/Relatório-Setorial-de-Gestão-de-Ouvidoria-Secult-2019.pdf">Relatório Setorial de Gestão de Ouvidoria – Secult 2019</a></h5>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection