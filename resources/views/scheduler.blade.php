@extends('layouts.app_account')

@section('content')

<section class="scheduler-1">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-8">
				<h1 class="text-center">Regístrate para recibir detalles de tu sesión por email</h1>
			</div>
			<div class="col-12 text-center"><a href=""><img src="{{ url('img/login-google.png') }}" alt="" class="img-fluid"></a></div>
			<div class="col-12 text-center"><a href=""><img src="{{ url('img/login-apple.png') }}" alt="" class="img-fluid"></a></div>
			<div class="col-12 text-center"><a href=""><img src="{{ url('img/login-fb.png') }}" alt="" class="img-fluid"></a></div>
		</div>
	</div>
</section>
 
@stop