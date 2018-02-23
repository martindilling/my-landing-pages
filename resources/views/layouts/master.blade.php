<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-screen">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>

	<!-- Styles -->
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="h-screen font-sans bg-grey-lighter">
	@yield('body')
</body>
</html>
