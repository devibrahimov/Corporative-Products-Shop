<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->

    <!-- Info boxes -->
    <div class="row">


      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="box box-solid">
          <div class="box-body">

          <form   action="<?=site_url('admin/get_post');?>" method="post" autocomplete="off" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Site name</label>
                <input type="text" name="name" class="form-control " value="<?=$row->name?> ">
              </div>
              <div class="form-group">
                <label for="">Site Info</label>
                <input type="text" name="info" class="form-control" value="<?=$row->info?>">
              </div>
              <div class="form-group">
                <label for="">Adres</label>
                <textarea type="text" name="adres" class="form-control" ><?=$row->adress?></textarea>
              </div>
              <div class="form-group">
                <label for="">E-mail</label>
                <input type="email" name="email" class="form-control" value="<?=$row->email?>">
              </div>
              <div class="row form-group" >
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <label for="">site Logo</label>
                  <input type="file" name="logo" class="form-control">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <label for="">site icon</label>
                  <input type="file" name="icon" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <label for="">Facebook</label>
                  <input type="text" name="facebook" class="form-control" value="<?=$row->facebook?>">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <label for="">instagram</label>
                  <input type="text" name="instagram" class="form-control" value="<?=$row->instagram?>">
                </div>
              </div>
<button type="submit" class="btn btn-success" name="button">Göndər</button>
          </form>

        <!-- /.info-box -->
          </div>
            </div>
      </div>


    </div>
    <!-- /.row -->


<?php $this->load->view('admin/partials/footer');?>
