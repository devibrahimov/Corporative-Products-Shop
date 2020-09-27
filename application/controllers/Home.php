<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//DataBase connect

			$this->load->model('Category_model');

	}


/**
 * 	ключ- açar- kilid- kilit -zamok-
 *  считыватель отпечатков пальцев - barmaq izi oxuyucu-отпечаток пальца-barmaq izi
 * -читатель лица-üz oxuyucu-qıfıl- smart lock -ağıllı sistem-ağıllı açar-qapı-qapı açarı-silndr-alarm-siqnalzasiya-seyf-kassa-
 * asma kilid-asma kilit-acar
 */
	
 	public function index()
	{		$this->load->model('Products_Model');
			$Viewdata['title'] = 'Ana Səhifə - zkteco.az';
			$Viewdata['meta_description'] = 'zkteco dünyanın ən böyük "ağıllı" kilidləmə və təhlükəsizlik həlləri sistemi olaraq keyfiyyətli və etibarlı məhsulları ilə müştərilərinin həyatına güvənlik və rahatlıq gətirməkdədir.';
			$Viewdata['products_image']= $this->Products_Model->get_product_image();
			$Viewdata['product_subcategory']=$this->Products_Model->get_subCategoryname();
			$Viewdata['product_category']=$this->Products_Model->get_productCategory();
			$Viewdata['category_slug']=$this->Products_Model->get_category_slug();
			$Viewdata['new'] = count($this->db->where('open',0)->get('usermessage')->result_array() );
			$Viewdata['lastproducts'] = $this->db->order_by('id','DESC')->limit('9')->get('products')->result_array() ; 
			$Viewdata['products'] = $this->db->order_by('id','RANDOM')->limit('8')->get('products')->result_array() ; 
			$this->load->view('site/home', $Viewdata);
			
	}

	

//bbura controllerdi <---
	public function testCategory(){
	$Parrent_category=	$this->Category_model->Parrent_category();
	foreach ($Parrent_category as $value) {
	 $Category = [$value['id']=>$value['name']];
	 echo "<br>";
	 print_r($Category);


				 $Child_category =	$this->Category_model->Child_category( $value['id']);
				 foreach ($Child_category as $row) {
				 //	$Parrent_id = $row['topCategory'];

				 	$submenu=[ $row['topCategory']=> $row['name'] ];
					echo "<br> ____";
				 	print_r($submenu);
				 }


}//end fist foreach

	//$this->load->view('site/home',$Viewdata);
}//end Category



	function ajax_category(){
		$category_id=$_POST['category_id'];
		$categories = $this->Category_model->ajax_category($category_id);
		foreach($categories as $category):?>
		 <li><a href="#"><?=$category->name?></a></li>
		 <?php endforeach;
	}
}
