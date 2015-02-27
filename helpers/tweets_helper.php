<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

    function send_tweet(){
	$CI = &get_instance();
	$tN = 7323911692;
	$shouterArray = $CI->isolation_model->getInfoArray('tweeters');
	$currentStage = $CI->session->userdata('stage');
	$shouter = $shouterArray[($currentStage -15)];
	$to = $shouter->phone;
	$result = "";	

	switch($currentStage){
	    case 15:
		$result = "When a girl is in love, she offers sex.  When a guy wants sex, he offers love.";  
	        break;
	    case 16:
		$result = "Thousands in Egypt denouncing Mubarak, clashing with riot police; demonstration is the biggest in years.";  
	        break;
	    case 17:
		$result = "Just got a booty call from life, apparently it still wants to keep fucking me.";  
	        break;
	    case 18:
		$result = "5 or 6 surrounded me, groped and prodded my breasts, grabbed my genital area and I lost count how many hands tried to get in my trousers.";  
	        break;
	    case 19:
		$result = "I'm glad you cheated on me.  She probably gave you things I couldn't... like STDs and terrible blow jobs.";  
	        break;
	    case 20:
		$result = "I want to thank god... for that bullet that killed travyon martin.";  
	        break;
	    case 21:
		$result = "How many mexicans does it take to build a... oh shit, they're done";  
	        break;
	    case 22:
		$result = "I love Batkid.  I'm cheering you on little man!";  
	        break;
	    case 23:
		$result = "All registered sex offenders must report immediately....TO THE DANCEFLOOR!";
	        break;
	    case 24:
		$result = "Brad and I are up early and awaiting the Supreme Court's decisions on marriage equality.  Today is the day!";
	        break;
	    default:
		$result = "I'm not over weight, I'm under tall";
		break;
	}
	$message = "Shout \"". $result."\"";
	$CI->twilio->sms($tN, $to, $message);
    }


