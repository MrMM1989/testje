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
    	@yield('content')
	</div>
	<!-- end of div sitebody -->
  </body>
</html>
