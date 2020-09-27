
    <!-- categories -->
    <div class="shop-sidebar-wrap col-xl-3 col-lg-4 col-12 order-lg-1 mb-15">
            
            <div class="shop-sidebar mb-35">
               
                <h4 class="title">KATEQORİYALAR</h4>
                
                <ul class="sidebar-category">
                <?php foreach( $parrentCategories as $parent_id => $parent ):?>
                 
                 <!-- alt kategoriyasi yoxdursa  -->
                    <?php if($parent['sub_category'] == 0):?>
                    <li><a href="<?=site_url('zkmehsullar/'.$parent['id'].'-'.$parent['slug'])?>"><?=$parent['name']?></a></li>
                    <?php endif;?>
                      <!-- alt kategoriyasi varsa  -->
                    <?php if($parent['sub_category']== 1):?>
                     
                    <li class="has-children"><a href="#"><?=$parent['name']?></a>
                        <ul class="children">
                        <!-- alt kategoriyani varsa elave et  -->
                        <?php
                        if($childCategories){
                        foreach($childCategories[$parent_id] as $child):?>
                           <a href="<?=site_url('mehsullar/'.$child['id'].'-'.$child['slug'])?>"> <li><?=$child['name']?></li></a>
                        <?php endforeach;
                        } ?>
                        </ul>
                    </li> 
                    <?php endif;?> 
                <?php endforeach;?>

                </ul>
                
            </div>
            <!-- <div class="shop-sidebar mb-35">
               
                <div class="banner"><a href="#"><img src="<?=base_url('assets/site/assets/')?>images/banner/banner-41.jpg" alt="Banner"></a></div>
                
            </div> -->

        </div> <!-- ! categories -->
            <!-- Products -->
            <div class="col-xl-9 col-lg-8 col-12 order-lg-2 mb-50">
            
            <div class="row mb-50">
                <div class="col"> 

                        <!-- Header Advance Search Start -->
                <!-- <div class="col-xl-12 col-lg-12 col-12 header-advance-search">
                    
                    <form action="#">
                        <div class="input col-xl-12 col-lg-12 col-12 " ><input type="text" placeholder="Search your product"></div>
                        
                        <div class="submit"><button><i class="icofont icofont-search-alt-1"></i></button></div>
                    </form>
                    
                </div> -->
                <!-- Header Advance Search End -->
                      
                </div>
            </div>
          