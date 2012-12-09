<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Title &amp; Meta -->
<title>Second Opinion&trade;</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Stylesheets -->
{{ Asset::styles() }}

<!-- IE Fallbacks -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<header role="banner">
	<div class="container">
		<a class="brand" href="{{ URL::to_route('patients') }}"><img src="/img/so-logo-sm.png"/></a>
		@include('auth._login_menu')
		
		
		
    </div>
</header>

<section role="front-end" class="main-body">
    @yield('content')
</section><!-- end .main-body -->

{{ Asset::scripts() }}
@yield('more-script')

</body>
</html>