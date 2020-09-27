<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->
<div class="row">

  <div class="col-lg-8 col-md-8 col-xs-12">
          <!-- small box -->
          <div class="box box-primary">
             <div class="box-header with-border">

            <form class="" action="<?=site_url('admin/updatesubcategory/').$cat->id?>" method="post">
                 <div class="row">
                   <div class="col-lg-6">
                   <label> Kategoria adı</label>
                  <div class="form-group">
                   
                  <input type="text" name="category" class="form-control" value="<?=$cat->name?>">
                </div>
                   </div>
                   <div class="col-lg-6">
                   <label>Category</label>
                <select name="parentcategory" class="form-control" id="categoryProduct" required>
                <option value="<?=$cat->id?>"><?=$pcatname[$cat->topCategory]?></option>
                  <?php foreach ($parrentcats as $row): ?>
                  <option value="<?=$row->id?>"><?=$row->name?></option>
                  <?php endforeach; ?>
                </select>
                   </div>
                 </div>
               
               
              <button type="submit" class=" btn btn-success">YAdda Saxla</button>
              </form>
  
          </div>
         </div>

        </div><!-- col-md-3 -->
         
</div><!-- row -->

<?php $this->load->view('admin/partials/footer');?>
