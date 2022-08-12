@extends('layouts.admin')
@section('title', 'Registro')
@section('content')

<div class="container-fluid bg-secondary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"></i>Governo Do Estado Do Ceará</small>
                </div>
            </div>            
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <img src="img/logo/secult-escura.png" width="180">&nbsp &nbsp &nbsp
                    <a class="btn btn-sm btn-outline-light btn-sm-square bg-success border-danger" href="/listagem"><i class="fa fa-arrow-right" aria-hidden="true" bg-secondary" aria-hidden="true"></a></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Topo fim -->
    
    <!-- Área de login -->
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
    <div class="container">
        <aside id="aside-signin">
            <img id="identidade-govbr" src="img/logo/logoNova.png" />
        </aside>
        <main id="main-signin">
            <form method="POST" action="">
                @csrf                
                <div class="card" id="login-cpf">
                    <div class="item-login-signup-ways" onclick="accordion('accordion-panel-id')">
                        <img src="img/logo/logoNova.png"><br>
                    </div>                    
                    <div class="accordion-panel" id="accordion-panel-id">
                        @if(Session::has('fail'))
                        <div class="alert alert-danger text-center">
                            {{Session::get('fail')}}
                        </div>
                        @endif
                        <p>Cadastrar novos <strong>usuários</strong> necessita <strong>permissão "admin"</strong></p>
                        <label for="name">Usuário*</label>
                        <input id="name" name="name" autocomplete="ON" tabindex="1" type="text" value="" placeholder="Digite o nome do usuário" aria-invalid="false" required>
                        
                        <label for="email">E-mail*</label>
                        <input id="email" name="email" autocomplete="ON" tabindex="1" type="email" value="" placeholder="Digite seu email" aria-invalid="false" required>
                        
                        <label for="senha">Senha*</label>
                        <input id="password" name="password" autocomplete="OFF" tabindex="1" type="password" value="" placeholder="****" aria-invalid="false" required>
                        <label for="senha">Repita sua senha*</label>
                        <input id="password_confirmation" name="password_confirmation" autocomplete="OFF" tabindex="1" type="password" value="" placeholder="****" aria-invalid="false" required>
                        <div>
                            @error('password')
                            <p class="text-danger"><i class="fa fa-key" aria-hidden="true"></i>*Os campos "senha" tem que ser iguais e ter no mínimo 8 caracteres!</p>
                            @enderror
                        </div>
                       <!-- <div class="button-panel" id="login-button-panel">
                            <button name="action" value="enterAccountId" class="button-continuar" type="submit" tabindex="3">Cadastrar</button>
                        </div>-->
                        <div class="button-panel" id="login-button-panel">
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addUsuarioModal">
					         Cadastrar
				        </button>
                    </div>
                    <hr id="hr-outras-op" style="margin: 0 0 0">
                    <div class="item-login-signup-ways">
                        <img src="img/logo/acesso.png" onclick="showModal('modal-bancos-credenciados')" width="42em" />
                        <!-- Para voltar a cor normal, basta apagar o style do link e remover o 'green' do nome da imagem acima. -->
                        <a tabindex="5" href="#" onclick="showModal('modal-bancos-credenciados')" style="color:#008C32">O login e senha devem ser fornecidos pelo admin
                            <span style="font-size: 7px; background-color: #008C32; color: white; padding: 3px; top: -3px; position: relative; margin-left: 8px;">SOMENTE USUÁRIOS SAS</span>
                        </a>
                    </div>
                </div>

                <div id="addUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addUsuarioModalLabel">Cadastro somente com senha de permissão</h5>
                                <button type="button" class=" border border-danger bg-dark" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Senha</label>
                                    <div class="col-sm-10">
                                        <input name="senhaAdmin" type="password" class="form-control" id="nome" placeholder="********" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                    <input type="submit" name="CadUser" id="CadUser" value="Confirmar" class="btn btn-outline-success">
                                    </div>
                                </div>
                            </div>
                        </div>
			        </div>
		        </div>
            </form>
        </main>
    </div>
    <!-- Áred de login Fim -->
@endsection