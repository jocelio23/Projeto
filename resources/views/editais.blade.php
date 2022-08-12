@extends('layouts.usuario')
@section('title', 'Editais')
@section('content')
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/editais" class="nav-item nav-link active">Editais</a>
                    <a href="/equipamentos" class="nav-item nav-link ">Equipamentos</a>
                    <a href="/servico" class="nav-item nav-link">Servicos</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <?php $a = 0; ?>
                            @foreach ($postagem as $post)
                            @if($post->categoria =='Aberto')
                            @if($post->flag =='Ativado')
                            <?php $a = $a + 1; ?>
                            @endif
                            @endif
                            @endforeach
                            <h5 class="text-white mb-0">Inscrições Abertas</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$a}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">

                            <?php $p = 0; ?>
                            @foreach ($postagem as $post)
                            @if($post->categoria =='Público')
                            @if($post->flag =='Ativado')
                            <?php $p = $p + 1; ?>
                            @endif
                            @endif
                            @endforeach
                            <h5 class="text-black mb-0">Conhecimento Público</h5>
                            <h1 class="text-black mb-0" data-toggle="counter-up">{{$p}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-black mb-0">Processo de Seleção</h5>
                            <?php $s = 0; ?>
                            @foreach ($postagem as $post)
                            @if($post->categoria =='Seleção')
                            @if($post->flag =='Ativado')
                            <?php $s = $s + 1; ?>
                            @endif
                            @endif
                            @endforeach
                            <h1 class="text-black mb-0" data-toggle="counter-up">{{$s}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <?php $e = 0; ?>
                            @foreach ($postagem as $post)
                            @if($post->flag =='Desativado')
                            <?php $e = $e + 1; ?>
                            @endif
                            @endforeach
                            <h5 class="text-white mb-0">Inscrições encerradas</h5>

                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$e}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- se existir editais de conhecimento público -->
    <!-- Mostre isso -->
    @if($p > 0)
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Editais em Conhecimento público </h1>
        </div>    
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
    @endif
                @foreach ($postagem as $post)
                @if($post->categoria =='Público')
                @if($post->flag =='Ativado')
                <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                    <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <div class="nova">
                                    <img id="dimensao" src="{{ asset('/storage/Editais/'.$post->arquivo)}}">
                                </div>
                                <div class="position-absolute top-0 start-0 bg-secondary text-dark rounded-end mt-5 py-2 px-4 bg-warning">
                                    Edital público
                                </div>
                            </div>
                            <div class="p-4">
                                <a class="text-width-g " href="/single/{{$post->id}}">Inscreva-se<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>
                </div>
                <hr>
                @endif
                @endif
                @endforeach

                @if($p > 0)
            </div>
        </div>
    @endif
    
    <br>
    <!-- se existir editais abertos -->
    <!-- Mostre isso -->
    @if($a > 0)
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Editais com inscrições abertas </h1>
    </div>    
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
    @endif
            @foreach ($postagem as $post)
            @if($post->categoria =='Aberto')
            @if($post->flag =='Ativado')
            <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img id="dimensao" src="{{ asset('/storage/Editais/'.$post->arquivo)}}">
                            <div class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                Edital aberto
                            </div>
                        </div>
                        <div class="p-4">
                            <a class="text-width-g " href="/single/{{$post->id}}">Inscreva-se<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <hr>
            @endif
            @endif
            @endforeach
            @if($a > 0)
        </div>
    </div>
    @endif
    <!--Se existir algum edital em processo de seleção -->
    <br>
    <!--Mostre isso -->
    <!-- Editais em Processo de Seleção  -->
    @if($s > 0)
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-dark text-uppercase">Em breve</h5>
        <h1 class="mb-0">Editais em Processo de Seleção </h1>
    </div>    
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">     
    @endif       
            @foreach ($postagem as $post)
            @if($post->categoria =='Seleção')
            @if($post->flag =='Ativado')
            <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <div class="nova">
                                <img id="dimensao" src="{{ asset('/storage/Editais/'.$post->arquivo)}}">
                            </div>
                            <div class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">
                                Edital em seleção
                            </div>
                        </div>
                        <div class="p-4">
                            <a class="text-width-g " href="/single/{{$post->id}}">Inscreva-se<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
            </div>
            <hr>
            @endif
            @endif
            @endforeach    
            @if($s > 0)        
        </div>
    </div>
    @endif    

    @if($e > 0)
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Editais encerrados </h1>
    </div>    
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">  
            @endif             
            @foreach ($postagem as $post)
            @if($post->flag =='Desativado')
            <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <div class="nova">
                                <img id="dimensao" src="{{ asset('/storage/Editais/'.$post->arquivo)}}">
                            </div>
                            <div class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4 bg-danger">
                                Edital encerrado
                            </div>
                        </div>
                        <div class="p-4">
                            <a class="text-width-g " href="/single/{{$post->id}}">Ver informações<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <hr>
            @endif
            @endforeach   
            @if($e > 0)                     
        </div>
    </div>    
    @endif
@endsection