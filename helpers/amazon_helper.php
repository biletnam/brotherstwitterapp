<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

    function amazon_isReview($from){
	$tN = 7323911692;
	$CI = &get_instance();
	$reviewers = $CI->isolation_model->getInfoArray('amazonians');

	foreach($reviewers as $potential){
		if($from == $potential->phone){
		    return true;
		}
	}
	    return false;
    
     }

    function amazon_reviewInput($from,$body){
	$tN = 7323911692;
	$CI = &get_instance();
	$reviewers = $CI->isolation_model->getInfoArray('amazonians');
	$pastReviews = $CI->session->userdata('reviews');
	foreach($reviewers as $potential){
		if($from == $potential->phone){
		    $name = $potential->name;
		    $message = $name. " said Isolation: A collaborative Piece was ".$body;
		    $CI->isolation_model->log_reviews($message);
		    $CI->twilio->sms($tN,$from, "Thank you for your feedback");
		}
	} 
     }
    
     function amazon_solicit(){
	$tN = 7323911692;
	$CI = &get_instance();
	$reviewers = $CI->isolation_model->getInfoArray('amazonians');
	foreach($reviewers as $potential){
		$from = $potential->phone;
		$CI->twilio->sms($tN,$from, "What do you think of the show so far?  Respond in 100 characters or less.");
	}
      } 

