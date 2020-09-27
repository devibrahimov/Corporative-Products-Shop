<?php $this->load->view('admin/partials/header');?>

<link rel="stylesheet" href="<?=base_url('assets/admin/dropzone/');?>dropzone.css">
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->
<?php $id=$this->uri->segment(3); ?>
    <!-- Info boxes -->
    <div class="row">


      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="box box-solid">
          <div class="box-body">

          <form action="<?=site_url('ProductTransaction/Product_update/').$id?>" method="post" autocomplete="off" enctype="multipart/form-data">

              <div class=" row form-group">
              <div class="col-md-8 col-sm-12 col-xs-12"> 
                <label for="">Product name</label>
                <input type="text" name="title" class="form-control" value="<?= $product->title?>"> 
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <label>Category</label>
                <select name="category" class="form-control" id="categoryProduct">

                <?php if($product->subcategory==0):?>
                <option  value="<?=$product->category?>" ><?=$secilmish_parentcategory[$product->category]?></option>
                <?php endif;?>
                <option  value="<?=$product->category?>" ><?=$secilmish_category[$product->subcategory]?></option>
                  <?php foreach ($categories as $row): ?>
                  <option value="<?=$row->id?>"><?=$row->name?></option>
                  <?php endforeach; ?>

                  <?php foreach ($pCategory as $row): ?>
                  <option value="<?=$row->id?>parent"><?=$row->name?></option>
                  <?php endforeach; ?>
                </select>
              </div>
           
              </div>


              <!-- <div class="form-group">
                <label>Sub Category</label>
                <select name="subcategory" class="form-control" id="subcategory">
                  <option value="<?=$product->subcategory?>" ><?=$subcategory[$product->subcategory]?></option>
                </select>
              </div> -->
              <!-- <div id="demo" class="display">
                  <table class="display">...</table>
              </div> -->
           
              <!-- <div class="row form-group">
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <label class="text-info">Options</label>
                  <select name="options" class="form-control" id="options">

                    <?php foreach($options as $option):?>
                    <option  value="<?=$option->option_id?>">  <?=$option->option_id?>  </option>
                  <?php endforeach;?>
                  </select>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12">

                <div class="form-group box box-solid">
                  <div class="box-body" name="suboption" id="suboption" >

                </div>
                </div>
                </div>
              </div> -->


              <!--  <div class="row form-group">
                <div class="col-md-3 col-sm-12 col-xs-12">
                 <label class="text-info">Options 2</label>
                  <select  name="options2" class="form-control" id="options2">

                    <?php foreach($options as $option):?>
                    <option  value="<?=$option->option_id?>">  <?=$option->option_id?>  </option>
                    <?php endforeach;?>
                  </select>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12">

                <div class="form-group box box-solid">
                  <div class="box-body" name="suboption2" id="suboption2" >

                </div>
                </div>
                </div>
              </div>-->




              <div class="row form-group">
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <label for="">Qiyməti</label>
                  <input type="number" step="0.01"required name="price" class="form-control" value="<?= $product->price?>" >
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <label for="">Endirimli Qiyməti</label>
                  <input type="number" step="0.01" name="discount" class="form-control" value="<?= $product->discount?>">
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <label for="stock">Stock Sayı</label>
                  <input type="number" step="0.01" name="stock" class="form-control" value="<?= $product->stock?>" >
                </div>
              </div>
              
              <hr>

                  <div class="form-group">
                    <div class="box-body pad">
                      <label for="description">Description</label>
                    <textarea id="editor1"required name="description" rows="10" cols="80">
                      <?= $product->description?>
                    </textarea>

                </div>
                </div>

                  <div class="form-group">
                      <label for="description">Detail</label>
                          <textarea id="editor2"required name="detail" rows="10" cols="80">
                            <?= $product->detail?>
                          </textarea>


                </div>

              <!-- <div class="form-group">
                <label for="">Product tag </label>
                <input type="text" name="tag" class="form-control " >
              </div> -->
              <button type="submit" class="btn btn-success"   >Yenilə</button>
          </form>

        <!-- /.info-box -->
          </div>
            </div>
      </div>
