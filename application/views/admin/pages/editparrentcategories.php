<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->
<div class="row">

  <div class="col-lg-4 col-md-4 col-xs-6">
          <!-- small box -->
          <div class="box box-primary">
             <div class="box-header with-border">

            <form class="" action="<?=site_url('admin/updateparrentcategory/').$cat->id?>" method="post">
                  <label>Yeni Kategoria adı</label>
              <div class="form-group">
               
              <div class="input-group">
                    <span class="input-group-addon">
                      <input type="checkbox" name="check_subcategory" <?php if($cat->sub_category == 1){echo 'checked';}?> >
                    </span>
                    <input type="text" name="category" class="form-control" value="<?=$cat->name?>">
                  </div><!-- /input-group -->
                
                </div>
               
               <!-- <span style="background-color:black; padding:2px;color:red;" >DİQQƏT!</span> <span style="color:red;"> Alt kategoriyası elave olacaqsa çek edin</span> -->
                <!-- <br><br> -->
              <button type="submit" class=" btn btn-success">YAdda Saxla</button>
              </form>
  
          </div>
         </div>

        </div><!-- col-md-3 -->
         
</div><!-- row -->

<?php $this->load->view('admin/partials/footer');?>
