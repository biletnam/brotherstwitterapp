
	<div class="footer">
		<h3>"It's the best possible time to be alive, when almost everything you thought you knew is wrong" - Tom Stoppard</h3>
	</div>
	</div>
	<div class="gutter"></div>
     </body>
      <script>
	window.onload=function(){ 
	    $(".header").click(function(){
		window.location.href = "http://kevinmkarol.com";
	    });
	    $("#king img").click(function(){
		window.location.href = "http://kevinmkarol.com/king";
	    });
	    $("#bliss img").click(function(){
		window.location.href = "http://kevinmkarol.com/kmk/bliss";
	    });
	    $("#hello img").click(function(){
		window.location.href = "http://kevinmkarol.com/kmk/hello";
	    });
	    $("#services img").click(function(){
		window.location.href ="http://kevinmkarol.com/kmk/services";
	    });
	
	    $(".header").hover(
			function(){
				$(this).css("cursor","pointer"); 
			}, function(){
				$(this).css("cursor","default"); 
			});

	    $(".quarter img").hover(
			function(){
				$(this).css("opacity","0.8");
				$(this).css("cursor","pointer"); 
			}, function(){
				$(this).css("opacity","1");
				$(this).css("cursor","default"); 
			});
	}
     </script>
</html>
