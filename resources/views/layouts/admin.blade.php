<!doctype html>
<html class="fixed">
    <head>
		<meta charset="UTF-8">
		<title>Default Layout | Porto Admin - Responsive HTML5 Template 1.7.0</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.theme.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/morris.js/morris.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">
        <script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>
        <script src="{{ asset('assets/vendor/style-switcher/style.switcher.localstorage.js') }}"></script>
	</head>
	<body>
		<section class="body">
			@include('partials.admin_header')
			<div class="inner-wrapper">
				@include('partials.admin_sidebar')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
                    </header>
                    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
                    @yield('content')
                </section>
            </div>
        </section>
        <script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
        <script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets/vendor/flot.tooltip/flot.tooltip.js') }}"></script>
        <script src="{{ asset('assets/vendor/flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('assets/vendor/flot/jquery.flot.categories.js') }}"></script>
        <script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-sparkline/jquery-sparkline.js') }}"></script>
        <script src="{{ asset('assets/vendor/raphael/raphael.js') }}"></script>
        <script src="{{ asset('assets/vendor/morris.js/morris.js') }}"></script>
        <script src="{{ asset('assets/vendor/gauge/gauge.js') }}"></script>
        <script src="{{ asset('assets/vendor/snap.svg/snap.svg.js') }}"></script>
        <script src="{{ asset('assets/vendor/liquid-meter/liquid.meter.js') }}"></script>
        <script src="{{ asset('assets/javascripts/theme.js') }}"></script>
        <script src="{{ asset('assets/javascripts/dashboard/examples.dashboard.js') }}"></script>
    </body>
</html>
