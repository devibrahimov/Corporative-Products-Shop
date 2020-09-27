<?php $this->load->view('admin/partials/header');?>
<link rel="stylesheet" href="<?=base_url('assets/admin/dropzone/');?>dropzone.css">
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->
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
                    <div class="text-center bs-wizard-stepnum"><b>Şəkil yükləmə mərhələsi</b></div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center">  Məhsula uyğun Şəkilləri yükləyin </div>
                  </div>

                  <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                    <div class="text-center bs-wizard-stepnum">3-cü Mərhələ </div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"> <b>Tamamlanma</b></div>
                  </div>
              </div>





    </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="box box-solid">
          <div class="box-body">

          <form action="<?=site_url('admin/addProductimg/').$this->uri->segment(3)?>" method="post" class="dropzone" enctype="multipart/form-data">
          </form>

        <!-- /.info-box -->
          </div>

            </div>

      </div>

      <center class=" box-body">
        <button type="button"class="btn btn-info" id="get-all">Yüklənən Şəkilləri Düzəliş etmək üçün Aşağıda Göstər</button>
         <a href="<?=site_url('admin/products')?>" type="button"class="btn btn-success" >Yükləmə İşləmlərini tamamla</a>

      </center>

    </div>
    <!-- /.row -->
    <div class="row" id="img_list">

    </div>

<?php $this->load->view('admin/partials/footer');?>
<!-- CK Editor -->
<script src="<?=base_url('assets/admin/dropzone/');?>dropzone.js"></script>
<script type="text/javascript">
// myDropzone.on("complete", function(file) {
//   myDropzone.removeFile(file);
// });

//JQUERY AJAX get_img listng
$(document).ready(function(){
  $('#get-all').click(function(){
    var id = <?=$this->uri->segment(3)?>;
    //alert(id);
    $.ajax({
        type:"POST",
        url:'<?=site_url('admin/get_imglist_addProductimg_page')?>',
        data:{"id":id},
        success:function(e){
          $('#img_list').html(e);
        }
    });
  });
  //end ajax listing img_list


  //delete ajax img
  $('#delete_img').click(function(){
     var id = this.attr('id');
    alert(id);üe
  });
$(function(){
  $('#img_list').on('click','.delete_img',function(){
    var id = $(this).data('id');
    var buton = $(this);
    $.ajax({
        type:"POST",
        url:'<?=site_url('ProductTransaction/delete_product_img/')?>'+id,
      success:function(){
          buton.parent().parent().parent().remove();
      }

    });
  });
});


});//end jquery



  Dropzone.options.dropzoneForm = {

    // addRemoveLinks: true,
    // autoQueue:true


    // autoProcessQueue:false,
    // acceptedFiles:".jpg,.png,.jpeg",
    // init:function(){
    //   var submitButton =document.querySelector('#submit-all');
    //   myDropzone = this;
    //   submitButton.addEventListener("click",function(){
    //     myDropzone.processQueue();
    //   });
    //   this.on("complete",function(){
    //     if(this.getQueuedFiles().length ==0 && this.getUploadingFiles().length==0){
    //       var __this = this;
    //       __this.removeAllFiles();
    //     })
    //   })
    // },
  };




</script>
