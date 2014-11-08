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
		
		<h1>{{ $pageheader }}</h1>	

		<ul id="sitenav">
			<li><a href="/">Home</a></li>
			<li><a href="/">Attracties</a></li>
		</ul>
		
    	@yield('content')
		
	</div>
	<!-- end of div sitebody -->
	<!-- start of div sitefooter -->
	<div id="sitefooter">
	</div>
	<!-- end of div sitefooter>
  </body>
	
</html>
