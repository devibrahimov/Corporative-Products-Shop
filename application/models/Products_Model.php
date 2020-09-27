<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products_Model extends CI_Model{

    public function get_products(){
		return  $this
		->db
		->order_by('id','DESC')
		->limit(9)
		->get('products')->result_array();

		}
		
			public function get_category_products($cat_id){
			return  $this->db->where('category',$cat_id)->get('products')->result_array();
	
			}
			public function get_subcategory_products($cat_id){
				return  $this->db->where('subcategory',$cat_id)->get('products')->result_array();
		
				}

				public function get_parentcat_products($cat_id){
					return  $this->db->where('category',$cat_id)->get('products')->result_array();
			
					} 


		public function get_product_image(){
			$res =  $this
			->db
			->where('master',1)
			->get('product_images')
			->result_array();

			foreach ($res as $k) {
				$l[ $k['product_id'] ] = $k['img'] ;
			}

			return isset($l) ? $l :[] ;
			}

		
	public function get_productCategory(){
		$result = $this->db->get('parrentcategory')->result_array();
		foreach($result as $row)
		$p[ $row['id'] ] = $row['name'];
		return isset($p) ? $p : [] ;
		}//end get_parrentCategory

		public function get_subCategoryname(){
			$result = $this->db->get('category')->result_array();
			foreach($result as $row)
			$p[ $row['id'] ] = $row['name'];
			return isset($p) ? $p : [] ;
			}//end get_parrentCategory

			
		public function get_category_slug(){
			$result = $this->db->get('parrentcategory')->result_array();
			foreach($result as $row)
			$p[ $row['id'] ] = $row['slug'];
		

			return isset($p) ? $p : [] ;
				}//end get_category_slug



				// //////////////////////////////////
				//  Product detail
				////////////////////////////////////
				
				public function get_product($id){
				return $this
					->db
					->where('id',$id)
					->get('products')
					->row();
				}

		
				public function get_product_imgs($id){
					return $this
						->db
						->where('product_id',$id)
						->get('product_images')
						->result_array();
					}
	
	



}
