
<html>
<head>
	<title>almost there</title>
</head>
<body>

	<h1>enter the password</h1>
	<p>Hint: Contra!</p>

	<!-- enter the KONAMI CODE to access website -->
  	<script>

    	var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
		$(document).keydown(function(e) 
		{
			kkeys.push( e.keyCode );

			if (kkeys.toString().indexOf( konami ) >= 0) 
			{
			    $(document).unbind('keydown',arguments.callee);

			    // do something awesome
			    // $("body").addClass("konami");
			    // $(this).parent().addClass("invisible");
			  	// $(".konami").fadeIn();
		  	}
		});

    </script>

</body>
</html>
