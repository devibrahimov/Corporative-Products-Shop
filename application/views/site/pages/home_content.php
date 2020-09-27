<style  media="screen">
   .instock{
       position :absolute;
       top:0;
       right:0;
       width:70px;
   }
   .hero-slider{
     width: 100%;
     height: 100%;
     z-index:-1;
     background-image: url('<?=site_url('assets/site/assets/images/zk.jpg')?>');
     background-repeat: no-repeat;
     background-size: cover;
   }
   </style>

<!-- Hero Section Start -->
<div class="hero-slider">

</div>


<!-- Banner Section Start -->


<div class="about-section section  mt-80 mb-30">
    <div class="container">

        <div class="row">

            <!-- Feature Content -->
            <div class="feature-content col-lg-6 col-12 order-2 order-lg-1   mb-30">
                <h1 >About Header  </h1>

                <b><p>
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                </p></B>

            </div>

            <!-- Feature Image -->
            <div class="col-lg-6 col-12 order-1 order-lg-2 ml-auto  ">
              <img width="100%"src="<?=base_url('assets/site/assets/')?>images/about/about.jpg" alt=""> <!--style="box-shadow:10px 10px 30px #888888" -->
            </div>

        </div>



    </div>
</div>




<!-- Feature Product Section Start -->
<div class="product-section section mb-70">
    <div class="container">
        <div class="row">

            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="New Products"><h1>New Products</h1></div>
            </div><!-- Section Title End -->

            <!-- Product Tab Filter Start -->
            <div class="col-12 mb-30">
                <div class="product-tab-filter">

                    <!-- Tab Filter Toggle -->
                    <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>

                    <!-- Product Tab List -->


                </div>
            </div><!-- Product Tab Filter End -->

            <!-- Product Tab Content Start -->
            <div class="col-12">
                <div class="tab-content">

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade show active" id="tab-one">

                        <!-- Product Slider Wrap Start -->
                        <div class="product-slider-wrap product-slider-arrow-one">
                            <!-- Product Slider Start -->
                            <div class="product-slider product-slider-4">


                            <?php foreach($lastproducts as $product):?>
                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">
                                        <span class="label new">  <img src="<?=base_url('assets/news.png');?>" alt="" srcset=""></span>
                                            <a href="<?=site_url('mehsullar/').$product['category'].'-'.$category_slug[ $product['category']].'/'.$product['id'].'-'.$product['seo'];?>" class="img">

                                            <img src="<?=base_url('assets/uploads/products/').$products_image[ $product['id'] ];?>" alt="Product Image"></a>
                                            <?php if($product['stock']  != 0 ):?>
                                            <img class="instock" src="<?=base_url('assets/site/assets/images/')?>instock.png " alt="Product Image">
                                            <?php endif ;?>

                                        </div>

                                        <!-- Content -->
                                        <a href="">

                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">
                                                        <??>
                                             <a href="#" class="cat"><?=$product_category[ $product['category'] ]?></a><br>
                                            <a href="#" class="cat"><?=$product_subcategory[ $product['subcategory'] ]?></a>
                                                <h5 class="title"><a href="<?=site_url('mehsullar/').$product['category'].'-'.$category_slug[ $product['category']].'/'.$product['id'].'-'.$product['seo'];?>"><?=$product['title']?></a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                            <h5 class="price"><?php if($product['price'] != 0 ){echo $product['price'].'‎ ₼'; }?></h5><br>
                                            <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                            </div>

                                        </div>
                                    </a>
                                    </div><!-- Product End -->
                                </div>
                                <?php endforeach;?>


                            </div><!-- Product Slider End -->
                        </div><!-- Product Slider Wrap End -->

                    </div><!-- Tab Pane End -->

                </div>
            </div><!-- Product Tab Content End -->

        </div>
    </div>
</div><!-- Feature Product Section End -->





<div class="product-section section mb-60">
    <div class="container">
        <div class="row">

            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="Our Products"><h1>Our Products</h1></div>
            </div><!-- Section Title End -->

            <div class="col-12">
                <div class="row">
                <?php foreach($products as $product):?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">
                                        <span class="label new">  <img src="<?=base_url('assets/news.png');?>" alt="" srcset=""></span>
                                            <a href="<?=site_url('mehsullar/').$product['category'].'-'.$category_slug[ $product['category']].'/'.$product['id'].'-'.$product['seo'];?>" class="img">

                                            <img src="<?=base_url('assets/uploads/products/').$products_image[ $product['id'] ];?>" alt="Product Image"></a>
                                            <?php if($product['stock']  != 0 ):?>
                                            <img class="instock" src="<?=base_url('assets/site/assets/images/')?>instock.png " alt="Product Image">
                                            <?php endif ;?>

                                        </div>
                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->


                                <div class="category-title">
                                <a href="#" class="cat  "><?=$product_category[ $product['category'] ]?></a>
                                <!-- <a href="#" class="cat"><?=$product_subcategory[ $product['subcategory'] ]?></a> -->
                                    <h5 class="title"><a href="<?=site_url('mehsullar/').$product['category'].'-'.$category_slug[ $product['category']].'/'.$product['id'].'-'.$product['seo'];?>"><?=$product['title']?></a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><?php if($product['price'] != 0 ){echo $product['price'].'‎ ₼'; }?></h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>
                    <?php endforeach;?>




                </div>
            </div>

        </div>
    </div>
</div>












<!-- Banner Section Start -->
<div class="banner-section section mt-60 mb-60">
    <div class="container">
    <!-- <div class="row mb-30">
        <div class="col-12 mb-40">
            <div class="section-title-one" data-title="Seçkin Məhsullarımız"><h1>Seçkin Məhsullarımız</h1></div>
        </div>
    </div> -->

        <div class="row">
            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="<?=base_url('assets/site/assets/')?>images/banner/banner-32.jpg" alt="Banner"></a></div>
            </div>
            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="<?=base_url('assets/site/assets/')?>images/banner/banner-31.jpg" alt="Banner"></a></div>
            </div>
            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="<?=base_url('assets/site/assets/')?>images/banner/banner-33.jpg" alt="Banner"></a></div>
            </div>
        </div>
    </div>
</div><!-- Banner Section End -->
