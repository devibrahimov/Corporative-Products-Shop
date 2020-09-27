<?php

 class Login extends CI_Controller{


   function index(){

     	 $this->load->view('admin/Login');
       if($this->session->userdata('admin')){redirect('admin');}
   }



   function login_control(){
     $name  =  $this->input->post('name');
     $passwd =  $this->input->post('password');

     $this->load->model('DataBase');
     $result = $this->DataBase->data_control($name,md5($passwd) );

     if(!$result){
       $this->session->set_flashdata('error','<p class="text-danger "><i class="fa fas-danger"></i>Xetali ad veya password<p>') ;
       redirect('login');
     }
     //print_r($result);
     $exist=array(
       'id' => $result[0]->id,
       'name' => $result[0]->name,
       //'img' => $result[0]->img, 
     );
     $this->session->set_userdata(array(
       'admin' => $exist
     ));
     redirect('admin');
   }//login controller


   function logout(){
     $this->session->sess_destroy();
     redirect('login');
   }
 }

 ###########################################
 #               
 #    USERS      
 #               
 ###########################################

  // echo md5('zkteco.az.az-admin');die;