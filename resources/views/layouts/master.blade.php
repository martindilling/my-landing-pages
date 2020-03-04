<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-screen">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>

	@hasSection('uaid')
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=@yield('uaid')"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '@yield('uaid')');
		</script>
	@endif

	@hasSection('gtmid')
		<!-- Google Tag Manager -->
		<script>
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','@yield('gtmid')');
		</script>
	@endif

	<!-- Styles -->
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="h-screen font-sans bg-grey-lighter">
	@hasSection('gtmid')
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe
				src="https://www.googletagmanager.com/ns.html?id=@yield('gtmid')"
				height="0"
				width="0"
				style="display:none;visibility:hidden"
			></iframe>
		</noscript>
	@endif

	@yield('body')
</body>
</html>
