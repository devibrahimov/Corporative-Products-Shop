<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{
  public function __construct()
	{
		parent::__construct(); 
		


	}

 
	public function index()
	{			
       
			$Viewdata['title'] = 'Bizimlə Əlaqə - zkteco.az';
			$Viewdata['meta_description'] = 'zkteco.az - Şirkət haqqında 1998-ci ilin martında qurulan ZKTeco hibrid biometrik identifikasiya texnologiyasında ixtisaslaşan qlobal istehsal şirkətidir. ';
			 
		$this->load->view('site/contact',$Viewdata);
	}


public function send(){

     $name =    postvalue('first_name');
     $surname = postvalue('last_name');
     $email =   postvalue('email_address');
     $phone =   postvalue('phone_number');
     $message = postvalue('message');

     $data =array(
      'name' => $name,
      'surname' => $surname,
      'email' => $email,
      'phone' => $phone,
      'message' => $message );

      $message = $this->db->insert('usermessage',$data);
      
      if(!$message){
       return function(){
         back();
         echo " Mesajınız göndərilə bilmədi ";};
      }
      back();
      echo " Mesajınız göndərildi ";
    }
        
     






} ?>
