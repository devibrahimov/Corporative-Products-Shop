 
<!-- Page Banner Section Start -->
<div class="page-banner-section section">
<div class="page-banner-wrap row row-0 d-flex align-items-center ">

    <!-- Page Banner -->
    <div class="col-lg-6 col-12 order-lg-2 d-flex align-items-center justify-content-center">
        <div class="page-banner">
            <h1>Məhsullar</h1>
             <div class="breadcrumb">
                <ul>
                    <li><a href="<?=site_url()?>">Ana Səhifə</a></li>
                    <li><a href="<?=site_url('mehsullar')?>">Məhsullar</a></li>
                    <li><a href="<?=site_url('mehsullar/').$product->category.'-'.$category_slug[$product->category]?>"><?=$product_category[$product->category]?></a></li>
                    <li><a href="<?=site_url('mehsullar/').$product->category.'-'.$category_slug[$product->category].'/'.$product->id.'-'.$product->seo?>"><?=$product->title?></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Banner -->
    <div class="col-lg-3 col-md-6 col-12 order-lg-1">
        <div class="banner"><a href="#"><img src="<?=base_url('assets/site/assets/')?>images/banner/banner-15.jpg" alt="Banner"></a></div>
    </div>

    <!-- Banner -->
    <div class="col-lg-3 col-md-6 col-12 order-lg-3">
        <div class="banner"><a href="#"><img src="<?=base_url('assets/site/assets/')?>images/banner/banner-14.jpg" alt="Banner"></a></div>
    </div>

</div>
</div><!-- Page Banner Section End -->

<!-- Single Product Section Start -->
<div class="product-section section mt-120 mb-10">
    <div class="container">
        
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-12 order-1 order-lg-2 mb-60">
        
    <div class="row mb-40">

        <div class="col-lg-6 col-12 mb-50">

            <!-- Image -->
            <div class="single-product-image">

                <div class="tab-content">
                
                <?php
                // $current_tab = $product_imgs['0']['img'];
                 foreach($product_imgs as $img):
                $content_class = ($img['master']==1) ? ' show active' : ' ';
                ?>

                <div id="single-image-<?=$img['id']?>" class="tab-pane fade <?=$content_class?> big-image-slider">
                <div class="big-image"><img src="<?=base_url('assets/uploads/products/').$img['img']?>" alt="Big Image">
                <i class="fa fa-search-plus"></i></a>
                </div> 
                </div> 
                
                <?php endforeach;?>
                    
                </div>

                <div class="thumb-image-slider nav"> 
                <?php  
                foreach($product_imgs as $tumbl_img):
                    
                 $tab_class =($tumbl_img['master']==1) ? 'active' : ' ';?>

                    <a  style="max-width:150px;"class="thumb-image <?=$tab_class ?>" data-toggle="tab" href="#single-image-<?=$tumbl_img['id']?>">
                    <img style="max-width:100%;" src="<?=base_url('assets/uploads/products/').$tumbl_img['img']?>" alt="Thumbnail Image"></a>
                
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <div class="col-lg-6 col-12 mb-50">

            <!-- Content -->
            <div class="single-product-content p-0">

                <!-- Category & Title -->
                <div class="head-content">

                    <div class="category-title">
                        <a href="#" class="cat"></a>
                        <h5 class="title"><?=$product->title?></h5>
                    </div>
                <br />


                </div>

                <div class="single-product-description"> 

                    <div class="specification">
                            
                            <?=$product->detail?> 
                    </div>
                        
                </div>

            </div>
            
        </div>
        <div class="desc">
            <p><?=$product->description?></p>
                </div>
    </div>
    
    <!-- <div class="row">

        <div class="col-12 mb-90">

            <ul class="single-product-tab-list nav">
                <li><a href="#product-description" class="active" data-toggle="tab" >description</a></li>
                <li><a href="#product-specifications" data-toggle="tab" >specifications</a></li>
                <li><a href="#product-reviews" data-toggle="tab" >reviews</a></li>
            </ul>

            <div class="single-product-tab-content tab-content">
                <div class="tab-pane fade show active" id="product-description">

                    <div class="row">
                        <div class="single-product-description-content col-lg-8 col-12">
                            <h4>Introducing Flex 3310</h4>
                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in</p>
                            <h4>Stylish Design</h4>
                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                            <h4>Digital Camera, FM Radio & many more...</h4>
                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                        </div>
                        <div class="single-product-description-image col-lg-4 col-12">
                            <img src="<?=base_url('assets/site/assets/')?>images/single-product/description.png" alt="description">
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="product-specifications">
                    <div class="single-product-specification">
                        <ul>
                            <li>Full HD Camcorder</li>
                            <li>Dual Video Recording</li>
                            <li>X type battery operation</li>
                            <li>Full HD Camcorder</li>
                            <li>Dual Video Recording</li>
                            <li>X type battery operation</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-reviews">

                    <div class="product-ratting-wrap">
                        <div class="pro-avg-ratting">
                            <h4>4.5 <span>(Overall)</span></h4>
                            <span>Based on 9 Comments</span>
                        </div>
                        <div class="ratting-list">
                            <div class="sin-list float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>(5)</span>
                            </div>
                            <div class="sin-list float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(3)</span>
                            </div>
                            <div class="sin-list float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(1)</span>
                            </div>
                            <div class="sin-list float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(0)</span>
                            </div>
                            <div class="sin-list float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(0)</span>
                            </div>
                        </div>
                        <div class="rattings-wrapper">

                            <div class="sin-rattings">
                                <div class="ratting-author">
                                    <h3>Cristopher Lee</h3>
                                    <div class="ratting-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(5)</span>
                                    </div>
                                </div>
                                <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                            </div>

                            <div class="sin-rattings">
                                <div class="ratting-author">
                                    <h3>Nirob Khan</h3>
                                    <div class="ratting-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(5)</span>
                                    </div>
                                </div>
                                <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                            </div>

                            <div class="sin-rattings">
                                <div class="ratting-author">
                                    <h3>MD.ZENAUL ISLAM</h3>
                                    <div class="ratting-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(5)</span>
                                    </div>
                                </div>
                                <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                            </div>

                        </div>
                        <div class="ratting-form-wrapper fix">
                            <h3>Add your Comments</h3>
                            <form action="#">
                                <div class="ratting-form row">
                                    <div class="col-12 mb-15">
                                        <h5>Rating:</h5>
                                        <div class="ratting-star fix">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-15">
                                        <label for="name">Name:</label>
                                        <input id="name" placeholder="Name" type="text">
                                    </div>
                                    <div class="col-md-6 col-12 mb-15">
                                        <label for="email">Email:</label>
                                        <input id="email" placeholder="Email" type="text">
                                    </div>
                                    <div class="col-12 mb-15">
                                        <label for="your-review">Your Review:</label>
                                        <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input value="add review" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div> -->
    
    <div class="row">


        <!-- Product Tab Content Start -->

    </div> 
</div> 

    <?php $this->load->view('site/partial/sidebar')?>
    
        </div>
        
    </div>
</div><!-- Single Product Section End -->