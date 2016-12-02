<!DOCTYPE HTML>

 <html>

    <head>

    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta charset="utf-8">

        <!-- Description, Keywords and Author -->

        <meta name="description" content="">

        <meta name="author" content="Misbach Imaduddin Zuhdi">

        <title>Misbach Imaduddin</title>

        <link href="{{ URL::asset('mi-icon.ico') }}" rel="shortcut icon" />  
		

        <!-- style -->

        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">

        <!-- style -->

        <!-- bootstrap -->

        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

        <!-- responsive -->

        <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="{{ URL::asset('css/effects/set2.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ URL::asset('css/effects/normalize.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ URL::asset('css/effects/component.css') }}"  rel="stylesheet" type="text/css" >
      
        @yield('head.style')

	</head>



    <body>

    

    	<!-- header -->

        	<header role="header">

            	<div class="container">

                	<!-- logo -->

                    	<h1>

                        	<a href="{{ url('/') }}" title="Misbach Imaduddin"><img src="images/mi-logo.png" title="Misbach Imaduddin" alt="Misbach Imaduddin"/></a>

                        </h1>

                    <!-- logo -->
@section('nav')
                    <!-- nav -->

                    <nav role="header-nav" class="navy">

                        <ul>

                            <li><a href="{{ url('/') }}" title="Work">Home</a></li>

                            <li><a href="{{ url('/about') }}" title="About">About</a></li>

                            <li><a href="{{ url('/contact') }}" title="Contact">Contact</a></li>

                        </ul>

                    </nav>

                    <!-- nav -->
@show

                </div>

            </header>

        <!-- header -->

        <!-- main -->

        @yield('content')

    	<!-- main -->

        <!-- footer -->

        <footer role="footer">

            <!-- logo -->

                <h1>

                    <a href="{{ url('/') }}" title="Misbach Imaduddin"><img src="images/mi-logo.png" title="Misbach Imaduddin" alt="Misbach Imaduddin"/></a>

                </h1>

            <!-- logo -->

            <!-- nav -->

            <nav role="footer-nav">

            	<ul>

                	<li><a href="{{ url('/') }}" title="Work">Home</a></li>

                    <li><a href="{{ url('/about') }}" title="About">About</a></li>

                    <li><a href="{{ url('/contact') }}" title="Contact">Contact</a></li>

                </ul>

            </nav>

            <!-- nav -->

            <ul role="social-icons">

                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-wikipedia-w" aria-hidden="true"></i></a></li>

            </ul>

            <p class="copy-right">&copy; <?php echo date("Y");?>  Misbach Imaduddin Zuhdi</p>

        </footer>

        <!-- footer -->

    

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="{{ URL::asset('js/jquery.min.js') }}" type="text/javascript"></script>

        <!-- custom -->

		<script src="{{ URL::asset('js/nav.js') }}" type="text/javascript"></script>

        <script src="{{ URL::asset('js/custom.js') }}" type="text/javascript"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

        <script src="{{ URL::asset('js/effects/masonry.pkgd.min.js') }}"  type="text/javascript"></script>

		<script src="{{ URL::asset('js/effects/imagesloaded.js') }}"  type="text/javascript"></script>

		<script src="{{ URL::asset('js/effects/classie.js') }}"  type="text/javascript"></script>

		<script src="{{ URL::asset('js/effects/AnimOnScroll.js') }}"  type="text/javascript"></script>

        <script src="{{ URL::asset('js/effects/modernizr.custom.js') }}"></script>

        <!-- jquery.countdown -->

        <script src="{{ URL::asset('js/html5shiv.js') }}" type="text/javascript"></script>
        
        @yield('body.script')

    </body>

</html>