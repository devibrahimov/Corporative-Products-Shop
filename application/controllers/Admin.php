<?php
class Admin extends MY_Controller {

        public function __construct()
        {
          parent::__construct();
          //DataBase connect

          	$this->load->model('DataBase');
            	$this->load->model('Category_model');
            	$this->load->model('Products_Model');

            	 if(!$this->session->userdata('admin')){
            			 redirect('login');
            	 }
        }

        ##############################################
        #                 HOME PAGE                 #
        #############################################
				public function index()
				{
        
					  $viewdata['navigation'] = 'Ana Səhifə';//breakbeard
            $viewdata['type'] ='Home';//for menu active
            $viewdata['product_count'] = count( $this->db->get('products')->result_array() );
						$this->load->view('admin/home',$viewdata);
				}

        ##############################################
        #             Add Products PAGE             #
        #############################################

        function Products(){
            
            $viewdata['subcategories'] = $this->DataBase->get_category();
            $viewdata['parrentCategory'] = $this->DataBase->get_parrentCategory(); 
            // $viewdata['images'] = $this->db->where('product_id',$p->id)->where('master',1)->get('product_images')->row();  
            $viewdata['navigation'] = 'Products';//breakbeard
            $viewdata['type'] ='Products';//for menu active
            $viewdata['products'] = $this->DataBase->get_data('products');
            $viewdata['products_image']= $this->Products_Model->get_product_image();
            $this->load->view('admin/pages/Products',$viewdata);
        } 


        function addProduct(){
            $viewdata['categories'] = $this->DataBase->get_data('category');
            $viewdata['options'] = $this->DataBase->get_data('options');
            $viewdata['pCategory'] = $this->DataBase->get_data('parrentcategory');
            $viewdata['navigation'] = 'Add Product';//breakbeard
            $viewdata['type'] ='newProducts';//for menu active
            $this->load->view('admin/pages/addProduct',$viewdata);
        }




        public function messagesview()
        {
          $viewdata['navigation'] = 'Ziyarətçi Qeydləri';//breakbeard
          $viewdata['type'] ='messages';//for menu active
          $viewdata['messages'] = $this->db->get('usermessage')->result_array();
          $this->load->view('admin/pages/messages',$viewdata);
        }

        public function readmessage($id)
        { 
          $viewdata['navigation'] = 'Ziyarətçi Qeydləri - ';//breakbeard
          $viewdata['type'] ='messages';//for menu active
          $viewdata['msg'] = $this->db->where('id',$id)->get('usermessage')->row_array();
          $this->load->view('admin/pages/readmessages',$viewdata);
          if($viewdata['msg']['open'] == 0 ){
            $data = ['open'=>1];
            return $this->DataBase->update($id,'usermessage',$data);
          }

         
        }

        function ajax_category(){
          $category_id=$_POST['category_id'];
          $categories = $this->Category_model->ajax_category($category_id);
          foreach($categories as $category):?>
           <option  value="<?=$category->id?>"><?=$category->name?></option>
           <?php endforeach;
        }
        function ajax_option(){
          $option_id=$_POST['option_id'];
           $suboptions = $this->DataBase->get_suboptions($option_id);
            foreach($suboptions as $suboption):?>
          <div class="col-md-2 col-sm-4 col-xs-4"> <input type="checkbox" name="suboption1[]"    value="<?=$suboption->id?>">
            <?=$suboption->name?>&nbsp;</div>
          <?php endforeach;
        }
        function ajax_option2(){
          $option_id=$_POST['option_id'];
           $suboptions = $this->DataBase->get_suboptions($option_id);
            foreach($suboptions as $suboption):?>
          <div class="col-md-2 col-sm-4 col-xs-4"> <input type="checkbox" name="suboption2[]"     value="<?=$suboption->id?>">
            <?=$suboption->name?>&nbsp;</div>
          <?php endforeach;
        }

