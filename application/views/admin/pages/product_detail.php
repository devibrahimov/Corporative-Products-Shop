<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->
<?php $id=$this->uri->segment(3); ?>
<style media="screen">
.bs-wizard {margin-top: 40px;}

/*Form Wizard*/
.bs-wizard {border-bottom: solid 1px #e0e0e0; padding: 0 0 10px 0;}
.bs-wizard > .bs-wizard-step {padding: 0; position: relative;}
.bs-wizard > .bs-wizard-step + .bs-wizard-step {}
.bs-wizard > .bs-wizard-step .bs-wizard-stepnum {color: #595959; font-size: 16px; margin-bottom: 5px;}
.bs-wizard > .bs-wizard-step .bs-wizard-info {color: #999; font-size: 14px;}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot {position: absolute; width: 30px; height: 30px; display: block; background: #fbe8aa; top: 45px; left: 50%; margin-top: -15px; margin-left: -15px; border-radius: 50%;}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {content: ' '; width: 14px; height: 14px; background: #fbbd19; border-radius: 50px; position: absolute; top: 8px; left: 8px; }
.bs-wizard > .bs-wizard-step > .progress {position: relative; border-radius: 0px; height: 8px; box-shadow: none; margin: 20px 0;}
.bs-wizard > .bs-wizard-step > .progress > .progress-bar {width:0px; box-shadow: none; background: #fbe8aa;}
.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {width:100%;}
.bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {width:50%;}
.bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {width:0%;}
.bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {width: 100%;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {background-color: #f5f5f5;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {opacity: 0;}
.bs-wizard > .bs-wizard-step:first-child  > .progress {left: 50%; width: 50%;}
.bs-wizard > .bs-wizard-step:last-child  > .progress {width: 50%;}
.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{ pointer-events: none; }
/*END Form Wizard*/
</style>
    <!-- Info boxes -->
    <div class="row">
      <div class="container">


              <div class="row bs-wizard" style="border-bottom:0;">

                  <div class="col-xs-3 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">1-ci Mərhələ</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><b>Məhsul məlumatların girilməsi</b>.<br>Məhsul məlumatları uğurla Qeyd olundu </div>
                  </div>

                  <div class="col-xs-3 bs-wizard-step complete"><!-- active -->
                    <div class="text-center bs-wizard-stepnum">3-cü Mərhələ</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center">  Məhsula uyğun Şəkilləri yükləyin </div>
                  </div>

                  <div class="col-xs-3 bs-wizard-step complete"><!-- active -->
                    <div class="text-center bs-wizard-stepnum"><b>Girilən Məlumatların Təsdiqlənməsi</b> </div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center">  Tamamlanma </div>
                  </div>
              </div>





      </div>

      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="box box-solid">
          <div class="box-body">

           <h1 class="text-primary"><?=$product->title?></h1>
           <hr>
           <div class="row " id="img_list">
             <?php   foreach ($images as $img): ?>
             <div class="col-sm-6 col-md-2">
               <div class="thumbnail">
                 <img src="<?=base_url('assets/uploads/products/').$img->img?>" >

               </div>
             </div>
           <?php endforeach; ?>
           </div>
           <hr>
           <p>Kategoriya : </p>
          </div>
            </div>
      </div>


    </div>
    <!-- /.row -->


<?php $this->load->view('admin/partials/footer');?>
<!-- CK Editor -->
<script src="<?=base_url('assets/admin/');?>bower_components/ckeditor/ckeditor.js"></script>
<script type="text/javascript">

$(document).ready(function(){
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

  $('#suboption').hide();
    $('#options').change(function(){
        var options_id =$(this).val();
         $.ajax({
              type:"POST",
              url:'<?=site_url('Admin/ajax_option')?>',
              data:{"option_id":options_id},
              success:function(e){
                  $('#suboption').show();
                  $('#suboption').html(e);
              }
         });
    });

  $('#suboption2').hide();
    $('#options2').change(function(){
        var options_id =$(this).val();
         $.ajax({
              type:"POST",
              url:'<?=site_url('Admin/ajax_option2')?>',
              data:{"option_id":options_id},
              success:function(e){
                  $('#suboption2').show();
                  $('#suboption2').html(e);
              }
         });
    });
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
