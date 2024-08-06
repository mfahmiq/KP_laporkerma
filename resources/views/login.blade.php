<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAPORKERMA | </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistem Pelaporan Kerjasama (LAPORKERMA) merupakan layanan informasi dan pendataan data kerjasama Perguruan Tingggi dengan mitra dalam negeri maupun luar negeri.">
  <meta name="keywords" content="">
  <meta name="author" content="Muchamad Nur Rochim">
  
  	<link href="https://laporankerma.kemdikbud.go.id/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  	
	<!-- Main styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/login-v4/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/login-v4/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/login-v4/assets/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/login-v4/assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/login-v4/assets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/login-v4/assets/css/main.css') }}">


    <!-- Main scripts-->
    <script src="{{ asset('themes/login-v4/assets/js/jquery-2.1.1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/login-v4/assets/vendor/bootstrap/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/login-v4/assets/vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	
	<!--JS Packages -->
	<script src="https://www.googletagmanager.com/gtag/js?id=G-9MBT93MN0H" type="text/javascript" async></script><script type="text/javascript" >window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-9MBT93MN0H');</script><script src="https://www.google.com/recaptcha/api.js?render=6LcitQEbAAAAAOaVom9Uc4SetwuZfOdzEim_cQcg" type="text/javascript" ></script>	
</head>
<body>	
	<div class="limiter">
		<div class="container-box center" style="background-image: url('https://laporankerma.kemdikbud.go.id/application/themes/login-v4/assets/img/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
	<form id="formLogin" class="login100-form validate-form" method="post" action="https://laporankerma.kemdikbud.go.id/auth/login">
		<!--Logo --> 
		<span class="login100-form-title p-b-49">
			<img src="https://laporankerma.kemdikbud.go.id/application/assets/img/dikti_logo.png" width="150">
		</span>

		<div class="m-b-23" style="color:red;"></div>

		<div class="wrap-input100 validate-input m-b-23" data-validate = "Nama akun atau email belum terisi">
			<input class="input100" type="text" name="username" placeholder="Masukkan nama akun atau email">
			<span class="focus-input100" data-symbol="&#xf206;"></span>
		</div>

		<div class="wrap-input100 validate-input" data-validate="Sandi belum terisi">
			<input class="input100" type="password" name="password" placeholder="Masukkan sandi">
			<span class="focus-input100" data-symbol="&#xf190;"></span>
		</div>
					
		<div class="text-right p-t-8 p-b-31">
			<a href="#"><i class="zmdi zmdi-home"></i></a> |
			<a href="#">Lupa sandi?</a>
		</div>
					
		<div class="container-login100-form-btn">
			<div class="wrap-login100-form-btn">
				<div class="login100-form-bgbtn"></div>
				<button class="login100-form-btn">Login</button>
			</div>
		</div>

		
		
				<div class="flex-col-c p-t-50">
			<span class="txt1 p-b-10">Belum punya akses?</span>
			<ul>
				<li><a href="#" class="txt2"> Daftar</a></li>
			</ul>
		</div>
				<input type="hidden" id="token" name="token">
    	<input type="hidden" name="action" value="validate_captcha">
	</form>
	
		<script>
	$(function() {
		$('#formLogin').submit(function(event) {
			event.preventDefault();
			grecaptcha.ready(function() {
				grecaptcha.execute('6LcitQEbAAAAAOaVom9Uc4SetwuZfOdzEim_cQcg', {action: 'validate_captcha'})
				.then(function(token) {
					$('#formLogin').find('#token').val(token);
					$('#formLogin').unbind('submit').submit();
				});;
			});
			return false;
		});
	});
  	</script>
	</div>



		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	
	

	
	<!--Main -->
	<script src="https://laporankerma.kemdikbud.go.id/application/themes/login-v4/assets/js/main.js"></script>
</body>
</html>