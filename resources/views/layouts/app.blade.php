<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Attiva Cred</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/Logotipo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jmenu.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/ativaform.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/ativaform2.css') }}" rel="stylesheet">
    <style>
        .alert {
            width: 50%;
            font-size: .75em;
            position: relative;
            right: 25%;

            z-index: 2;
            background-color: #f2cece;
            padding: .7em;
            color: #f63c53;
            box-shadow: 3px 3px 5px rgba(0,0,0,.2);
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            transition: transform;
            -ms-transform: translateX(100%);
            transform: translateX(100%);
        }
    </style>
    @stack('styles')
</head>
<body>
    @include('partials.header')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @yield('content')
    @include('partials.footer')
    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
    <!--<script src="{{ asset('assets/lib/jquery/jquery-migrate.min.js') }}"></script> -->
    <script src="{{ asset('assets/lib/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/scrollreveal/scrollreveal.min.js') }}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('assets/contactform/contactform.js') }}"></script>
    <!-- Template Main Javascript File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
