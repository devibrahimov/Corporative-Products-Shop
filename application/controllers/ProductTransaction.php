<?php
class ProductTransaction extends MY_Controller {
 
    public function __construct()
    {
      parent:: __construct();
      //DataBase connect

      $this->load->model('DataBase');
      $this->load->model('Category_model');

      if(!$this->session->userdata('admin')){
          redirect('login');
      }
    }

    public function index()
    {
        $head['navigation'] = 'Ana Səhifə';//breakbeard
        $head['type'] ='Home';//for menu active

        $this->load->view('admin/home',$head);
    }

    
 public function product_edit($id){
    $head['navigation'] = 'Product Editləmə';//breakbeard
    $head['type'] ='Products';//for menu active
    $head['images'] = $this->db->where('product_id',$id)->get('product_images')->result();
    $head['product'] = $this->db->where('id',$id)->get('products')->row();
    $head['categories'] = $this->DataBase->get_data('category');
  
   // $head['options'] = $this->DataBase->get_product_options($id);
  
    $head['secilmish_category'] = $this->DataBase->get_sub_name_Category();
    $head['secilmish_parentcategory'] = $this->DataBase->get_parrentCategory();
    $head['subcategory'] = $this->DataBase->get_category();
    //$head['suboptions'] = $this->DataBase->get_data('suboptions');
    $head['pCategory'] = $this->DataBase->get_data('parrentcategory');
    $this->load->view('admin/pages/edit_Product',$head);
  }
 
  public function product_detail($id){
    $head['navigation'] = 'Product end';//breakbeard
    $head['type'] =' newProducts';//for menu active
    $head['product'] = $this->db->where('id',$id)->get('products')->row();
    $head['images'] = $this->db->where('product_id',$id)->get('product_images')->result();
 //   $head['options'] = $this->DataBase->get_product_options($id);
 
    $head['subcategory'] = $this->DataBase->get_category();
    $head['pCategory'] = $this->DataBase->get_data('parrentcategory');
    $this->load->view('admin/pages/product_detail',$head);
  }
 
 
 //product_delete
  public function product_delete($id){
 
     $del = $this->DataBase->delete_product($id);

     if(!$del){
       flash('danger','fail','Məhsul silmə əməliyyatı uğursuz oldu');
 
     }
     flash('success','check','Məhsul silmə əməliyyatı uğurla həyata keçirildi');
        redirect('admin/Products');
  }
 




 public function delete_product_img($id){
   //$id = $_POST['id'];
 
    $image = $this->db->where('id',$id)->get('product_images')->row();
    if($image->master==1){   flash('danger','ban','Əsas Şəkil silinə bilməz."Əvvəlcə bu şəkili silmək istəyirsinizsə Əsas şəkili dəyişin."');back();}
    $img = FCPATH.'assets/uploads/products/'.$image->img;
    $delete_file = unlink($img);
    if(!$delete_file) {
      flash('danger','ban','Şəkil silmə əməliyyatı uğursuz oldu');
          // redirect('admin/Products');
    }
       $this->DataBase->delete_product_img($id);
       flash('success','check','Məhsul silmə əməliyyatı uğurla həyata keçirildi');
     //	 redirect('admin/Products');
 }
 
 
 public function up_master_product_img($product_id,$id){
  $this->db->trans_begin();
  $this->db->where('product_id',$product_id)->where('master',1)->set('master',0)->update('product_images');
  $this->db->where('product_id',$product_id)->where('id',$id)->set('master',1)->update('product_images');
 
 if ($this->db->trans_status() === FALSE) {   $this->db->trans_rollback(); }
 else {   $this->db->trans_commit(); }
      // redirect('ProductTransaction/product_edit/').$product_id;
 
    back();
      flash('success','check',' Əsas şəkil olaraq Seçildi');
 
 }
 public function get_imglist_addProductimg_page(){
   $id = $_POST['id'];
   $images = $this->db->where('product_id',$id)->get('product_images')->result();
   
   
   foreach ($images as $img){ ?>
   <div class="col-sm-4 col-md-4">
     <div class="thumbnail">
       <img src="<?=base_url('assets/uploads/products/').$img->img?>" alt="<?=$img->img?>">
       <div class="caption">
 
     <?php if($img->master==0){?>
           <button  class="btn btn-danger delete_img" data-id="<?=$img->id?>"><i class="fa fa-trash"> </i>  </button>
           
           <a href="<?=site_url('ProductTransaction/up_master_product_img/').$id.'/'.$img->id?>" class="btn btn-info master_img"  ><i class="fa fa-image"> </i>  </a>
           <?php }?>
           <?php if($img->master==1){?>
            <strong><i class="fa fa-image"></i>  Əsas Şəkil </strong>
           <?php } ?>
 
       </div>
     </div>
 
   </div>
           <?php  }
 
 }//get_imglist_addProduct_page
 
 
 //Product update
 public function Product_update($id){
  $pcat = $this->db->select('topcategory')->where('id',postvalue('category'))->get('category')->row_array(); 
  if(strstr( postvalue('category') , 'parent')){
    $category = trim( postvalue('category'),'parent');
    $data=[
      'title'=>postvalue('title'),
      'category'=>$category,
      'subcategory'=>'',
      'description'=>postvalue('description'),
      'detail'=>postvalue('detail'),
      'price'=>postvalue('price'),
      'stock'=>postvalue('stock'),
      'discount'=>postvalue('discount'),
      //'tag'=>postvalue('tag'),
      'seo'=>sefLink(postvalue('title')) ];
   //Product melumatlari bazaya yazmaq
   $this->DataBase->update_product_data($id,$data);
   back();
  }
   $data=[
     'title'=>postvalue('title'),
     'category'=>$pcat['topcategory'],
     'subcategory'=>postvalue('category'),
     'description'=>postvalue('description'),
     'detail'=>postvalue('detail'),
     'price'=>postvalue('price'),
     'stock'=>postvalue('stock'),
     'discount'=>postvalue('discount'),
     //'tag'=>postvalue('tag'),
     'seo'=>sefLink(postvalue('title')) ];
  //Product melumatlari bazaya yazmaq
  $this->DataBase->update_product_data($id,$data);
  back();
 }

}//end class ?>