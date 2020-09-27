<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->
<div class="row">

  <div class="col-lg-3 col-md-3 col-xs-6">
          <!-- small box -->
          <div class="box box-primary">
             <div class="box-header with-border">

            <form class="" action="<?=site_url('admin/addCategory')?>" method="post">
              <div class="form-group">
                  <label>Yeni Kategoria adı</label>
                  <input type="text"name="category" class="form-control" placeholder="Enter ...">
                </div>
                <input type="hidden" name="topCategory" class="form-control" value="<?=$Category->id?>">

              <button type="submit" class=" btn btn-success"name="button">Submit</button>
              </form>

          </div>
         </div>

        </div><!-- col-md-3 -->
        <div class="col-lg-9 col-md-9 col-xs-6">
              <div class="box box-primary">
                 <div class="box-body">
                   <table id="category" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                         <th>Kategoriya adı</th>
                         <th>--------------</th>
                         <th>Əməliyyatlar</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php foreach($categories as $category):?>
                       <tr>
                         <td><?=$category->name?></td>
                         <td><?php //$parrentCategory[$category->topCategory]?></td>
                         <td> 
                         <a class="btn " href="<?=site_url('admin/editsubCategory/').$category->id?>"><i class="fa fa-pencil"> Yenilə</i></a> | 
                         
                         <a class="btn " href="<?=site_url('admin/delsubcategory/').$category->id?>"><i class="fa fa-trash"> Sil</i></a> </td>
                       </tr>
                     <?php endforeach;?>
                     </tbody>
                   </table>
                 </div><!-- box-body -->
              </div><!-- box solid -->
        </div><!-- col-md-9 -->
</div><!-- row -->

<?php $this->load->view('admin/partials/footer');?>
