<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      
       
    </div>
    <!-- search form -->
    
    <!-- /.search form -->


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu "style="margin-top:20px;" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>


    <li class="<?php if($type=='Home'){echo 'active ';}?> menu-open">
        <a href="<?=site_url('admin')?>"> <i class="fa fa-home"></i> <span>Home</span>   </a>
    </li>
    <li class="<?php if($type=='parrentCategories'||$type=='categories'||$type=='productoptions'||$type=='optionParams'){echo 'active ';}?> treeview">
              <a href="#">
                <i class="fa fa-list"></i> <span>Category System</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class=" menu-open">
                    <a href="<?=site_url('admin/parrentCategories')?>"> <i class="fa <?php if($type=='parrentCategories'){echo ' fa-check-circle ';}else{echo' fa-circle-o';}?>"></i> <span>Kategoriya</span>   </a>
                </li>
                <!-- <li class=" menu-open">
                    <a href="<?=site_url('admin/categories')?>"> <i class="fa <?php if($type=='categories'){echo ' fa-check-circle ';}else{echo' fa-circle-o';}?>"></i> <span>Categories</span>   </a>
                </li> -->
                <!-- <li class="menu-open">
                    <a href="<?=site_url('admin/productoptions')?>"> <i class="fa <?php if($type=='productoptions'){echo ' fa-check-circle ';}else{echo' fa-circle-o';}?> "></i> <span>Seçimlər</span>   </a>
                </li> -->

              </ul>
            </li>
            <li class="<?php if($type=='newProducts'){echo 'active ';}?> menu-open">
                <a href="<?=site_url('admin/addProduct')?>"> <i class="fa fa-shopping-bag"></i><i class="fa fa-plus"></i> <span>add new Product</span>   </a>
            </li>
    <li class="<?php if($type=='Products'){echo 'active ';}?> menu-open">
        <a href="<?=site_url('admin/Products')?>"> <i class="fa fa-shopping-bag"></i> <span>Products</span>   </a>
    </li>
    <li class="<?php if($type=='messages'){echo 'active';}?> menu-open">
        <a href="<?=site_url('admin/messagesview')?>"> <i class="fa fa-envelope"></i> <span>Ziyarətçi Qeydi</span><span class="pull-right-container">
               
              <!-- <small class="label pull-right bg-red"><?=$new?></small> -->
             
            </span>   </a>
    </li>
    <!-- <li class="<?php if($type=='setting'){echo 'active ';}?> menu-open">
        <a href="<?=site_url('admin/setting')?>"> <i class="fa fa-cog"></i> <span>Setting</span>   </a>
    </li> -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>





<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $navigation;?>
      <small>Keso.az</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?php echo $navigation;?></li>
    </ol>


  </section>
  <!-- Main content -->
  <section class="content  container-fluid">
  <?php flashread();?>
