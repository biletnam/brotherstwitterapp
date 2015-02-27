<?php
$http = $_SERVER['HTTPS'] = 'on' ? 'https://':'http://';
$url  = urlencode($http.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
$screen_name = 'hightechriffs';
$hashtags = "BrothersSize,CMU,WhatDefinesMe";

?>
<div class="content">
    <div class="split result">
	<div class="userContent">
	    <img id="profilePicture" src="<? echo $picture ?>">
	    <p id="definestxt"><? echo $message  ?> </p>
	</div>
	<div class="quote2">
	    <p class="ogunQuote"> When we look around it can be so easy to say "Because that person is ______ they could never ____".  The Brothers Size is a play about three African American men.  But more importantly, it's a play about three people.  I would like to invite you to join us as we hear their story, not as definers, but as fellow human beings.  Ashe. </p>
	    <p class="oshoosiAttr">-Priscila Garcia-Jacquier <br> Director, The Brothers Size</p>
	</div>
	<p class="con_txt">What Con</p>
	<div class="rightinfo">
	    <p> April 23-25</p>
	    <p>Rauh Studio Theater</p>
	    <p>Carnegie Mellon University </p>
	</div>
    </div>
    <div class="split face">
	<img class="trans" src="http://kevinmkarol.com/images/confines_face.jpg">
	<div class="others">
	   <?php 
	     foreach($others as $userdata){
		echo "<img class='comPic' data-message='".$userdata->message."\n\n @".$userdata->screen_name."' src=". $userdata->picture.">";	
	     }
	    ?>	
	</div>
	<p class="confines_txt">fines You?</p>
    </div>
</div>
</body>
<script>
$(document).ready(function(){
    $('.comPic').qtip({
	content:{
	    attr: 'data-message'
	},
	style:{
	   classes:'kevinQtip',
	}
	});
});

</script>


</HTML>
