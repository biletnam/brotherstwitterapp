<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
    
    function reader_swartz(){
	$CI = &get_instance();
	$tN = 7323911692;
	$reader = $CI->isolation_model->getInfo('aaron');
	$to = $reader->phone;
	
	$message = "There is a document labeled with a large 1.  Stand in the middle of the stage and read it aloud in a clear and forcefull manner.";
	$CI->twilio->sms($tN, $to, $message);
    }

    function reader_snowden(){
	$CI = &get_instance();
	$tN = 7323911692;
	$reader = $CI->isolation_model->getInfo('snowden');
	$to = $reader->phone;
	
	$message = "There is a document on stage labeled with a large 6.  Get it and find an open spot on stage.  Read it aloud in a clear and forcefull manner.";
	$CI->twilio->sms($tN, $to, $message);
    }
    function reader_facebook_init(){
	$CI = &get_instance();
	$tN = 7323911692;
	$reader1 = $CI->isolation_model->getInfo('comment1');
	$to1 = $reader1->phone;
	$reader2 = $CI->isolation_model->getInfo('comment2');
	$to2 = $reader2->phone;
	$reader3 = $CI->isolation_model->getInfo('comment3');
	$to3 = $reader2->phone;

	$message = "There is a document labeled with a large 7.  Tear off one of the pages with text and facing the other two who will do the same";
	$CI->twilio->sms($tN, $to1, $message);
	$CI->twilio->sms($tN, $to2, $message);
	$CI->twilio->sms($tN, $to3, $message);
    }
    function reader_facebook_explode(){
	$CI = &get_instance();
	$tN = 7323911692;
	$reader1 = $CI->isolation_model->getInfo('comment1');
	$to1 = $reader1->phone;
	$reader2 = $CI->isolation_model->getInfo('comment2');
	$to2 = $reader2->phone;
	$reader3 = $CI->isolation_model->getInfo('comment3');
	$to3 = $reader2->phone;

	$message = "Yell your text as loud as possible.  Try to drown out the other two.";
	$CI->twilio->sms($tN, $to1, $message);
	$CI->twilio->sms($tN, $to2, $message);
	$CI->twilio->sms($tN, $to3, $message);
    }

    function reader_SOPA(){
	$CI = &get_instance();
	$tN = 7323911692;
	$reader = $CI->isolation_model->getInfo('SOPA');
	$to = $reader->phone;
	
	$message = "There is a document on stage labeled with a large 2.  Get it and find an open spot on stage.  Read it aloud in a clear and forcefull manner.";
	$CI->twilio->sms($tN, $to, $message);
    }
    
    function reader_extremist(){
	$CI = &get_instance();
	$tN = 7323911692;
	$reader = $CI->isolation_model->getInfo('extremist');
	$to = $reader->phone;
	
	$message = "There is a document on stage labeled with a large 5.  Get it and find an open spot on stage.  Read it aloud in a clear and forcefull manner.";
	$CI->twilio->sms($tN, $to, $message);


    }

function reader_hacker(){
	$CI = &get_instance();
	$tN = 7323911692;
	$reader = $CI->isolation_model->getInfo('hacker');
	$to = $reader->phone;
	
	$message = "There is a document on stage labeled with a large 3.  Get it and find an open spot on stage.  Read it aloud in a clear and forcefull manner.";
	$CI->twilio->sms($tN, $to, $message);

} 

function reader_annonymous(){
	$CI = &get_instance();
	$tN = 7323911692;
	$reader = $CI->isolation_model->getInfo('annonymous');
	$to = $reader->phone;
	
	$message = "There is a document on stage labeled with a large 4.  Get it and find an open spot on stage.  Read it aloud in a clear and forcefull manner.";
	$CI->twilio->sms($tN, $to, $message);

} 
