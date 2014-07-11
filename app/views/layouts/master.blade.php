<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>dannyalxndr</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">MENU</a></h1>
			<i class="fa fa-times menu-close"></i>
			<a href="/" class="smoothScroll">Home</a>
			<a href="/#about" class="smoothScroll">About</a>
			<!-- <a href="/#portfolio" class="smoothScroll">Portfolio</a>
			<a href="/posts" class="smoothScroll">Blog</a> -->
			<a href="/#contact" class="smoothScroll">Contact</a>

			<a class="twitter-timeline" href="https://twitter.com/dannyalxndr" data-widget-id="487631138416885760">Tweets by @dannyalxndr</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>

	</nav>

    <body data-spy="scroll" data-offset="0" data-target="#theMenu">    
    <div>
	    @if (Session::has('successMessage'))
	    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif
    </div>

    @yield('content')
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="assets/js/classie.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.js"></script>    
	<script src="assets/js/main.js"></script>

    @yield('bottomscript')
    
</body>
</html> 
