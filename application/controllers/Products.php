<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
  public function __construct()
	{
		parent::__construct();
		//DataBase connect

			$this->load->model('Category_model');
 
		 	$this->load->model('Products_Model');

	}

 
public function index()
	{		 
     		$Viewdata['parrentCategories'] = $this->Category_model->get_parrent_categories();
			$parent_ids = array_keys($Viewdata['parrentCategories']);
			$Viewdata['childCategories'] = $this->Category_model->get_child_categories($parent_ids); 

			$Viewdata['product_category']=$this->Products_Model->get_productCategory();
			
		 	$Viewdata['category_slug']=$this->Products_Model->get_category_slug();
			//print_r($Viewdata['category_slug']);die;
			$Viewdata['products'] = $this->Products_Model->get_products();

			$Viewdata['products_image']= $this->Products_Model->get_product_image();

			$cat='';
			foreach ($Viewdata['parrentCategories'] as $k) {  $cat =$cat.$k['name'].',';  	} 
		 
			$Viewdata['pagetype']  = 'category';
			$Viewdata['title'] = 'Məhsullar - zkteco.az'; 
			$Viewdata['meta_description'] = $cat.' - zkteco.az';

			$this->load->view('site/products',$Viewdata);
	}

	 




	public function Product_category($categorylink)
	{		
			
			$Viewdata['pagetype']  = 'category';
      		$Viewdata['parrentCategories'] = $this->Category_model->get_parrent_categories();
			 $parent_ids = array_keys($Viewdata['parrentCategories']);
			 $Viewdata['childCategories'] = $this->Category_model->get_child_categories($parent_ids); 

			$Viewdata['product_category']=$this->Products_Model->get_productCategory();
			$Viewdata['category_slug']=$this->Products_Model->get_category_slug();
			$link =  explode('-',$categorylink,2); 
			$Viewdata['products'] = $this->Products_Model->get_subcategory_products($link[0]);

			$Viewdata['products_image']= $this->Products_Model->get_product_image();
		
			$Viewdata['title'] = $categorylink.' - zkteco.az'; 
			$Viewdata['meta_description'] = $categorylink.'- Məhsullar - zkteco.az';

			$this->load->view('site/products',$Viewdata);
	}

	public function zkProduct_category($categorylink)
	{		
			
			$Viewdata['pagetype']  = 'category';
      		$Viewdata['parrentCategories'] = $this->Category_model->get_parrent_categories();
			 $parent_ids = array_keys($Viewdata['parrentCategories']);
			 $Viewdata['childCategories'] = $this->Category_model->get_child_categories($parent_ids); 

			$Viewdata['product_category']=$this->Products_Model->get_productCategory();
			$Viewdata['category_slug']=$this->Products_Model->get_category_slug();
			$link =  explode('-',$categorylink,2); 
			$Viewdata['products'] = $this->Products_Model->get_parentcat_products($link[0]);

			$Viewdata['products_image']= $this->Products_Model->get_product_image();
		
			$Viewdata['title'] = $categorylink.' - zkteco.az'; 
			$Viewdata['meta_description'] = $categorylink.'- Məhsullar - zkteco.az';

			$this->load->view('site/products',$Viewdata);
	}

		public function Product_detail($productlink){
		$link =  explode('-',$productlink,2); 
		
		$Viewdata['pagetype']  = 'category';
		 $Viewdata['parrentCategories'] = $this->Category_model->get_parrent_categories();
		 $Viewdata['product_category']=$this->Products_Model->get_productCategory();
		 $Viewdata['category_slug']=$this->Products_Model->get_category_slug();
		 $parent_ids = array_keys($Viewdata['parrentCategories']);
		 $Viewdata['childCategories'] = $this->Category_model->get_child_categories($parent_ids); 

		$Viewdata['product'] = $this->Products_Model->get_product($link[0]);
		$Viewdata['product_imgs'] = $this->Products_Model->get_product_imgs($link[0]);
		 
		$Viewdata['title'] = $productlink.' - zkteco.az'; 
		$Viewdata['meta_description'] = $productlink.'- Məhsullar - zkteco.az'; 

		$this->load->view('site/product_detail',$Viewdata);

	}


} ?>
