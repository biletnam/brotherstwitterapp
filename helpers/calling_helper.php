<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

    function walk_dance(){
	$CI = &get_instance();
	$tN = 7323911692;
	$danceArray = $CI->isolation_model->getInfoArray('dance');
	foreach($danceArray as $party){	
	    $number = $party->phone;
	    $CI->twilio->sms($tN, $number, "Are you ready to party?  Get out on the stage and find your fellow partiers.");
	}
    }

    function dance_dance($client){	
	$tN = 7243201821;
	$CI = &get_instance();
	$danceArray = $CI->isolation_model->getInfoArray('dance');
	foreach($danceArray as $party){	
	  $number = $party->phone;
	try{
	    $call = $client->account->calls->create(
		$tN,
		$number,
		'http://kevinmkarol.com/audio/dance.mp3'

	    );
	        echo 'Started call:' . $call->sid;
	}catch(Exception $e){
	    echo 'Error: ' .$e->getMessage();
	}
}

    }

    function advertising_call($client){	
	$tN = 7243201821;
	$CI = &get_instance();
	$adArray = $CI->isolation_model->getInfoArray('advertisments');
	$stage = $CI->session->userdata('stage');
	
	switch($stage){
	    case 8:
		$number = $adArray[0]->phone;
		break;
	     case 9:
		$number = $adArray[1]->phone;
		break;
	    case 10:
		$number = $adArray[2]->phone;
		break;
	     case 11:
		$number = $adArray[3]->phone;
		break;
	     case 11:
		$number = $adArray[4]->phone;
		break;
	    case 12:
		$number = $adArray[5]->phone;
		break;
	     case 13:
		$number = $adArray[6]->phone;
		break;
	    case 14:
		$number = $adArray[7]->phone;
		break;
	     case 15:
		$number = $adArray[8]->phone;
		break;
	     case 16:
		$number = $adArray[9]->phone;
		break;
	}
	
	try{
	    $call = $client->account->calls->create(
		$tN,
		$number,
		'http://kevinmkarol.com/audio/advertise.mp3'

	    );
	        echo 'Started call:' . $call->sid;
	}catch(Exception $e){
	    echo 'Error: ' .$e->getMessage();
	}
    }

    function rick_roll($client){
	$CI = &get_instance();
	$rick = $CI->isolation_model->getInfo('rick');
	$tN = 7243201821;
	try{
	    $call = $client->account->calls->create(
		$tN,
		$rick->phone,
		'http://kevinmkarol.com/audio/rick.mp3'

	    );
	        echo 'Started call:' . $call->sid;
	}catch(Exception $e){
	    echo 'Error: ' .$e->getMessage();
	}
    }
    function rick_walk(){
	$CI = &get_instance();
	$tN = 7323911692;
	$rick = $CI->isolation_model->getInfo('rick');
    	$CI->twilio->sms($tN, $rick->phone, "You have an essential part in the piece.  Go get set all the way upstage.");
	}
