<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->
<div class="row">

  <div class="col-lg-3 col-md-3 col-xs-6">
          <!-- small box -->
          <div class="box box-secondary">
             <div class="box-header with-border">

            <form class="" action="<?=site_url('admin/addsubOptions')?>" method="post">
              <div class="form-group">
                  <label>Yeni Alt Seçənək Əlavə et</label>
                  <input type="text"  name="suboption"autocomplete="off" class="form-control" placeholder="Enter ...">
                  <input type="hidden"  name="option_id" autocomplete="off" class="form-control" placeholder="Enter ..." value="<?=$options->id?>">
                </div>
              <!-- <div class="form-group">
                <label>Üst Kategoria</label>
                <select name="topCategory"class="form-control">
                  <option value="1">Filter</option>
                  <option value="2">Filter Hissəsi</option>

                </select>
              </div> -->
              <button type="submit" class=" btn btn-success"name="button">Submit</button>
              </form>

          </div>
         </div>

        </div><!-- col-md-3 -->
        <div class="col-lg-9 col-md-9 col-xs-6">
              <div class="box box-secondary">
                 <div class="box-body">
                   <table id="category" class="table table-bordered table-striped">
                     <thead>
                       <tr>
                         <th>Kategoriya adı</th>
                         <th>Üst Kategoriya adı</th>
                         <th>Əməliyyatlar</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php foreach($suboptions as $suboption):?>
                       <tr>
                         <td><?=$suboption->name?></td>
                         <td><?php // if($category->topCategory==1){echo 'Filter';}if($category->topCategory==2){echo 'Filter Hissəsi';}?></td>
                         <td>

                           <a class="btn   btn-danger" href="#"><i class="fa fa-trash"> Sil</i></a>
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
