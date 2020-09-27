 

<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->

    <!-- Info boxes -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                    <a href="<?=site_url('admin/addProduct');?>" class="small-box-footer">
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <!-- <span> 'Məhsul Sayı'</span> -->
                    <h4>Add newProduct</h4>

                  <p><b><?php echo count($products);?></b></p>
                  </div>
                  <div class="icon">
                    <i class=" fa fa-plus"></i>
                  </div>

                </div>
                </a>
              </div>   <!--col-lg-3 col-xs-6-->

    </div> <!-- /.row -->
<div class="row">
  <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box box-primary">
           <div class="box-body">
             <table id="category" class="table table-bordered table-striped">
               <thead>
                 <tr>
                     <th width="">Product</th>
                     <th width="">Stock sayisi</th>  
                   <th width="">Məhsulun adı</th> 
                   <th width="">Kategoriyası</th>
                   <th width="">Alt Kategoriyası</th>
                   <th width="">Qiyməti</th> 
                   <th width="">Əməlyyatlar</th>
                 </tr>
               </thead>
               <tbody> 
 
                 <tr>
                   <?php foreach($products as $product):?>
                  
                   <td><img src="<?=base_url('assets/uploads/products/').$products_image[ $product->id ]?>" width="120px">  </td>
                   <td><?=$product->stock?></td>
                   <td><?=$product->title?></td>
                   <td><?=$parrentCategory[$product->category]?></td>
                   <td><?php if($product->subcategory==null){echo  '<p class="text-info">Alt Kategory teyin olunmayib</p>';} if($product->subcategory!==null){echo $subcategories[$product->subcategory];}?></td>
                   <td> <?php if ($product->discount!==null){echo '<del class="text-danger">'.'‎₼'.$product->price.'</del>'.'‎&nbsp;&nbsp;&nbsp;₼'. $product->discount;}?></td>

                   <td>  <a class="btn  btn-warning" href="<?=site_url('productTransaction/product_edit/').$product->id;?>"><i class="fa fa-edit"> Yenilə </i></a>
                        <a class="btn   btn-danger " href="<?=site_url('productTransaction/product_delete/').$product->id;?>"><i class="fa fa-trash"> Sil</i></a>
                        <!-- <a class="btn   btn-success " href="#"><i class=" ">Yayınla</i></a> -->
                        
                   </td>
                 </tr>
               <?php endforeach ;?>
               </tbody>
             </table>
           </div><!-- box-body -->
        </div><!-- box solid -->
  </div><!-- col-md-9 -->
</div>

<?php $this->load->view('admin/partials/footer');?>
