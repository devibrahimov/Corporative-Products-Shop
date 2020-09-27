<?php
//inputdan gelen deyeri almaq ucun isdifade edilecek function;
 function get_post($name){
   $ci = get_instance();
   return $ci->input->post($name,true);
 }

 function postvalue($name){
   $ci = get_instance();
   return $ci->input->post($name,true);
 }

function isPost(){
  if($_SERVER['REQUEST_METHOD']=="POST"){return true;}
}

 function  image_uploads($path,$name){
    $ci = get_instance();
    $config['upload_path']   = 'assets/uploads/'.$path.'/';
    $config['allowed_types'] = 'jpeg|jpg|png';

   $ci->upload->initialize($config);
   if($ci->upload->do_upload($name)){
     $image=$ci->upload->data();
     return $image['file_name'];
      //$config['upload_path'].
   }
   return null;
 }//image uploads


function flash($type,$icon,$title){
  $ci= get_instance();
  $message= '<div class="alert alert-'.$type.' alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-'.$icon.'"></i>'.$title.'</h4></div>';
 $ci->session->set_flashdata('flashmessage',$message);
}
function flashread(){
  $ci = get_instance();
  echo $ci->session->flashdata('flashmessage');
}


function back(){
  return redirect($_SERVER['HTTP_REFERER']);
}

function seflink($text){
	$find = array("/Ğ/","/Ü/","/Ş/","/İ/","/Ö/","/Ç/","/Ə/","/ğ/","/ü/","/ş/","/ı/","/ö/","/ç/","/ə/");
	$degis = array("G","U","S","I","O","C","E","g","u","s","i","o","c","e");
	$text = preg_replace("/[^0-9a-zA-ZÄzÜŞİÖÇƏğüşıöçə]/"," ",$text);
	$text = preg_replace($find,$degis,$text);
	$text = preg_replace("/ +/"," ",$text);
	$text = preg_replace("/ /","-",$text);
	$text = preg_replace("/\s/","",$text);
	$text = strtolower($text);
	$text = preg_replace("/^-/","",$text);
	$text = preg_replace("/-$/","",$text);
	return $text;
}
 ?>
