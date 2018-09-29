<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Blog</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
	<header>
		<h1>My Blog</h1>
		<p>Welcome to the blog of <span class="black-box">John Doe</span></p>
	</header>
	<div class="container">
		@include('inc.messages')
		@yield('main-content')
	</div>
    
	<footer>
		<button>Previous</button>
		<button>Next &raquo</button>
		<p>Inspired by w3.css</p>
	</footer>
	
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>