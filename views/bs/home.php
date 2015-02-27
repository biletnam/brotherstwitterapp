<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://kevinmkarol.com/css/bshome.css">
  <script src="http://brotherscmu.com/js/isMobile.min.js"></script>
  <script src="../../../js/jquery.min.js"></script>
</head>
<body>
<div class="fullscreen">
	<img class="bros3" src="http://kevinmkarol.com/images/2bros.jpg">
	<div class="home_centered">
	  <h1> @ </h1>
	  <textarea class="twitter_handle" placeholder="enter_your_twitter_handle"></textarea>
	  <p class="enter_site_txt">Enter Site</p>
	</div>

</div>
</body>
<script>
    function positionBox(){
      if(isMobile.any){
	$("body").css("min-width","");	
	$("body").css("min-height","");	
	$("body").css("height","100%");
	$("body").css("width","100%");
	$(".bros3").css('width',"100%");
	$(".bros3").css('height',"100%");	
	$(".twitter_handle").css('visibility',"hidden");
	$("h1").css('visibility',"hidden");
	$(".home_centered").css("width","500px");
	$(".enter_site_txt").css("font-size","60px");
      }

      var imgLoc = $(".bros3").position();
      var height = $(".bros3").css("height");
      var newTop = (imgLoc.top + parseInt(height)/2)-50;
      
      var width = $(".bros3").css("width");
      var newLeft = (imgLoc.left + parseInt(width)/2)-100;
      
      var innerWidth = $(".home_centered").css("width");
      var inLeft = (parseInt(innerWidth)/2)-37;

      if(isMobile.any){
        inLeft = (parseInt(innerWidth)/2)-250;
      }
      $(".home_centered").css('top',newTop);
      $(".home_centered").css('left',newLeft);
      $(".enter_site_txt").css('left', inLeft); 
    }

    $(window).resize(positionBox);
    $(window).load(positionBox);

    $(".home_centered p").hover(function(){
	$(this).css("cursor","pointer");	
    },function(){
	$(this).css("cursor","default");
    });
 
    $(".home_centered p").click(function(){
	var handle = $(".twitter_handle").val();
	var parturl = "http://brotherscmu.com/app/dispatch/";
	var redirecturl = parturl.concat(handle);
	window.location.href = redirecturl;
    });	
    $(".twitter_handle").keydown(function(e){
	if(e.keyCode==13){
	   $(".enter_site_txt").click();
	}
    });

</script>

</html>
