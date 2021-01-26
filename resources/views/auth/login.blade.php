<!DOCTYPE html>
<html lang="pt-br">
<!-- 
    O que está faltando
        recuperar senha o link
        clica em imagem para voltar para página inicial

    -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Criação de dashboard com laravel e bootstrap5">
	<meta name="author" content="LaravelAdmin">
	<meta name="keywords" content="laravel, dashboard, bootstrap5">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="#" />

	<title>Login | Laravel Dashboard</title>

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/appadminkit.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/appadminkit.css') }}" rel="stylesheet">
	</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar: left (default), right
-->

<body data-theme="default" data-layout="fluid" data-sidebar="left">
	<main class="d-flex w-100 h-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Seja Bem-vindo</h1>
							<p class="lead">
								Acesse a sua conta para continuar
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="/images/avatar/avatar1.png" width="132" height="132" />
									</div>
									<form method="POST" action="{{ route('login') }}">
                                    @csrf
										<div class="mb-3">
											<label class="form-label">E-mail</label>
											<input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" placeholder="Digite o e-mail" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                            @error('email')
                                                <span class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

										<div class="mb-3">
											<label class="form-label">Senha</label>
											<input id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" type="password"  name="password" placeholder="Digite a sua senha" required autocomplete="current-password"/>
                                            @error('password')
                                            <span class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <small>
												<a href="pages-reset-password.html">Esqueceu a senha?</a>
											</small>
										</div>
										<div>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
												<span class="form-check-label">
													lembrar-me
												</span>
											</label>
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-primary btn-sn text-white" role="button">
                                                {{__('Entrar')}}
                                            </button>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	</body>

</html>a