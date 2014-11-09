<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
	{{ HTML::style('css/reset.css') }}
	{{ HTML::style('css/main.css') }}
  </head>
  <body>
	<!-- start of div sitebody -->	
	<div id="sitebody">
		
		<h1>Attractiepark - Personeel</h1>

		<ul id="sitenav">
			<li><a href="/">Home</a></li>
			<li><a href="/">Attracties</a></li>
			<li><a href="/">Medewerkers</a></li>
			<li><a href="/">Dienstroosters</a></li>
			<li><a href="/">Forum</a></li>
		</ul>

		<ul id="usermenu">
			<li><a href="/">Inloggen</a> | </li>
			<li><a href="/">Registreren</a></li>
		</ul>
		<h2>{{ $pageheader }}</h2>	
    	@yield('content')
		
	</div>
	<!-- end of div sitebody -->
	<!-- start of div sitefooter -->
	<div id="sitefooter">
		<ul id="footermenu">
			<li><a href="/">Arbeidsregelement</a></li>
			<li><a href="/">Privacybeleid</a></li>
			<li><a href="/">FAQ</a></li>
			<li><a href="/">Helpdesk</a></li>
		</ul>
	</div>
	<!-- end of div sitefooter>
  </body>
	
</html>
