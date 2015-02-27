<?php
$http = $_SERVER['HTTPS'] = 'on' ? 'https://':'http://';
$url  = urlencode($http.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
$screen_name = 'hightechriffs';
$hashtags = "WhatDefinesMe";
$partialurl ="http://twitter.com/intent/tweet?url=".$url."&hashtags=".$hashtags."&via=BrothersSize";


?>
<div class="content">
    <div class="split face confine_face">
	<img id="oshoosiface"src="http://kevinmkarol.com/images/defines_face.jpg">
	<p class="de_txt">What De</p>
    </div>
    <div class="split tweet_pannel">
	<div class="quote1">
	    <p class="oshoosiQuote">I need to be out there looking for the me's.  He got something to tell me man.</p>
	    <p class="oshoosiAttr">-Oshoosi Size </p>
	</div>
	<div class="interactive">
	    <textarea id="tweet_text" data-max-length="88" maxlength="88" placeholder="What defines you?"></textarea>
	    <p class="chars">Characters Left </p>
	    <img id="tweet_button" height="60px" width="100px" src="http://kevinmkarol.com/images/tweet-button.jpg">
	</div>
        <p class="fines_txt">fines You?</p>
	<div class="info">
	    <p> April 23-25</p>
	    <p>Rauh Studio Theater </p>
	    <p>Carnegie Mellon University</p>
	</div>

    </div>
</div>
<script>
$("#tweet_text").characterCounter();
window.onload=function(){
	$("#tweet_button").click(function(){
		var message = $("#tweet_text").val();
		var partCookie = "message=";
		document.cookie= partCookie.concat(message);
		window.location.href = "http://brotherscmu.com/app/authen"; 
		});
    /*	$("#tweet_text").keydown(function(e){
	  if(e.keyCode==13){
	  $("#tweet_button").click();
	}
    });*/
};

</script>

</body>
</HTML>
