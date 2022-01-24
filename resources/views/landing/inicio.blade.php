

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Grupo Comercializador Universal Pinal del Rio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{  asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{  asset('assets/css/bootstrap.css') }}" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{  asset('assets/css/slick.css') }}">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="{{  asset('assets/css/bootstrap-datepicker.css') }}">   
     <!-- Gallery Lightbox -->
    <link href="{{  asset('assets/css/magnific-popup.css') }}" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="{{  asset('assets/css/theme-color/blue-theme.css') }}" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

	





	<!-- Animate.css -->
	<link rel="stylesheet" href="{{  asset('css/animate.css') }}">
	



    @include('component.nav')

    @yield('content')

    @include('component.footer')

    @yield('scripts')

  </body>
</html>