<div class="col-md-4 col-sm-12 col-xs-12">
  <!-- <a href="<?=site_url('admin/addProductStep2/').$id?>" class="btn btn-success btn-block"> <i class="fa fa-upload"> </i><b> Yeni Rəsim Yüklə</b></a> -->
  <form action="<?=site_url('admin/addProductimg/').$this->uri->segment(3)?>" method="post" class="dropzone" enctype="multipart/form-data">
  </form><br>
  <button type="button"class="btn btn-danger" id="get-all">Yüklənən Şəkilləri  Aşağıda Göstər</button>
<br><hr>
  <div class="row " id="img_list">
    <?php   foreach ($images as $img): ?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">


        <img src="<?=base_url('assets/uploads/products/').$img->img?>" >
        <div class="caption">


            <?php if($img->master==0){?>
                <button  class="btn btn-danger delete_img" data-id="<?=$img->id?>"><i class="fa fa-trash"> </i>  </button>
            <a href="<?=site_url('ProductTransaction/up_master_product_img/').$id.'/'.$img->id?>" class="btn btn-info master_img"  ><i class="fa fa-image"> </i>  </a>
            <?php }?>
            <?php if($img->master==1){?>
     
             <strong><i class="fa fa-image"></i>  Əsas Şəkil </strong><br />
             <!-- <button  class="btn btn-danger delete_img" data-id="<?=$img->id?>"><i class="fa fa-trash"> </i>  </button>  -->
            <?php }?>

        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>

    </div>
    <!-- /.row -->


<?php $this->load->view('admin/partials/footer');?>
<!-- CK Editor -->
<script src="<?=base_url('assets/admin/');?>bower_components/ckeditor/ckeditor.js"></script>
<script src="<?=base_url('assets/admin/dropzone/');?>dropzone.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  $('#get-all').click(function(){
    var id = <?=$this->uri->segment(3)?>;
    //alert(id);
    $.ajax({
        type:"POST",
        url:'<?=site_url('ProductTransaction/get_imglist_addProductimg_page')?>',
        data:{"id":id},
        success:function(e){
          $('#img_list').html(e);
        }
    });
  });
    $('#categoryProduct').change(function(){
        var category_id =$(this).val();
         $.ajax({
              type:"POST",
              url:'<?=site_url('Admin/ajax_category')?>',
              data:{"category_id":category_id},
              success:function(e){
                  $('#subcategory').html(e);
              }
         });
    });

  // $('#suboption').hide();
  //   $('#options').change(function(){
  //       var options_id =$(this).val();
  //        $.ajax({
  //             type:"POST",
  //             url:'<?=site_url('Admin/ajax_option')?>',
  //             data:{"option_id":options_id},
  //             success:function(e){
  //                 $('#suboption').show();
  //                 $('#suboption').html(e);
  //             }
  //        });
  //   });

  // $('#suboption2').hide();
  //   $('#options2').change(function(){
  //       var options_id =$(this).val();
  //        $.ajax({
  //             type:"POST",
  //             url:'<?=site_url('Admin/ajax_option2')?>',
  //             data:{"option_id":options_id},
  //             success:function(e){
  //                 $('#suboption2').show();
  //                 $('#suboption2').html(e);
  //             }
  //        });
  //   });
});
//master img up
$(function(){
$('#img_list').on('click','.master_img',function(){
  var id = $(this).data('id');
  var buton = $(this);
  $.ajax({
      type:"POST",
      url:'<?=site_url('ProductTransaction/up_master_product_img/').$id.'/'?>'+id,
    success:function(){
          remove();
    }

  });
});
});
//delete img
$(function(){
$('#img_list').on('click','.delete_img',function(){
  var id = $(this).data('id');
  var buton = $(this);
  $.ajax({
      type:"POST",
      url:'<?=site_url('ProductTransaction/delete_product_img/')?>'+id,
    success:function(){
        buton.parent().parent().remove();
    }

  });
});
});

// CKEDITOR
$(function () {
   // Replace the <textarea id="editor1"> with a CKEditor
   // instance, using default configuration.
   CKEDITOR.replace('editor1')
   //bootstrap WYSIHTML5 - text editor
   $('.textarea').wysihtml5()
 })

 $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
