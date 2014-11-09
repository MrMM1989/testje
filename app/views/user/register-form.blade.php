@extends('layouts.default')

@section('content')
	<h3>Registreer een nieuw account</h3>

	{{ Form::open(array('route'=>'users.store', 'method' => 'post')) }}
	
	<ul class="form">
		<li>
			{{ Form::label('username', 'Gebruikersnaam: ') }}
			{{ Form::text('username') }}
		</li>
		<li>
			{{ Form::label('e-mail', 'E-mail: ') }}
			{{ Form::email('e-mail') }}
		</li>
		<li>
			{{ Form::label('password', 'Wachtwoord: ') }}
			{{ Form::password('password') }}
		</li>
		<li>
			{{ Form::label('rpassword', 'Herhaal wachtwoord: ') }}
			{{ Form::password('rpassword') }}
		</li>
		<li>
			{{ Form::submit('Registreer', array('class' => 'topmargin1')) }}
		</li>
	</ul>
	
	{{ Form::close() }}
	
@stop
