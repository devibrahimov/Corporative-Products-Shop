<?php $this->load->view('admin/partials/header');?>
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
                    <div class="text-center bs-wizard-stepnum"><b>Məhsul məlumatların girin</b></div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"> Daha sonra Şəkil yükləmə mərhələsinə keçin  </div>
                  </div>

                  <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                    <div class="text-center bs-wizard-stepnum">2-ci Mərhələ</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"> <b>Şəkil yükləmə mərhələsi</b></div>
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

          <form action="<?=site_url('admin/addProductStep1');?>" method="post" autocomplete="off" enctype="multipart/form-data">
<div class="row">

              <div class="form-group col-md-8 col-sm-6 col-xs-12">
              <label for="">Product name</label>
                <input type="text" name="title" class="form-control" required>
              </div>


              <div class="form-group col-md-4 col-sm-6 col-xs-12">
              <label>Category</label>
                <select name="category" class="form-control" id="categoryProduct" required>
                    <option disable  >Kategoriya secin</option>
                  <?php foreach ($categories as $row): ?>
                  <option value="<?=$row->id?>"><?=$row->name?></option>
                  <?php endforeach; ?>

                  <?php foreach ($pCategory as $row): ?>
                  <option value="<?=$row->id?>parent"><?=$row->name?></option>
                  <?php endforeach; ?>
                </select>
              </div>

</div>
              
              <!-- <div id="demo" class="display">
                  <table class="display">...</table>
              </div> -->
              <!-- <div class="form-group">
               
              </div> -->
              <!-- <div class="row form-group">
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <label class="text-info">Options</label>
                  <select name="options" class="form-control" id="options">
                      <option  >Bir OPTION secin</option>
                    <?php foreach($options as $option):?>
                    <option  value="<?=$option->id?>">  <?=$option->name?>  </option>
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

<hr>
              <!-- <div class="row form-group">
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <label class="text-info">Options 2</label>
                  <select  name="options2" class="form-control" id="options2">
                      <option value="#">Bir OPTION secin</option>
                    <?php foreach($options as $option):?>
                    <option  value="<?=$option->id?>">  <?=$option->name?>  </option>
                    <?php endforeach;?>
                  </select>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12">

                <div class="form-group box box-solid">
                  <div class="box-body" name="suboption2" id="suboption2" >

                </div>
                </div>
                </div>
              </div> -->




              <div class="row form-group">
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <label for="price">Qiyməti</label>
                  <input type="number" step="0.01"  name="price" class="form-control"  >
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <label for="discount">Endirimli Qiyməti</label>
                  <input type="number" step="0.01" name="discount" class="form-control" >
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <label for="stock">Stock Sayı</label>
                  <input type="number" step="0.01" name="stock" class="form-control" >
                </div>
              </div>


                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <div class="box-body pad">
                      <label for="description">Description</label>
                    <textarea id="editor1"required name="description" rows="10" cols="80">

                    </textarea>

                  </div>
                </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label for="description">Detail</label>
                          <textarea id="editor2"required name="detail" rows="10" cols="80">

                          </textarea>

                  </div>
                </div>

              <!-- <div class="form-group">
                <label for="">Product tag </label>
                <input type="text" name="tag" class="form-control " >
              </div> -->
              <div class="row">
                <div class="col-md-10">

                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success"   value="1">İkinci Mərhələyə keç</button>
                </div>
              </div>

          </form>

        <!-- /.info-box -->
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
