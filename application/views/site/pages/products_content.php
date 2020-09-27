   <style>
   .instock{
       position :absolute;
       top:0;
       right:0;
       width:70px;
   }
   </style>
<!-- Page Banner Section Start -->
<div class="page-banner-section section">
<div class="page-banner-wrap row row-0 d-flex align-items-center ">

    <!-- Page Banner -->
    <!-- <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
        <div class="page-banner">
            <h1>Məhsullar</h1>
             <div class="breadcrumb">
                <ul>
                    <li><a href="<?=site_url()?>">Ana Səhifə</a></li>
                    <li><a href="<?=site_url('mehsullar')?>">Məhsullar</a></li>
                    <?php if($pagetype =='category'){?>
                        
                    <?php }?>
                </ul>
            </div>
        </div>
    </div> -->

    <!-- Banner -->
    <!-- <div class="col-lg-4 col-md-6 col-12 order-lg-1">
        <div class="banner"><a href="#"><img src="<?=base_url('assets/site/assets/')?>images/banner/banner-15.jpg" alt="Banner"></a></div>
    </div>
 
    <div class="col-lg-4 col-md-6 col-12 order-lg-3">
        <div class="banner"><a href="#"><img src="<?=base_url('assets/site/assets/')?>images/banner/banner-14.jpg" alt="Banner"></a></div>
    </div> -->

</div>
</div><!-- Page Banner Section End -->

<!-- Feature Product Section Start -->
<div class="product-section section mt-90 mb-40">
<div class="container">
    <div class="row">

<?php $this->load->view('site/partial/sidebar')?>
    
             
            <!-- Shop Product Wrap Start -->
            <div class="shop-product-wrap grid with-sidebar row">
                <?php foreach($products as $product):?>
                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10"> 
                    <!-- Product Start -->
                    <div class="ee-product"> 
                        <!-- Image -->
                        <div class="image">
                            <a href="<?=site_url('mehsullar/').$product['category'].'-'.$category_slug[ $product['category']].'/'.$product['id'].'-'.$product['seo'];?>" class="img"><img src="<?=base_url('assets/uploads/products/').$products_image[ $product['id'] ]?> " alt="Product Image"></a>
                            <?php if($product['stock']  != 0 ):?>
                             <img class="instock" src="<?=base_url('assets/site/assets/images/')?>instock.png " alt="Product Image"> 
                        <?php endif ;?>
                        </div>
                        
                        <!-- Content -->
                        <a href="<?=site_url('mehsullar/').$product['category'].'-'.$category_slug[ $product['category']].'/'.$product['id'].'-'.$product['seo'];?>">
                        <div class="content">
                            <!-- Category & Title -->
                            <div class="category-title">
                                <span href="#" class="cat"><?=$product_category[ $product['category'] ]?></span> 
                                <h5 class="title"><?=$product['title']?></h5>
                            </div>
                            <!-- Price & Ratting -->
                            <div class="price-ratting">
                                <h5 class="price"><?php if($product['price'] != 0 ){echo $product['price'].'‎ ₼'; }?></h5><br>
 
                            </div>
                        </div>
                        </a>
                    </div><!-- Product End -->
                </div>
                <?php endforeach;?>
            </div><!-- Shop Product Wrap End -->
            


            <!-- <div class="row mt-30">
                <div class="col">

                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i>Back</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li> - - - - - </li>
                        <li><a href="#">18</a></li>
                        <li><a href="#">18</a></li>
                        <li><a href="#">20</a></li>
                        <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                    </ul>
                    
                </div>
            </div> -->
 
        </div><!-- ! products -->
        
    </div>
</div>
</div><!-- Feature Product Section End -->
 