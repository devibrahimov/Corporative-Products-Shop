<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->
<div class="row">

  <div class="col-lg-4 col-md-4 col-xs-6">
          <!-- small box -->
          <div class="box box-primary">
             <div class="box-header with-border">

            <form class="" action="<?=site_url('admin/addParrentCategory')?>" method="post">
                  <label>Yeni Kategoria adı</label>
              <div class="form-group">
                
                  <div class="input-group">
                    <span class="input-group-addon">
                      <input type="checkbox" name="check_subcategory" aria-label="...">
                    </span>
                    <input type="text" name="category" class="form-control" aria-label="...">
                  </div><!-- /input-group -->
                </div>  
                
               <span style="background-color:black; padding:2px;color:red;" >DİQQƏT!</span> <span style="color:red;"> Alt kategoriyası elave olacaqsa çek edin</span>
                <br><br>
              <button type="submit" class=" btn btn-success"name="button">YAdda Saxla</button>
              </form>
  
          </div>
         </div>

        </div><!-- col-md-4 -->
        <div class="col-lg-8 col-md-8 col-xs-6">
              <div class="box box-primary">
                 <div class="box-body">
                   <table id="category" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                         <th>Kategoriya adı</th>
                        <th>Təyinatı</th>  
                         <th>Əməliyyatlar</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php foreach($categories as $category):?>
                       <tr>
                         <td><?=$category->name?></td>
                          <td>
                           <?php if($category->sub_category == 1):?>
                           <a class="btn btn-success" href="<?=site_url('admin/categories/').$category->id?>"><i class="fa fa-plus-circle"> Alt Kategoriya Əlave Et</i></a>
                           <?php endif;?>
                           <?php if($category->sub_category == 0):?>
                           <a class="text-danger"> Alt Kategoriya teyin olunmayib </a>
                           <?php endif;?>
                          </td>  
                          <td> 
                           <a class="btn " href="<?=site_url('admin/editParrentCategory/').$category->id?>"><i class="fa fa-pencil"> Yenilə</i></a> | 
                           <a class="btn  text-danger" href="<?=site_url('admin/delparrentcategory/').$category->id?>"><i class="fa fa-trash"> Sil</i></a>
                          </td>
                       </tr>
                       
                     <?php endforeach;?>
                     </tbody>
                   </table>
                 </div><!-- box-body -->
              </div><!-- box solid -->
        </div><!-- col-md-9 -->
</div><!-- row -->

<?php $this->load->view('admin/partials/footer');?>
