<?php

class Category_model extends CI_Model{

	public function get_parrent_categories(){
		$res = $this->db->order_by('id','ASC')->get('parrentcategory')->result_array();

		foreach( $res as $row )
			$l[$row['id']] = $row;
			
		return isset($l) ? $l : [];
		
	}

	public function get_child_categories($parent_ids)
	{
		$res = $this->db->where_in('topCategory',$parent_ids)
			->order_by('id','ASC')
			->get('category')
			->result_array();

		foreach( $res as $r )
			$l[ $r['topCategory'] ][] = $r;

		return isset($l) ? $l : [];
	}


	


		function get_category(){
		$result = $this->db->order_by('id','ASC')->get('category')->result();
		foreach($result as $row)
		$p[ $row->id ] = $row->name;
		return isset($p) ? $p : [] ;
		}// end get_category



// 	public  function getData(){
// 		return $this->db->get('categories')->result_array();
// ///
// // if (val[child]) func          bele htmlde de rekursiya lazimdi
//
// 		// tullana tullana )))  aye bir koda baxda
// 	}
  // public function getarray($db , $pid = 0 ){
	// 	$data  = []; // teze masi   //yuxarda funcsiya icinde gelenler  ,
	// 	// db  arraydi . databaseden gelen bosh array
	// 	foreach ($db as $key => $val){
	// 			if($val['parent_id'] == $pid ){
	// 									 $data[$key] = $val;
	// 									 $child = $this->getarray($db , $val['id']);
	// 									 if(!empty($child))  $data[$key]['childs'] = $child;
	// 			}
	//
	// 	}
	// 	return $data;
	// }
function Parrent_category(){
	return $this->db->get('parrentcategory')->result_array();
}
function Child_category($Parrent_id){
	return $this->db->where('topCategory',$Parrent_id)->get('category')->result_array();
}

		function get_options(){
		$result= $this->db->get('options')->result();
		foreach($result as $row)
		$p[ $row->id ] = $row->name;
		return isset($p) ? $p : [] ;
		} //end get_options

	function get_suboptions($option_id){
	return	$this
	->db
	->where('option_id',$option_id)
	->get('suboptions')
	->result();
	}



	// function get_suboption($table,$id){
	// 	return $this->db->where('option_id',$id)->get($table)->result() ;
	// }
	// function ajax_category($category_id){
	// 	return $this->db->where('topCategory',$category_id)->get('category')->result();
	// }
}
