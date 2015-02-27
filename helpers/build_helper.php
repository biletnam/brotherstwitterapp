<?php if (! defined('BASEPATH')) exit('No direct script access allowed');


function buildSession($numberActors){
	     $CI = &get_instance();
	     #Assumes the audience is of a sufficient size
	     $audience = $CI->isolation_model->getAudience();
	     $actors = array_rand($audience, $numberActors);
		
	     #Set up all readers
	     $CI->isolation_model->insertPart('aaron', $audience[$actors[0]]->phone, $audience[$actors[0]]->name); 
	     $CI->isolation_model->insertPart('google_responder', $audience[$actors[1]]->phone, $audience[$actors[1]]->name); 
	     $CI->isolation_model->insertPart('SOPA', $audience[$actors[2]]->phone, $audience[$actors[2]]->name); 
	     $CI->isolation_model->insertPart('extremist', $audience[$actors[3]]->phone, $audience[$actors[3]]->name); 
	     $CI->isolation_model->insertPart('hacker', $audience[$actors[4]]->phone, $audience[$actors[4]]->name); 
	     $CI->isolation_model->insertPart('annonymous', $audience[$actors[5]]->phone, $audience[$actors[5]]->name); 
	     $CI->isolation_model->insertPart('snowden', $audience[$actors[6]]->phone, $audience[$actors[6]]->name); 
	     
	     $CI->isolation_model->insertPart('ref', $audience[$actors[7]]->phone, $audience[$actors[7]]->name); 
	     $CI->isolation_model->insertPart('player1', $audience[$actors[8]]->phone, $audience[$actors[8]]->name); 
	     $CI->isolation_model->insertPart('player2', $audience[$actors[9]]->phone, $audience[$actors[9]]->name); 

	     $CI->isolation_model->insertPart('rText', $audience[$actors[10]]->phone, $audience[$actors[10]]->name); 
	     $CI->isolation_model->insertPart('collegeMe', $audience[$actors[11]]->phone, $audience[$actors[11]]->name); 
	     $CI->isolation_model->insertPart('bText', $audience[$actors[12]]->phone, $audience[$actors[12]]->name); 
	     $CI->isolation_model->insertPart('hsMe', $audience[$actors[13]]->phone, $audience[$actors[13]]->name); 

	     $CI->isolation_model->insertPart('fb1', $audience[$actors[14]]->phone, $audience[$actors[14]]->name); 
	     $CI->isolation_model->insertPart('fb1f', $audience[$actors[15]]->phone, $audience[$actors[15]]->name); 
	     $CI->isolation_model->insertPart('fb2', $audience[$actors[16]]->phone, $audience[$actors[16]]->name); 
	     $CI->isolation_model->insertPart('fb2f', $audience[$actors[17]]->phone, $audience[$actors[17]]->name); 
	     $CI->isolation_model->insertPart('fb3', $audience[$actors[18]]->phone, $audience[$actors[18]]->name); 
	     $CI->isolation_model->insertPart('fb3f', $audience[$actors[19]]->phone, $audience[$actors[19]]->name); 

	     $CI->isolation_model->insertPart('fb4', $audience[$actors[20]]->phone, $audience[$actors[20]]->name); 
	     $CI->isolation_model->insertPart('fb4f', $audience[$actors[21]]->phone, $audience[$actors[21]]->name); 
	     $CI->isolation_model->insertPart('fb5', $audience[$actors[22]]->phone, $audience[$actors[22]]->name); 
	     $CI->isolation_model->insertPart('fb5f', $audience[$actors[23]]->phone, $audience[$actors[23]]->name); 

	     $CI->isolation_model->insertPart('comment1', $audience[$actors[24]]->phone, $audience[$actors[24]]->name); 
	     $CI->isolation_model->insertPart('comment2', $audience[$actors[25]]->phone, $audience[$actors[25]]->name); 
	     $CI->isolation_model->insertPart('comment3', $audience[$actors[26]]->phone, $audience[$actors[26]]->name); 
	     
	     $CI->isolation_model->insertPart('jed', $audience[$actors[27]]->phone, $audience[$actors[27]]->name); 
	     #Set up google requests
	     #change i to whatever hasn't been used yet
	     for($i = 28; $i < 50; $i++){
	         $CI->isolation_model->insertPart('googlers', $audience[$actors[$i]]->phone, $audience[$actors[$i]]->name); 
	     }
	     
	     #picks up wherever google leavs off for i
	     for($i = 28; $i < 38; $i++){
	        $CI->isolation_model->insertPart('tweeters', $audience[$actors[$i]]->phone, $audience[$actors[$i]]->name); 
	     }

	     #picks up wherever amazon left off
	     for($i = 30; $i < 44; $i++){
	        $CI->isolation_model->insertPart('amazonians', $audience[$actors[$i]]->phone, $audience[$actors[$i]]->name); 
	     }	    

	     $CI->isolation_model->insertPart('bitt', $audience[$actors[52]]->phone, $audience[$actors[52]]->name); 
	     for($i = 40; $i < 50; $i++){
	        $CI->isolation_model->insertPart('advertisments', $audience[$actors[$i]]->phone, $audience[$actors[$i]]->name); 
	     }	    
	     for($i = 45; $i < 50; $i++){
	        $CI->isolation_model->insertPart('dance', $audience[$actors[$i]]->phone, $audience[$actors[$i]]->name); 
	     }	    
	     
	     $CI->isolation_model->insertPart('rick', $audience[$actors[51]]->phone, $audience[$actors[51]]->name); 
	     	       
	     $CI->isolation_model->insert_count('fb1'); 
	     $CI->isolation_model->insert_count('fb2'); 
	     $CI->isolation_model->insert_count('fb3'); 
	     $CI->isolation_model->insert_count('fb4'); 
	     $CI->isolation_model->insert_count('fb5'); 
}		
