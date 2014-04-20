<html>

<head>
	{{ HTML::style('public/css/main.css') }}
</head>

<body>
	<main>
		@yield('content')
	</main>
	
	<footer>
		@yield('footer')
	</footer>
</body>

</html>