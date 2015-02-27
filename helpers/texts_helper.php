<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

function text_init_one(){
	$CI =&get_instance();
	$tN = 7323911692;
	$rText = $CI->isolation_model->getInfo('rText');
	$collegeMe = $CI->isolation_model->getInfo('collegeMe');

	$rPhone = $rText->phone;
	$mePhone = $collegeMe->phone;

	$rName = $rText->name;
	$meName = $collegeMe->name;

	$rMessage = "Go to downstage right and find ". $meName;
	$meMessage = "Go to downstage right and find ". $rName;

	$CI->twilio->sms($tN, $rPhone,$rMessage);
	$CI->twilio->sms($tN, $mePhone, $meMessage);
}

function text_init_two(){
	$CI =&get_instance();
	$tN = 7323911692;
	$bText = $CI->isolation_model->getInfo('bText');
	$hsMe = $CI->isolation_model->getInfo('hsMe');

	$bPhone = $bText->phone;
	$mePhone = $hsMe->phone;

	$bName = $bText->name;
	$meName = $hsMe->name;

	$bMessage = "Go to stage left and find ". $meName;
	$meMessage = "Go to stage left and find ". $bName;

	$CI->twilio->sms($tN, $bPhone,$bMessage);
	$CI->twilio->sms($tN, $mePhone, $meMessage);
}

function conversation_one(){
	$CI =&get_instance();
	$tN = 7323911692;
	$stage = $CI->session->userdata('stage');
	$rText = $CI->isolation_model->getInfo('rText');
	$collegeMe = $CI->isolation_model->getInfo('collegeMe');
	
	$rPhone = $rText->phone;
	$mePhone = $collegeMe->phone;
	
	switch($stage){
	
	    case 11:
		$rMessage = "You will be reinacting a text conversation between two individulas.  Speak loudly and clearly.  You will always speak first.";
		$meMessage = "You will be reinacting a text conversation between two individulas.  Speak loudly and clearly.  You will always speak second.";

		$CI->twilio->sms($tN, $rPhone,$rMessage);
		$CI->twilio->sms($tN, $mePhone, $meMessage);

		$rMessage = "If you don't want to talk to me or aren't ready yet, you can just tell me.";
		$meMessage = "It's not that I don't want to talk, I just don't really have anything to say - you can feel free to text me.";
		break;

	    case 12:
		$rMessage = "...uh okay then.";
		$meMessage = "Idk what you want me to say.";
		break;
	    case 13:
		$rMessage = "I don't want you to say anything.  It's just weird.";
		$meMessage = "Yeah.";
	    case 19:
		$rMessage = "(1/2)So I decided something. And you can completely disagree with me of course, but I hate that bc I wasn't in the right emotional state keeps us from talking.";
	
		$meMessage = "(1/4)I don't have an answer-it's not like I'm consciously saying \"oh, she couldn't be in a relationship right now, so let me be a dick and not talk to her\"";
		
		$CI->twilio->sms($tN, $rPhone,$rMessage);
		$CI->twilio->sms($tN, $mePhone, $meMessage);
		
		$rMessage = "(2/2)And I know you're going to say that you said we still could, but you an I both know it was awkward when I did.  I miss talking to you.";
		$meMessage = "(2/4)When I see you around campus my heart still jumps a beat, whether it's walking across the cut or ath the presentation Tuesday.";
	
		break;
	     case 20:	
		$meMessage = "(3/4)my gut reaction is to run for fear I'll do or say something that will make me look like a fool since no matter what I do the situation remains the same.";
		$CI->twilio->sms($tN, $mePhone, $meMessage);

		$meMessage = "(4/4) I miss talking to you, but at least until on the gut level i'm not interested in you, I don't know how it would work as just friends. A no win scenario.";
		$rMessage ="Do you know why... One of my close family friends has terminal cancer.  I need to talk to someone.  I thought of you first.  What does that mean?";
		break;
	     case 22:
		$rMessage ="(Dialogue over: take a seat on the floor where you're standing)";
		$meMessage = "(Dialogue over: take a seat on the floor where you're standing)";

	}
	$CI->twilio->sms($tN, $rPhone,$rMessage);
	$CI->twilio->sms($tN, $mePhone, $meMessage);

}
function conversation_two(){
	$CI =&get_instance();
	$tN = 7323911692;
	$stage = $CI->session->userdata('stage');
	$bText = $CI->isolation_model->getInfo('bText');
	$hsMe = $CI->isolation_model->getInfo('hsMe');
	
	$bPhone = $bText->phone;
	$hsPhone = $hsMe->phone;
	
	switch($stage){
	
	    case 14:
		$bMessage = "You will be reinacting a text conversation between two individulas.  Speak loudly and clearly.  You will always speak first.";
		$meMessage = "You will be reinacting a text conversation between two individulas.  Speak loudly and clearly.  You will always speak second.";

		$CI->twilio->sms($tN, $bPhone,$bMessage);
		$CI->twilio->sms($tN, $hsPhone, $meMessage);

		$bMessage = "Heyy";
		$meMessage = "Hey.  What's up?";
		break;

	    case 15:
		$bMessage = "Nm.  We haven't talked since summer.  Well it's only been 2 weeks but you know what I mean.";
		$meMessage = "What do you want to talk about?";
		break;
	    case 16:
		$bMessage = "Oh nothing.     Just pointing out a fact.  Was just weird.";
		$meMessage = "Idk... I suppose if there's nothing you want to talk about then most of the time you just don't talk";
	    case 17:	
		$bMessage = "Well cant I just say hi and like how has school been?  Thet isn't like one thing I need to talk about.  We used to just talk";
		$meMessage = "Sometimes I have things to say.  Sometimes I don't.";
	
		break;
	     case 18:	
		$bMessage = "Bullshit.  You never shut up.  Don't mess with me.  Making me think I'm seeing things that aren't there.";
		$meMessage = "What do you want me to do?  Make up things to say just to make you feel like nothings changed?";
		break;
	     case 19:
		$bMessage = "(Dialogue over: take a seat on the floor where you're standing)";
		$meMessage = "(Dialogue over: take a seat on the floor where you're standing)";
	}
	$CI->twilio->sms($tN, $bPhone,$bMessage);
	$CI->twilio->sms($tN, $hsPhone, $meMessage);

}