        function addProductStep1(){
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
            'discount'=>postvalue('discount'), 
            'seo'=>sefLink(postvalue('title')) ];
            $this->DataBase->insert_data('products',$data);
            //son yuklenen melumatin id-sini almaq
          $last_id = $this->db->insert_id(); 
        redirect('admin/addProductStep2/'.$last_id);
              }
              //end if 

            $data=[
                 'title'=>postvalue('title'),
                 'category'=>$pcat['topcategory'],
                 'subcategory'=>postvalue('category'), 
                 'description'=>postvalue('description'),
                 'detail'=>postvalue('detail'),
                 'price'=>postvalue('price'),
                 'discount'=>postvalue('discount'), 
                 'seo'=>sefLink(postvalue('title')) ];
                  
                //Product melumatlari bazaya yazmaq
                
                $this->DataBase->insert_data('products',$data);
                  //son yuklenen melumatin id-sini almaq
                $last_id = $this->db->insert_id();
 


             redirect('admin/addProductStep2/'.$last_id);
          

        }
        public function addProductStep2($last_id){
        //echo $last_id;
        $head['navigation'] = 'Add Product';//breakbeard
        $head['type'] ='Products';//for menu active

        $this->load->view('admin/pages/addProductimg',$head);
        }
        public function addProductimg($id){
          $product=$this->DataBase->get_data_row('products',$id);
          $config['upload_path']=FCPATH."assets/uploads/products/"; 
          $config['allowed_types']="jpg|jpeg|png";
          $config['file_name']=  $product->seo.'-'.$product->id;
          $this->load->library('upload');
          $this->upload->initialize($config);
          $upload=$this->upload->do_upload('file');
          if($upload){
            $data=array(
              'product_id'=>$id,
              'img' => $this->upload->data('file_name')
            );
            $this->DataBase->insert_data('product_images',$data);
          //  redirect('admin/addProductStep2/'.$last_id);
          }//end if
        }
        //AJAX LIST  IMG get_imglist_addProduct_page
        public function get_imglist_addProductimg_page(){
          $id = $_POST['id'];
          $images = $this->db->where('product_id',$id)->get('product_images')->result();
          foreach ($images as $img): ?>
          <div class="col-sm-4 col-md-2">
            <div class="thumbnail">
              <img src="<?=base_url('assets/uploads/products/').$img->img?>"  >  <span><?=$img->img?></span>
              <div class="caption"> 
                  <!-- <button type="button" class="btn btn-danger delete_img" data-id="<?=$img->id?>" >
                    <i class="fa fa-trash"> </i> Bu Şəkili SİL
                  </button> -->
                  <?php if($img->master==0){?>
                <button  class="btn btn-danger delete_img" data-id="<?=$img->id?>"><i class="fa fa-trash"> </i>  </button>
                <a href="<?=site_url('ProductTransaction/up_master_product_img/').$id.'/'.$img->id?>" class="btn btn-info master_img"  ><i class="fa fa-image"> </i>  </a>
                <?php }?>
                <?php if($img->master==1){?>
                  <button  class="btn btn-danger delete_img" data-id="<?=$img->id?>"><i class="fa fa-trash"> </i>  </button>
                <strong><i class="fa fa-image"></i>  Əsas Şəkil </strong>
                <?php }?>

              </div>
            </div>

          </div>
        <?php  endforeach;

      }//get_imglist_addProduct_page

        ##############################################
        #             SITE SETTING PAGE             #
        #############################################
        public function setting(){
            $head['row']= $this->DataBase->get_limit_1('site_config','1');

           $head['navigation'] = 'Setting';//breakbeard
           $head['type'] ='setting';//for menu active
          $this->load->view('admin/pages/config',$head);
        }
        ##############################################
        #           SITE productoptions PAGE        #
        #############################################
        public function productoptions(){
           $head['categories'] = $this->DataBase->get_data('options');
           $head['navigation'] = 'Product Options';//breakbeard
           $head['type'] ='productoptions';//for menu active
          $this->load->view('admin/pages/productoptions',$head);
        }
        //suboptions PAGE
        public function suboptions($id){
           $head['suboptions'] = $this->DataBase->get_suboption('suboptions',$id);
           $head['options'] = $this->DataBase->get_data_row('options',$id);
           //breadcramp
           $head['navigation'] = $head['options']->name.'Alt Seçənəklər';
           $head['type'] ='productoptions';//for menu active
          $this->load->view('admin/pages/suboptions',$head);
        }

        ##############################################
        #             SITE CATEGORIES PAGE          #
        #############################################
        public function categories($id){
           $viewdata['categories'] = $this->DataBase->get_category_data($id);
            $viewdata['Category'] = $this->DataBase->get_data_row('parrentcategory',$id);
            $viewdata['parrentCategory'] = $this->DataBase->get_parrentCategory();
           $viewdata['navigation'] = 'Categories';//breakbeard
           $viewdata['type'] ='parrentCategories';//for menu active
          $this->load->view('admin/pages/categories',$viewdata);
        }


        public function parrentCategories(){
          
           $viewdata['categories'] = $this->DataBase->get_data('parrentcategory');
           $viewdata['navigation'] = 'Parrent Categories';//breakbeard
           $viewdata['type'] ='parrentCategories';//for menu active
          $this->load->view('admin/pages/parrentCategories',$viewdata);
        }


        //ADD PARRENT CATEGORY NAME
        function addParrentCategory(){

          $parrentCategory=$this->input->post('category');
          if(!$this->input->post('check_subcategory')){
          $sub_category='0'; 
          }
           if($this->input->post('check_subcategory')){
            $sub_category='1'; 
            }

          $data = array(
            'name'        =>$parrentCategory,
            'slug'        =>sefLink($parrentCategory),
            'sub_category'=>$sub_category,
          );
          $this->DataBase->insert_data('parrentcategory',$data);
          flash('success','check','Kategoriya Uğurla Əlavə edildi');
          back();
        } 

        public function editParrentCategory($id){
          $viewdata['navigation'] = 'Parrent Categories';//breakbeard
          $viewdata['type'] ='parrentCategories';//for menu active 
          $viewdata['cat'] = $this->db->where('id',$id)->get('parrentcategory')->row(); 
          $this->load->view('admin/pages/editparrentcategories',$viewdata); 
        }
      
         public function updateparrentcategory($id){ 
          $parrentCategory=$this->input->post('category');
          if(!$this->input->post('check_subcategory')){
          $sub_category='0'; 
          }
           if($this->input->post('check_subcategory')){
            $sub_category='1'; 
            }

          $data = array(
            'name'        =>$parrentCategory,
            'slug'        =>sefLink($parrentCategory),
            'sub_category'=>$sub_category,
          );
        $this->DataBase->update($id,'parrentcategory',$data);
        flash('success','check','Kategoriya Uğurla Yeniləndi');
        redirect('admin/parrentCategories'); 
        }


    public function editsubCategory($id){
      $viewdata['navigation'] = 'Parrent Categories';//breakbeard
      $viewdata['type'] ='parrentCategories';//for menu active 
      
      $viewdata['parrentcats'] = $this->DataBase->get_data('parrentcategory'); 
      $viewdata['pcatname'] = $this->DataBase->get_parrentCategory(); 
      $viewdata['cat'] = $this->db->where('id',$id)->get('category')->row(); 
      $this->load->view('admin/pages/editsubcategories',$viewdata); 
    }
    
    public function updatesubcategory($id){ 
      $category=$this->input->post('category');
      $parrentCategory=$this->input->post('parentcategory');

      $data = array(
        'name'        =>$category,
        'topcategory' =>$parrentCategory,
        'slug'        =>sefLink($category)
      );
      $this->DataBase->update($id,'category',$data);
      flash('success','check','Kategoriya Uğurla Yeniləndi');
      redirect('admin/parrentCategories'); 
      }


      public function delparrentcategory($id){
      $products = $this->Products_Model->get_category_products($id);
      //print_r($products);
      if($products == NULL){
        $ok = $this->DataBase->delete($id,'parrentcategory');
         if($ok){
          flash('success','check','Kategoriya Uğurla Silindi');
          redirect('admin/parrentCategories');
         }
      }  
      foreach($products as $v) {
        $pid = $v['id'];
        $d=$this->DataBase->delete_product($pid);
        }
        if($d){
         $ok = $this->DataBase->delete($id,'parrentcategory');
         if($ok){
          flash('success','check','Kategoriya Uğurla Silindi');
          redirect('admin/parrentCategories');
         }
        }
         
      }

      public function delsubcategory($id){
        $products = $this->Products_Model->get_category_products($id);
        //print_r($products);
        if($products == NULL){
          $ok = $this->DataBase->delete($id,'category');
           if($ok){
            flash('success','check','Kategoriya Uğurla Silindi');
            redirect('admin/parrentCategories');
           }
        }  
        foreach($products as $v) {
          $pid = $v['id'];
          $d=$this->DataBase->delete_product($pid);
          }
          if($d){
           $ok = $this->DataBase->delete($id,'category');
           if($ok){
            flash('success','check','Kategoriya Uğurla Silindi');
            redirect('admin/parrentCategories');
           }
          }
           
        }
      


        //ADD CATEGORY NAME
        function addCategory(){
          $category   =$this->input->post('category');
          $topCategory =$this->input->post('topCategory');

          $data = array(
            'topCategory' =>$topCategory,
            'name'        =>$category,
            'slug'        =>sefLink($category),
          );
          $this->DataBase->insert_data('category',$data);
          flash('success','check','Kategoriya Uğurla Əlavə edildi');
          back();
        }

        //ADD Product Section NAME
        function addOptions(){
          $productsection   =$this->input->post('option');

          $data = array(
            'name'        =>$productsection,
            'slug'        =>sefLink($productsection),
          );
          $this->DataBase->insert_data('options',$data);
          flash('success','check','Kategoriya Uğurla Əlavə edildi');
          back();
        }
        
        //ADD Product Section NAME
        function addsubOptions(){
          $suboption=$this->input->post('suboption');
          $option_id=$this->input->post('option_id');
          $data = array(
            'option_id'   =>$option_id,
            'name'        =>$suboption,
          );
          $this->DataBase->insert_data('suboptions',$data);
          flash('success','check','Kategoriya Uğurla Əlavə edildi');
          back();
        }



        function get_post(){
          $row = $this->DataBase->get_limit_1('site_config','1');

          $data = [
            'name'=>get_post('name'),
            'adress'=> get_post('adres'),
            'email'=>get_post('email'),
            'info'=>get_post('info'),
            'facebook' =>get_post('facebook'),
            'instagram'=>get_post('instagram'),
          ];
          if($_FILES['logo']['size']>0){
            $data['logo']=image_uploads('site','logo');

            # Path and file name for delete
            $file = FCPATH."assets/uploads/site/".$row->logo;
            #delete file in directory
             unlink($file);

          }
          if($_FILES['icon']['size']>0){
            $data['icon']=image_uploads('site','icon');
            # Path and file name for delete
            $file = FCPATH."assets/uploads/site/".$row->icon;
            #delete file in directory
              unlink($file);
          }
          $this->DataBase->update('1','site_config',$data);
          flash('success','check','Məlumatlar uğurla dəyişdirildi');
          back();

        }





}//end CLASS
