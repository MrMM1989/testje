@extends('layouts.default')

@section('content')
	<h3>Log in met je E-mail en je wachtwoord</h3>

	{{ Form::open(array('route'=>'users.login', 'method' => 'post')) }}
	
	<ul class="form">
		<li>
			{{ Form::label('e-mail', 'E-mail: ') }}
			{{ Form::email('e-mail') }}
		</li>
		<li>
			{{ Form::label('password', 'Wachtwoord: ') }}
			{{ Form::password('password') }}
		</li>
		<li>
			{{ Form::submit('Inloggen', array('class' => 'topmargin1')) }}
		</li>
	</ul>
	
	{{ Form::close() }}
	
@stop
