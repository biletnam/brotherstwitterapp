<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

    function google_init(){
	$CI = &get_instance();
	$tN = 7323911692;
	$actor = $CI->isolation_model->getInfo('google_responder');
	$from = $actor->phone;
	$name = $actor->name;
	$message = 'Scattered around the stage are papers.  When an audience member shouts "Show me ____" it is your job to find the image and deliver it to them ASAP.';
	$CI->twilio->sms($tN, $from, $message);
    }

    function google_search(){
	$CI = &get_instance();
	$tN = 7323911692;
	$shouterArray = $CI->isolation_model->getInfoArray('googlers');
	$currentStage = $CI->session->userdata('stage');
	$counter = $currentStage - 3;
	$shouter = $shouterArray[$counter];
	$to = $shouter->phone;
	$result = "";	

	switch($currentStage){
	    case 3:
		$result = "show me cats";  
	        break;
	    case 4:
		$result = "show me Michael Jackson";  
	        break;
	    case 5:
		$result = "show me The Slapchop";  
	        break;
	    case 6:
		$result = "show me Bowflex";  
	        break;
	    case 7:
		$result = "show me Hamburgers and French Fries";  
	        break;
	    case 8:
		$result = "show me a Corinthian Column";  
	        break;
	    case 9:
		$result = "show me Stalagtites";  
	        break;
	    case 10:
		$result = "show me CATS! CATS! CATS!";  
	        break;
	    case 11:
		$result = "SHOW ME BOOBS!!!";  
	        break;
	    case 12:
		$result = "show me What the fox says!";  
	        break;
	    case 13:
		$result = "show me the Pythagorian Theorem";  
	        break;
	    case 14:
		$result = "show me XKCD";  
	        break;
	    case 15:
		$result = "show me a Doric Column";  
	        break;
	    case 16:
		$result = "show me Porn";  
	        break;
	    case 17:
		$result = "show me Charles Bliss";  
	        break;
	    case 18:
		$result = "show me Brangelina";  
	        break;
	    case 19:
		$result = "show me Why do I have Acne.";  
	        break;
	    case 20:
		$result = "show me TITIES!!!";  
	        break;
	    case 21:
		$result = "show me Having feelings for your cousin";  
	        break;
	    case 22:
		$result = "show me Gmail";  
	        break;
	    case 23:
		$result = "show me Pizzas with untroditional toppings.";
	        break;
	    case 24:
		$result = "show me Ancient roman dick paintings";
	        break;
	    default:
		$result = "show me cats";
		break;
	}
	$message = "Shout \"". $result."\"";
	$CI->twilio->sms($tN, $to, $message);
    }


