<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'keys.php';

class App extends CI_Controller {
        function __construct()
	{
	    parent::__construct();
	    $this->load->library('session');	
	    $this->load->model('bs_model');

	}

	public function index()
	{
	    $this->load->view('bs/home');
	}
	public function authen()
	{
	require_once('twitteroauth/twitteroauth.php');
	//The TwitterOAuth instance
        $twitteroauth = new TwitterOAuth($consKey,$consSecret);
        //Requesting authentication tokens, the paramater is the URL we will be redirected to
        $request_token = $twitteroauth->getRequestToken('http://brotherscmu.com/app/tweet_submit');

        //Saving them into the session
        $this->session->set_userdata('oauth_token',$request_token['oauth_token']);
        $this->session->set_userdata('oauth_token_secret',$request_token['oauth_token_secret']);

         //If everything goes well..
        if($twitteroauth->http_code==200){
            //Let's generate the URL and redirect
            $url = $twitteroauth->getAuthorizeURL($request_token['oauth_token']);
            header('Location:'.$url);
        }else{
	        die('Something wrong happened');
        }
	}
	public function defines()
	{
	    $this->load->view('bs/bsheader');
	    $this->load->view('bs/defines');
	    $this->load->view('bs/bsfooter');
	}
		
	public function confines()
	{
	      $currentUser = $this->session->userdata('handle');
	      $twitterData = $this->bs_model->fetch_tweet($currentUser);
	      $others = $this->bs_model->fetch_all($currentUser);
	      $userdata = array(
			'picture' => $twitterData->picture,
			'message' => $twitterData->message,
			'others'  => $others
	      );
	      $this->load->view('bs/bsheader');
	      $this->load->view('bs/confines', $userdata);
	      $this->load->view('bs/bsfooter'); 
	}
	public function dispatch($handle)
	{
	    if($this->bs_model->has_submitted($handle)){
	      $this->session->set_userdata('handle',$handle);
	?><script>window.location.replace('http://brotherscmu.com/app/confines/<? echo $handle ?>'); </script><?	
	    }else{
	?><script>window.location.replace('http://brotherscmu.com/app/defines'); </script><?	
	    }
	
	}
        public function tweet_submit()
	{
	require_once('twitteroauth/twitteroauth.php');
	$oauth_token = $this->session->userdata('oauth_token');
	$oauth_token_secret = $this->session->userdata('oauth_token_secret');
	$oauth_verifier = $this->input->get('oauth_verifier');
	if(!$oauth_token || !$oauth_token_secret || !$oauth_verifier){
	   header("Location: http://brotherscmu.com/authen");
	}
	else{
	    //TwitterOAuth instance, with two new parameters we got in twitter_login.php
 	    $twitteroauth = new TwitterOAuth($consKey,$consSecret,$oauth_token,$oauth_token_secret);
	    //request access token
	    $access_token = $twitteroauth->getAccessToken($this->input->get('oauth_verifier'));
	    //Save it in a session var
	    $this->session->set_userdata('access_token',$access_token);
	    //get the user's info
	    $user_info = $twitteroauth->get('account/verify_credentials');
	    //print user info
	    $picture = $user_info->profile_image_url;
	    $screen_name = $user_info->screen_name;
	    $message = $this->input->cookie('message');
	    $this->session->set_userdata('picture',$picture);
	    $this->session->set_userdata('verifier',$oauth_verifier);
	    $this->session->set_userdata('handle',$screen_name);
	    $status = $message." #WhatDefinesMe @BrothersCMU http://brotherscmu.com";
	    //$twitteroauth->post('statuses/update', array('status' =>$status));
            $this->bs_model->add_user($screen_name,$picture,$message);
	    ?><script>window.location.replace('http://brotherscmu.com/app/confines/<? echo $screen_name ?>'); </script> <?
	}
	}

}
