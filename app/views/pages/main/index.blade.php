@extends('layouts.master')

@section('content')

	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1>DANNY JIMENEZ</h1>
				</div>
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/headerwrap -->
	
	<section id="about" name="about"></section>
	<div id="aboutwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 name">
					<img id="picOfMe" class="img-responsive" src="assets/img/me_04.jpeg">
					<div class="name-label"></div>
				</div><! --/col-lg-4-->
				<div class="col-lg-8 name-desc">
					<h2>FULL STACK <br>WEB DEVELOPER & <br/>ENJOYING SAN ANTONIO LIVIN</h2>
					<div class="name-zig"></div>
					
					<div class="col-md-6">
						<p>About me pages are almost ridiculous to write, but I guess I'll give this a shot. When you first meet a person you want to know the basics.
							I can tell you that I am 23 years old, just recently have been imersed into Web Development, am one of 8 boys in my family, I was born and raised 
							in San Antonio and am always looking for new things to do and new places to go. I created this website to put myself out there, show the world what I can do and make new contacts. </p>
					</div>
					<div class="col-md-6">
						<p> I have tons of hobbies, maybe too many.
							For example: I learned how to dance through youtube (because I had too much time), I am a writer and post my work through my instagram @dannyalxndr_ ,
							I am a musician and love playing with my friends and family, I like to draw, paint.. honestly I just love art. There's so many forms of expression
							and I'm always searching for new ways to express myself!</p>
					</div>
					
				</div><! --/col-lg-8-->
		
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /aboutwrap -->
	
	<! -- ABOUT SEPARATOR -->
	<div class="sep about" data-stellar-background-ratio="0.5"></div>
	
	
		<div class="container">
			<div class="row mt centered">
				<h1>MY DESIGN PROCESS</h1>
				<div class="col-lg-4 proc">
					<i class="fa fa-coffee"></i>
					<h3>Brainstorm Madness</h3>
					<p>Everyone has their own way to have a light bulb effect above their heads. Mine involves sitting down in a relaxing chair, completely by myself, listening to music. This formula allows my brain to create new ideas, and begin the next step.</p>
				</div>
				<div class="col-lg-4 proc">
					<i class="fa fa-cogs"></i>
					<h3>The Idea</h3>
					<p>Once I have a solid foundation for an idea I'd like to work with, I begin with paper and pencil. Anything and everything gets thrown onto my sketch book, and a lot more into the trash bin haha. This step is ongoing until I feel satisfied with my draft.</p>
				</div>
				<div class="col-lg-4 proc">
					<i class="fa fa-heart"></i>
					<h3>The Product</h3>
					<p>Hard work and a lot of time goes into making a great and friendly product. Understanding that the product can never be perfect allows me and the client to always move forward with newer ideas and a better experience. The future is always my aim.</p>
				</div>
				
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/Portfoliowrap -->

	<! -- PORTFOLIO SEPARATOR -->
	

	<! -- CONTACT SEPARATOR -->
	<div class="sep contact" data-stellar-background-ratio="0.5"></div>
	
	<div id="contactwrap">
		<div class="container">
			<div class="row">
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
			</div><! --/row -->  

		</div><!-- /container -->
	</div>
	@stop
	
	@section('bottomscript')
    
		<script>
		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
		</script>
		
		<script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
	   </script>

	@stop

