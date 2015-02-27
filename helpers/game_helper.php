<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

    function game_init(){
	$tN = 7323911692;
	$CI = &get_instance();
	$refArray =  $CI->isolation_model->getInfo('ref');
	$p1Array =  $CI->isolation_model->getInfo('player1');
	$p2Array =  $CI->isolation_model->getInfo('player2');
	
	$refPhone = $refArray->phone;
	$p1Phone = $p1Array->phone;
	$p2Phone = $p2Array->phone;

	$refName = $refArray->name;
	$p1Name = $p1Array->name;
	$p2Name = $p2Array->name;

	$refMsg = "Go onstage and find " . $p1Name . " and " . $p2Name. ".  Meet at the trashcan.";
	$p1Msg = "Go onstage and find " . $refName . " and " . $p2Name. ".  Meet at the trashcan.";
	$p2Msg = "Go onstage and find " . $p1Name . " and " . $refName. ".  Meet at the trashcan.";


	$CI->twilio->sms($tN, $refPhone, $refMsg);
	$CI->twilio->sms($tN, $p1Phone, $p1Msg);
	$CI->twilio->sms($tN, $p2Phone, $p2Msg);
    }
    function game_setup(){
	$tN = 7323911692;
	$CI = &get_instance();
	$refArray =  $CI->isolation_model->getInfo('ref');
	$p1Array =  $CI->isolation_model->getInfo('player1');
	$p2Array =  $CI->isolation_model->getInfo('player2');
	
	$refPhone = $refArray->phone;
	$p1Phone = $p1Array->phone;
	$p2Phone = $p2Array->phone;

	$p1Msg =  "You will be playing a game. You are player 1. Stand behind the tape line and try to get the ball in the basket the most times within the time limit.";
	$p2Msg =  "You will be playing a game. You are player 2. Stand behind the tape line and try to get the ball in the basket the most times within the time limit.";
	$refMsg = "You will be playing a game. You are the ref. Announce the score as each player makes baskets from behind their lines.  No feet over the line.";
	 
	$CI->twilio->sms($tN, $refPhone, $refMsg);
	$CI->twilio->sms($tN, $p1Phone, $p1Msg);
	$CI->twilio->sms($tN, $p2Phone, $p2Msg);

	$refMsg = "Texts will tell you when each round starts and stops. The player who wins the most rounds gets a prize. Make suer the players understand the rules.";
	$CI->twilio->sms($tN, $refPhone, $refMsg);
    } 
 

function game_start(){
	$tN = 7323911692;
	$CI = &get_instance();
	$refArray =  $CI->isolation_model->getInfo('ref');
	$refPhone = $refArray->phone;
	$refMsg = "shout START!";
	$CI->twilio->sms($tN, $refPhone, $refMsg);
    } 

function game_stop(){
	$tN = 7323911692;
	$CI = &get_instance();
	$refArray =  $CI->isolation_model->getInfo('ref');
	$refPhone = $refArray->phone;

	$refMsg = "shout STOP!  Figure out scores/who won and then get set up for the next round.";
	$CI->twilio->sms($tN, $refPhone, $refMsg);
}
