@extends('layouts.master')


@section('content')

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img id="picOfMe" class="img-circle" src="assets/img/me_04.jpeg" alt="Stanley">
					<h1>Danny Jimenez</h1>
					<p>Full Stack Web Developer.</p>
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->

	<!-- +++++ Footer Section +++++ -->
    
    <div id="footer">
        <div class="container">
        	<div id="mainPageFooter">
            	<ul class="nav navbar-nav">
					<li class="fa-button"><a href="https://www.linkedin.com/profile/view?id=344653707&trk=nav_responsive_tab_profile_pic">
						<span class="fa-stack fa-2x">
							<i class="fa fa-linkedin fa-stack-2x"></i>
						</span>
						</a>
					</li>
					<li class="fa-button"><a href="http://github.com/dannyalxndr">
						<span class="fa-stack fa-2x">
							<i class="fa fa-github fa-stack-2x"></i>
						</span>
						</a>
					</li>
					<li class="fa-button"><a href="http://twitter.com/dannyalxndr">
						<span class="fa-stack fa-2x">
							<i class="fa fa-twitter fa-stack-2x"></i>
						</span>
						</a>
					</li>
					<li class="fa-button"><a href="http://facebook.com/dannyalxndrwrites">
						<span class="fa-stack fa-2x">
							<i class="fa fa-facebook fa-stack-2x"></i>
						</span>
						</a>
					</li>
					<li class="fa-button"><a href="http://instagram.com/dannyalxndr_">
						<span class="fa-stack fa-2x">
							<i class="fa fa-instagram fa-stack-2x"></i>
						</span>
						</a>
					</li>
					<li></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><br>San Antonio TX <br></li>
				</ul>
			</div>       
        </div>
    </div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- enter the KONAMI CODE to access website -->
  	<script>

    	var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";

		$(document).keydown(function(e) {

			kkeys.push( e.keyCode );

			if ( kkeys.toString().indexOf( konami ) >= 0 ) {

		    $(document).unbind('keydown',arguments.callee);
		    
		    // do something awesome
		    $("body").addClass("konami");
		    	$(this).parent().addClass("invisible");
		  		$(".konami").fadeIn();

		  	}

		});


    </script>
    
@stop

