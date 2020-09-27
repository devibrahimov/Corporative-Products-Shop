<?php

class DataBase extends CI_Model{


	function  data_control($name,$password){
		return $this->db
		->where(['name'=> $name,'password'=> $password])
		->get('admin')
		->result();
	}
 
 
	public function insert_data($table,$data=array()){
		return $this->db->insert($table,$data);
	}

	public function get_limit_1($table,$id){
		return $this->db
		->where('id',$id)
		->get($table)
		->row();
	}

	public function get_data($table){
		return $this->db->order_by('id','ASC')->get($table)->result();
	}


	public function delete_product($id){
		$images = $this->db->where('product_id',$id)->get('product_images')->result();
		foreach ($images as $row){
		$imgs = FCPATH.'assets/uploads/products/'.$row->img;
		unlink($imgs);
		}
		if ($imgs) {
			return $this->db->where('id', $id)->delete('products');
		}
		
	}


	public function delete_product_img($id){
			return $this->db->where('id', $id)->delete('product_images');
	}


	public function update_product_data($id,$data){
	return $this->db->where('id',$id)->update('products',$data);
}

	

		function get_parrentCategory(){
		$result= $this->db->get('parrentcategory')->result();
		foreach($result as $row)
		$p[ $row->id ] = $row->name;
		return isset($p) ? $p : [] ;
		}//end get_parrentCategory

		function get_sub_name_Category(){
			$result= $this->db->get('category')->result();
			foreach($result as $row)
			$p[ $row->id ] = $row->name;
			return isset($p) ? $p : [] ;
			}//end get_parrentCategory
	
		function get_category(){
		$result= $this->db->get('category')->result();
		foreach($result as $row)
		$p[ $row->id ] = $row->name;
		return isset($p) ? $p : [] ;
		}// end get_category

	public function get_category_data($id){
	return $this->db->where('topCategory',$id)->get('category')->result();
}




		function get_options(){
		$result= $this->db->get('options')->result();
		foreach($result as $row)
		$p[ $row->id ] = $row->name;
		return isset($p) ? $p : [] ;
		} //end get_options

	function get_suboptions($option_id){
	return	$this->db->where('option_id',$option_id)->get('suboptions')->result();
	}

///////////////////////////////////edit product get sub options and option
	// function get_product_options($id){
	// 	return $this->db->where('product_id',$id)->get('product_suboptions')->result();
	// }


	public function get_suboption($table,$id){
		return $this->db->where('option_id',$id)->get($table)->result() ;
	}
	public function get_data_row($table,$id){
		return $this->db->where('id',$id)->get($table)->row() ;
	}
	public function update($id,$table,$data){
		return $this->db
		->where('id',$id)
		->update($table,$data);
	}
	
	public function delete($id,$table){
		return $this->db->where('id', $id)->delete( $table );
	}
	// function ajax_category($category_id){
	// 	return $this->db->where('topCategory',$category_id)->get('category')->result();
	// }
function up_master_product_img($product_id,$img_id){
	return $this->db->trans_begin();

$this->db->where('product_id',$product_id)->where('master',1)->set('master',0)->update('product_images');
$this->db->where('product_id',$product_id)->where('id',$img_id)->set('master',1)->update('product_images');

if ($this->db->trans_status() === FALSE) {   $this->db->trans_rollback(); }
else {   $this->db->trans_commit(); }
}
}
