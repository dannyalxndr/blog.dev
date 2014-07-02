@extends('layouts.master')


  	@section('content')

			<!-- +++++ Welcome Section +++++ -->
			<div id="ww">
			    <div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 centered">
							<img id="picOfMe" src="assets/img/user.png" alt="Stanley">
							<h1>Hi, I am Danny!</h1>
							<p>Hello everybody. I'm Danny. There is supposed to be more info in this paragraph, but I'll be getting to that :)</p>
						
						</div><!-- /col-lg-8 -->
					</div><!-- /row -->
			    </div> <!-- /container -->
			</div><!-- /ww -->
			
			
			<!-- +++++ Projects Section +++++ -->
			
			<div class="container pt">
				<div class="row mt centered">	
					<div class="col-lg-4">
						<a class="zoom green" href="work01.html"><img class="img-responsive" src="" alt="" /></a>
						<p>PICTURE 1</p>
					</div>
					<div class="col-lg-4">
						<a class="zoom green" href="work01.html"><img class="img-responsive" src="" alt="" /></a>
						<p>PICTURE 2</p>
					</div>
					<div class="col-lg-4">
						<a class="zoom green" href="work01.html"><img class="img-responsive" src="" alt="" /></a>
						<p>PICTURE 3</p>
					</div>
				</div><!-- /row -->
				<div class="row mt centered">	
					<div class="col-lg-4">
						<a class="zoom green" href="work01.html"><img class="img-responsive" src="" alt="" /></a>
						<p>PICTURE 4</p>
					</div>
					<div class="col-lg-4">
						<a class="zoom green" href="work01.html"><img class="img-responsive" src="" alt="" /></a>
						<p>PICTURE 5</p>
					</div>
					<div class="col-lg-4">
						<a class="zoom green" href="work01.html"><img class="img-responsive" src="" alt="" /></a>
						<p>PICTURE 6</p>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
			

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

