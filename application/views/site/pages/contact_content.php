<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>Contact</h1>
                 <div class="breadcrumb">
                    <ul>
                    <li><a href="<?=site_url()?>">Home</a></li>
                    <li><a href="<?=site_url('elaqe')?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-1">
         </div>
        <div class="col-lg-4 col-md-6 col-12 order-lg-3">
         </div>

    </div>
</div><!-- Page Banner Section End -->

    </div><!-- Page Banner Section End -->
    <section class="no-margin">
     <div id="map" style="height:20px;" ></div>
    </section>
    <center class="contact-section section container-fluid mb-40"  width="100%">
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="462" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.974472946602!2d49.861827214686826!3d40.40941628639818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d5420e6f659%3A0x249edce16f1db879!2sVictoria+Studio!5e0!3m2!1sen!2s!4v1558943158531!5m2!1sen!2s"   frameborder="0" style="border:0" allowfullscreen></iframe><a href="https://www.jetzt-drucken-lassen.de">jetzt-drucken-lassen.de</a></div><style>.mapouter{text-align:right;height:462px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:462px;width:1080px;}</style>Google Maps by <a href="https://www.embedgooglemap.net" rel="nofollow" target="_blank">Embedgooglemap.net</a></div>
    </center>

<!-- Contact Section Start -->
<div class="contact-section section mt-100 mb-40">
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-12 mb-60">
         <!-- Contact Address Tab -->
         <div class="tab-pane  row d-flex" id="contact-address">

                       <div class="col-lg-12 col-md-12 col-12 mb-50">
                           <div class="contact-information">
                               <b><h4>Adress</h4></b>
                               <p>Azərbaycan Republic Baki city</p>
                           </div>
                       </div>

                       <div class="col-lg-12 col-md-12 col-12 mb-50">
                           <div class="contact-information">
                               <h4>Telefon</h4>
                               <p><a href="tel:+994 12 555 22 73">+994 12 345 67 89</a></p>
                           </div>
                       </div>

                       <div class="col-lg-12 col-md-12 col-12 mb-50">
                           <div class="contact-information">
                               <h4>E-poct</h4>
                               <p><a href="mailto:mail@dema.az">mail@dema.az</a>
                           </div>
                       </div>
                   </div>
       </div>

            <!-- Contact Tab Content -->
            <div class="col-lg-8 col-12">



                    <!-- Contact Form Tab -->
                    <div class="tab-pane fade show active  row d-flex" id="contact-form-tab">
                        <div class="col">

                            <form id="contact-form" action="<?=site_url('contact/send');?>" method="post" class="contact-form mb-50">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-25">
                                        <label for="first_name">Name*</label>
                                        <input id="first_name" type="text" name="first_name"required>
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <label for="last_name">Surname*</label>
                                        <input id="last_name" type="text" name="last_name"required>
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <label for="email_address">E-mail*</label>
                                        <input id="email_address" type="email" name="email_address"required>
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <label for="phone_number">Phone</label>
                                        <input id="phone_number" type="text" name="phone_number" required>
                                    </div>
                                    <div class="col-12 mb-25">
                                        <label for="message">Message*</label>
                                        <textarea id="message" name="message"required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" value="SEND NOW">
                                    </div>

                                </div>
                            </form>
                            <h3 class="form-messege"></h3>

                        </div>


                </div>
            </div>
        </div>
    </div>
</div><!-- Contact Section End -->
