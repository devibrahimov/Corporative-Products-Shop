<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->

    <!-- Info boxes -->
    <div class="row">
    <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">  
              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
              <h3>Ziyarçi Məlumatları</h3>
                <h5><strong> Adı: </strong> <?=$msg['name']?>
                <h5><strong> Soyadı: </strong> <?=$msg['surname']?>
                <h5><strong>E-maili :</strong> <?=$msg['email']?>
                  <span class="mailbox-read-time pull-right"><?=$msg['timestamp']?></span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p><?=$msg['message']?></p>
 
 
              </div>
              <!-- /.mailbox-read-message -->
            </div>
          
            <!-- /.box-footer -->
            <div class="box-footer">
               
            <!-- /.box-footer -->
           
           </div>
          <!-- /. box -->
        </div>

    </div>
    <!-- /.row -->


<?php $this->load->view('admin/partials/footer');?>
