<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

    function friend_request($which){
	$CI = &get_instance();
	$tN = 7323911692;
	$stalker = $CI->isolation_model->getInfo($which);
	$to = $stalker->phone;
	$CI->load->library('session');	
	switch($which){
	    case "fb1":
		$stalked = $CI->isolation_model->getInfo('fb1f');
		$phase = $CI->isolation_model->counting('fb1');
		break;
	    case "fb2":
		$stalked = $CI->isolation_model->getInfo('fb2f');
		$phase = $CI->isolation_model->counting('fb2');
		break;
	    case "fb3":
		$stalked = $CI->isolation_model->getInfo('fb3f');
		$phase = $CI->isolation_model->counting('fb3');
		break;
	    case "fb4":
		$stalked = $CI->isolation_model->getInfo('fb4f');
		$phase = $CI->isolation_model->counting('fb4');
		break;
	    case "fb5":
		$stalked = $CI->isolation_model->getInfo('fb5f');
		$phase = $CI->isolation_model->counting('fb5');
		break;
	}
	$stalkedName = $stalked->name;	
	
	switch($phase){
	    case 0:
		$message = "Go to the middle of the stage.";
		break;
	    case 1:
		$message = "Call out ". $stalkedName."'s name and locate/go to them.";
		break;

	    case 2:
		$message ="Ask them if they'll be your friend.";
		break;
	    default:
		$message = "Go sit down";
	  }
	$CI->twilio->sms($tN, $to, $message);
    }
