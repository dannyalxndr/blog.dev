<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>dannyalxndr</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
</head>
<body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav navbar-left">
				@if (Auth::check())
						<li>{{ link_to_action('HomeController@logout', 'Log Out') }}</li>
						<li><a class="dropdown-toggle navbar-brand" href="index" data-toggle="dropdown">{{ Auth::user()->username }}</a></li>			
				@else
					<li>{{ link_to_action('HomeController@showLogin', 'Login') }}</li>
					<!-- <li>{{ link_to_action('HomeController@showRegister','Register') }}</li> -->
				@endif
			</ul>
			<ul class="nav navbar-nav navbar-right">
				@if (Auth::check())
					<li>{{ link_to_action('PostsController@create', 'Create Post') }}</li>
				@endif
				<li><a href="/main">Home</a></li>
				<!-- <li><a href="about">About</a></li>
				<li><a href="portfolio">Portfolio</a></li> -->
				<li><a href="/posts">Blog</a></li>
				<!-- <li><a href="contact">writing</a></li> -->
			</ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
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
    <script src="/js/bootstrap.js"></script>

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/stanley-hover.zoom.js"></script>
    <script src="/assets/js/stanley-hover.zoom.conf.js"></script>
    
</body>
</html> 
