@extends('layouts.admin')
@section('title', 'Postagem')
@section('content')
    <script>
        var controleCampo = 1;
        function adicionarCampo()
        {
            controleCampo++;
            //console.log(controleCampo);
            //aqui a unica modificação para funcionar foi deixar os names dos inputs de link e texto como arrays(link[], texto[])
            document.getElementById('formulario').insertAdjacentHTML('beforeend', '<div class="col-lg-12 form-group" id="campo' + controleCampo + '"><label>Digite um texto para associar ao link: * </label><input type="text" name="texto[]" placeholder="Ex: Link de inscrições" class="border-1 bg-light px-4" required</br><label>Link *: </label><input type="url" name="link[]" placeholder="Ex: www.culturaCE/inscricoes" class=" border-1 bg-light px-4" required> <button type="button" id="' + controleCampo + '" onclick="removerCampo(' + controleCampo + ')" <label style="background-color: rgb(246, 8, 8);"> Clique para remover campos</label></button></div>');
        }
        function removerCampo(idCampo)
        {
            //console.log("Campo remover: " + idCampo);
            document.getElementById('campo' + idCampo).remove();
        }
        function numerais(evt)
        {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            //var regex = /^[0-9.,]+$/;
            var regex = /^[0-9]+$/;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
                alert("Apenas números podem ser inseridos");
            }
        }
        function mascara(o, f)
        {
            v_obj = o
            v_fun = f
            setTimeout("execmascara()", 1)
        }
        function execmascara()
        {
            v_obj.value = v_fun(v_obj.value)
        }
        function mtel(v)
        {
            v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }
        function id(el)
        {
            return document.getElementById(el);
        }
        window.onload = function()
        {
            id('telefone').onkeyup = function()
            {
                mascara(this, mtel);
            }
        }
    </script>
    <div class="container-fluid bg-secondary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"></i>Governo Do Estado Do Ceará<b
                style="text-transform: uppercase;"></b></small>
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Seja bem vindo(a) {{auth()->user()->name }}</small>
             </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <img src="img/logo/secult-escura.png" width="180">&nbsp &nbsp &nbsp
                    <a class="btn btn-sm btn-outline-light btn-sm-square bg-success border-danger" href="{{route('login.destroy')}}"><i class="fa fa-window-close bg-secondary" aria-hidden="true"></a></i>
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
                    <a href="/postagem" class="nav-item nav-link active"><b>Início</b></a>
                    <a href="/listagem" class="nav-item nav-link "><b>Editais</b></a>
                    <a href="/desativados" class="nav-item nav-link "><b>Encerrados</b></a>

                </div>
                <butaton type="button" class="btn text-light bg-dark ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"> Pesquisar</i></butaton>
                @if(auth()->user()->super_usuario != NULL)
                   <a href="/registro"> <butaton type="button" class="btn text-light bg-dark ms-3"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Add user</butaton></a>
                @endif
            </div>
        </nav>
    </div>
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

    

    <!-- Conteúdo central -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <br>
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Cadastros</h5>
        </div>
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                        <iframe class="position-relative rounded w-100 h-100" src="img/logo/Secretaria-da-Cultura-INVERTIDA-WEB-branca-2.png" width="120" frameborder="0" style="min-height: 30px; border:0;" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                        <form method="POST" action="{{route('postagem.inserirPostagem')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <h6>Campos com * (asterisco) são obrigatórios;</h6>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    Nome: *
                                    <input type="text" id="nome" name="nome" class="form-control border-1 bg-light px-4" placeholder="Ex: Edital Secult" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    Etapas: *
                                    <textarea name="etapa" class="form-control border-1 bg-light px-4 py-4" rows="4" placeholder="Ex: Inscrições de 00/00/000 até 00/00/0000" required></textarea>
                                </div>
                                <div class="col-12">
                                    Valor: *
                                    <input type="text" name="valor" class="form-control border-1 bg-light px-4" onpaste="return false" ondrop="return false" placeholder="EX: R$: 00.00,00" style="height: 55px;" onkeypress="return numerais()" ; required>
                                </div>
                                <div class="col-12">
                                    E-mail:
                                    <input type="email" name="email" class="form-control border-1 bg-light px-4" placeholder="Ex: editais@gmail.com" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    Telefone:
                                    <input type="tel" name="telefone" id="telefone" class="form-control border-1 bg-light px-4" placeholder="Ex: (00) 0 - 0000-0000" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <label>Selecione uma categoria: *</label><br />
                                    <select name="categoria" class="form-control border-1 bg-light px-4" style="opacity: calc(1)" required>
                                        <p style="opacity: calc(0.5)">
                                            <option value="" disable selected hidden>Escolha uma categoria</option>
                                        </p>
                                        <option value="Aberto">Inscrições abertas</option>
                                        <option value="Público">Conhecimento público</option>
                                        <option value="Seleção">Processo de seleção</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label>Status do Edital: *</label><br />
                                    <select name="flag" class="form-control border-1 bg-light px-4" style="opacity: calc(1)">
                                        <p style="opacity: calc(0.5)">
                                            <option value="" disable selected hidden>Escolha o status do edital</option>
                                        </p>
                                        <option value="Ativado" selected>Ativado</option>
                                        <option value="Desativado">Desativado</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    Selecione uma imagem para o edital *
                                    <input type="file" name="arquivo" accept="image/png,image/jpg, image/jpeg" class="form-control border-1 bg-light px-4" required>
                                </div>
                                    <input type="hidden" name="id_users">
                                <div id="formulario">
                                    <div class="col-lg-12 form-group">
                                        <label>Digite um texto para associar ao link: *</label>
                                        <input type="text" name="texto[]" placeholder="Ex: Link de inscrições" class='border-1 bg-light px-4' required>

                                        <label>Link: *</label>
                                        <input type="url" name="link[]" placeholder="Ex: www.culturaCE/inscricoes" class=" border-1 bg-light px-4" required>
                                    </div>
                                </div>
                                <label> Clique no botão abaixo para adicionar novos campos</label>
                                <button class="col-lg-1" type="button" style="background-color: rgb(52, 173, 84);" onclick="adicionarCampo()">+</button>&nbsp;
                                <button class="btn btn-secondary w-100 py-3" type="submit" name="submit">Adicionar
                                    edital</button>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
