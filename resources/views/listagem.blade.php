@extends('layouts.admin')
@section('title', 'editais lançados ')
@section('content')
    <div class="container-fluid bg-secondary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"></i>Governo Do Estado Do Ceará -> Acesso restrito para : &nbsp {{auth()->user()->name }}<b
                    style="text-transform: uppercase;"></b></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <img src="img/logo/secult-escura.png" width="180">
                    @if(auth()->user()->super_usuario != NULL)
                       <butaton onclick="NovoUser()" type="button" class="btn text-light bg-dark ms-3"><i class="fa fa-user-circle-o" aria-hidden="true"></i><i class="fa fa-user-plus" aria-hidden="true"></i></butaton></a>
                    @endif
                    &nbsp &nbsp &nbsp
                    <button onclick="sair()" class="btn btn-sm btn-outline-light btn-sm-square bg-success border-danger" ><i class="fa fa-window-close bg-secondary" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>    
    
     <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/postagem" class="nav-item nav-link"><b>Início</b></a>
                    <a href="/listagem" class="nav-item nav-link active"><b>Editais</b></a>
                    <a href="/desativados" class="nav-item nav-link "><b>Encerrados</b></a>
                </div>
                <butaton type="button" class="btn text-light bg-dark ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"> Pesquisar</i></butaton>
            </div>
        </nav>
    </div>
     <br><br>
     <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(13, 13, 13, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <form action="{{url('/listagem')}}" method="GET">
                        @csrf
                            <div class="input-group" style="max-width: 400px;">
                                <input type="text" name="name" class="form-control bg-white border-primary p-3" placeholder="Nome do edital">
                                <button type="submit" value="Buscar" class="btn btn-secondary px-4"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Editais lançados</h5>
        </div>  
        @if(session('msg'))
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <main>
                        <div class="container-fluid">
                            <div class="row">
                                <p class="msg">{{session('msg')}}</p>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger text-center">
                {{Session::get('fail')}}
            </div>
        @endif
    
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
            @if($posts->isNotEmpty())
                    @foreach ($posts as $post)   
                <div class="container py-6">
                    <!--Conteúdo central fim-->
                    <div class="container py-">
                        <div class="row g-5">
                            <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                                <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                                    <div class="blog-item bg-light rounded overflow-hidden">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <div class="blog-img position-relative overflow-hidden">
                                                <img id="dimensao" class="img-fluid" src="{{ asset('/storage/Editais/'.$post->arquivo)}}" alt="">
                                                <div class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">
                                                    Edital aberto</div>
                                            </div>
                                            <div class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                                Edital aberto</div>
                                        </div>
                                    </div>
                                </div><br>
                            </div>
                            <div class="col-lg-4">
                                <div class="row g-4">
                                    <div class="col-12 wow zoomIn" data-wow-delay="0.1s">
                                        <h4>{{ $post->nome }}</h4>

                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>Etapas: {{ $post->etapa }}
                                        </p>
                                    </div>
                                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>Nº: {{ $post->id }}
                                        </p>
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>Valor
                                        {{  'R$ '.number_format( $post->valor , 2, ',', '.') }}  
                                        </p>
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>E-mail:{{ $post->email }}
                                        </p>
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>Telefone:{{ $post->telefone }}
                                        </p>
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>Categoria:{{ $post->categoria }}
                                        </p>
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>status:{{ $post->flag }}
                                        </p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row g-5">
                                    <div class="col-12 wow zoomIn" data-wow-delay="0.1s">
                                    <h4>Publicações do Edital</h4>
                                        <p class="mb-0">
                                            @if( $post->flag  == 'Ativado')
                                            <li id="0" class="widget-list-item"><span><a href="/links/{{$post->id}}">Lista de Links</a></span><img src="img/logo/mouse.png" width="20">
                                            </li>
                                            @endif
                                            @if( $post->flag  == 'Desativado')
                                            <h6>Somente editais ativos podem ser modificados</h6>
                                            @endif
                                        </p>
                                    </div>
                                    <div id="login-button-panel" class="col-lg-12">
                                        @if( $post->flag  == 'Ativado')
                                        <a href="/atualizacao/{{$post->id}}"> <button name="action" value="enterAccountId" class="button-continuar" type="submit" tabindex="1">Alterar</button></a>
                                        <a href="/desativar/{{$post->id}}"> <button name="action" value="enterAccountId" class="button-continuar" type="submit" tabindex="1" style="background: rgb(251, 138, 8);">Encerrar</button> </a>
                                        @endif

                                        @if( $post->flag  == 'Desativado')
                                        <a href="#"> <button name="action" value="enterAccountId" class="button-continuar" type="submit" tabindex="1" style="background: rgb(102, 99, 96)" disabled>Alterar</button></a>

                                        <a href="/ativar/{{$post->id}}"> <button name="action" value="enterAccountId" class="button-continuar" type="submit" tabindex="1" style="background: rgb(34, 175, 15);">Reativar</button> </a>

                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>

        @else 
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <img src="img/logo/logotipo.png" width="180">
                </div>
                <div class=" text-center position-relative pb-3 mb-5 mx-auto " style="max-width: 600px;">
                    <label>
                        <h2>Nenhum edital foi encontrado</h2>
                    </label>
                </div>
            </div>
        </div> 
        @endif
    </div>
</div>       
</div> 
@endsection