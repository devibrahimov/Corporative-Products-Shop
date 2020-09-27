<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{
  public function __construct()
	{
		parent::__construct();
		 

	}

 
public function index()
	{		
			$Viewdata['title'] = 'Haqqımızda - zkteco.az';
			$Viewdata['meta_description'] = 'zkteco.az - Şirkət haqqında 1998-ci ilin martında qurulan ZKTeco hibrid biometrik identifikasiya texnologiyasında ixtisaslaşan qlobal istehsal şirkətidir.  ';
      
     
		$this->load->view('site/about',$Viewdata);
	}






} ?>
