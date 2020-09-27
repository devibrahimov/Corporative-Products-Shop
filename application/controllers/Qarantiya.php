<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qarantiya extends CI_Controller{
  public function __construct()
	{
		parent::__construct();
		 

	}

 
public function index()
	{		
			$Viewdata['title'] = 'Qarantiya - Keso.az';
			$Viewdata['meta_description'] = 'Keso.az - 60 ildən artıq iş təcrübəsini innovativ həllərlə birləşdirən KESO brendi təhlükəsizlik sektorunda göstərdiyi fəaliyyətə görə dünyada nüfuzlu mükafatlara və sertifikatlara layiq görülmüşdür. ';
      
     
		$this->load->view('site/qarantiya',$Viewdata);
	}






} ?>
