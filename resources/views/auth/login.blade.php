@extends('layouts.admin')
@section('title', 'Login')
@section('content')
    <!-- Topo -->
    <div class="container-fluid bg-secondary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"></i>Governo Do Estado Do Ceará</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <img src="img/logo/secult-escura.png" width="180">
                    <a href="/editais" class="nav-item nav-link text-light bg-dark">Retornar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topo fim -->
      <!-- Área de login -->
    <div class="container">
        <aside id="aside-signin">
            <img id="identidade-govbr" src="img/logo/logoNova.png" />
        </aside>
        <main id="main-signin">
            <form method="POST" action="">
                @csrf
                <div class="card" id="login-cpf">
                    <div class="item-login-signup-ways">
                        <img src="img/logo/logoNova.png"><br>
                    </div>
                    <div class="accordion-panel" id="accordion-panel-id">
                        @if(session('msg'))
                            <div class="row">
                               <p class="msg">{{session('msg')}}</p>
                            </div>                                            
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger text-center">
                            {{Session::get('fail')}}
                        </div>
                        @endif
                        <p>Digite seu <strong>login</strong> e <strong>senha</strong> para acessar sua conta do editais culturais</p>
                        <label for="email">Usuário</label>
                        <input id="email" name="email" autocomplete="ON" tabindex="1" type="text" value="" placeholder="Digite seu email" aria-invalid="false">
                        <label for="password">Senha</label>
                        <input id="password" name="password" autocomplete="OFF" tabindex="1" type="password" value="" placeholder="********" aria-invalid="false">
                        <div class="button-panel" id="login-button-panel">
                            <button name="action" value="enterAccountId" class="button-continuar" type="submit" tabindex="2">Acessar</button>
                        </div>
                        <div>
                            @error('message')
                            <p class="text-danger"><i class="fa fa-key fa-fw"></i>*E-mail ou senha inválidos</p>
                            @enderror
                        </div>
                    </div>
                    <hr id="hr-outras-op" style="margin: 0 0 0">
                    <div class="item-login-signup-ways">
                        <img src="img/logo/acesso.png" width="42em" />
                        <a tabindex="5" href="#" onclick="showModal('modal-bancos-credenciados')" style="color:#008C32">O login e senha devem ser fornecidos pelo admin
                            <span style="font-size: 7px; background-color: #008C32; color: white; padding: 3px; top: -3px; position: relative; margin-left: 8px;">SOMENTE USUÁRIOS SAS</span>
                        </a>
                    </div>
                </div>
                <button type="button"><a href="/kkkk"></a></button>
                </button>
            </form>
        </main>
    </div>
    <br><br>
   <!-- Áred de login Fim -->
    
@endsection