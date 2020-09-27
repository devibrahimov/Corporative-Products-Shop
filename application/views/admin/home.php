<?php $this->load->view('admin/partials/header');?>
<?php $this->load->view('admin/partials/sidebar');?>
<!-- Content Wrapper. Contains page content -->
<div class="row">
        <div class="col-md-6"> 
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('<?=base_url('assets/admin/')?>dist/img/about.png') center ;height:200px;">
              <h3 class="widget-user-username"><?=$this->session->admin['name']?></h3>
              <h5 class="widget-user-desc">Web Designer</h5>
            </div>
<!--               
            <div class="widget-user-image"  >
              <img class="img-circle" src="<?=base_url('assets/site/assets/')?>images/kesso.png" alt="User Avatar">
            </div> -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-12 border-right">
                EGO TECH şirkəti İsveçrənin KESO ASSA ABLOY brendinin Azərbaycandakı rəsmi nümayəndəsidir.
                <br><br>
                ASSA ABLOY dünyanın ən böyük "ağıllı" kilidləmə və təhlükəsizlik həlləri sistemi olaraq keyfiyyətli və etibarlı məhsulları ilə müştərilərinin həyatına güvənlik və rahatlıq gətirməkdədir.
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            </div>
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
            <div class="inner">
              <h3><?=$product_count?></h3>

              <p>Hazirda Saytda olan məhsul sayı</p>
            </div> 
            <a href="#" class="small-box-footer">
              Məhsullar bölməsi <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div> 

           
          <!-- Widget: user widget style 1 -->
          
          
       


        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Carousel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="http://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap" alt="First slide">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      </div>
    <!-- Info boxes -->
    


<?php $this->load->view('admin/partials/footer');?>
