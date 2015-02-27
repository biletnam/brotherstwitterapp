<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

    function illegal_download(){
	$CI = &get_instance();
	$tN = 7323911692;
	$bitt = $CI->isolation_model->getInfo('bitt');
	$to = $bitt->phone;
	$stage = $CI->session->userdata('stage');

	switch($stage){
	    case 12:
		$message = "Go on stage and find the stack of CDs";
		break;
	    case 13:
		$message = "You need to give out these discs to people in the audience.  You will recieve what's on each in order, at which point you must shop it around the audience.";
		break;
	    case 14:
		$message ="The first CD is Daft Punk's Random Access Memories.  Get it to the person who wants it most.";
		break;
	    case 16:
		$message ="The next CD is a bootleg of American Hustle.  Get it to the person who wants it most.";
		break;
	    case 18:
		$message ="The next CD is a copy of Far Cry 3 for PC.  Get it to the person who wants it most.";
		break;
	    case 20:
		$message ="The next CD is a snuff porno.  Get it to the person who wants it most.";
		break;
	    case 22:
		$message ="The next CD is the soundtrack for Frozen.  Get it to the person who wants it most.";
		break;
	    default:
		$message = "Dance like a monkey.";
	  }
	$CI->twilio->sms($tN, $to, $message);
    }
