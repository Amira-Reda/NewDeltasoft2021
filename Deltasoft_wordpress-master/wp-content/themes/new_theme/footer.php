    
        <?php if( WPGlobus::Config()->language == 'ar'){?>
        <footer>
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-left pr-5">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/svg/AR-Logo.svg';?>" class="mb-3" alt="Delta Soft">
                        <p class="pr-5">دلتا سوفت هي شركة رائدة مكرسة لمساعدة المؤسسات الكبرى في حل أكثر مشاكلها صعوبة من خلال التعلم. مهمتنا هي إنشاء تجارب تعليمية رقمية مخصصة تؤدي إلى التغييرات السلوكية ونقل المعرفة اللازمة لدعم أهداف العمل الأكثر أهمية.
                        </p>
                        <ul class="ul-icon-button">
                            <li>
                                <a href="#" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/eDeltasoft/" class="icon-button facebook"><i
                                            class="fab fa-facebook-f"></i><span></span></a>
                            </li>
                            <li>
                                <a href="#" class="icon-button google-plus"><i
                                            class="fa fa-google-plus"></i><span></span></a></li>
                            <li>
                                <a href="#" class="icon-button youtube"><i class="fa fa-youtube"></i><span></span></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/deltasoft" class="icon-button linkedin"><i class="fa fa-linkedin"></i><span></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-left">
                        <h4 class="h4">معلومات الاتصال</h4>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <h5> الفرع الرئيسي : </h5>
                                <p>10 Ferdoos st, Talkha 35111, Ad Daqahliyah, Egypt.</p>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <h5> فرع المنصورة : </h5>
                                <p>26 Mekka St, Mansoura 35516, Ad Daqahliyah, Egypt.</p>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <p>
                                    <strong>هاتف : </strong> 002-01018246669 • 0502208847
                                </p>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <p>
                                    <strong>البريد الالكتروني : </strong> mohamed@edeltasoft.com
                                </p>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-left" id="contact">
                        <h4 class="h4">Contact</h4>
                        <form class="footer-form">
                            <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Your Name </label> -->
                                <input type="text" class="form-control" placeholder="Your Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <!-- <label for="exampleInputid1">Your Email</label> -->
                                <input type="email" class="form-control" placeholder="Your Email" id="exampleInputid1">
                            </div>
                            <div class="form-group">
                                <!-- <label for="exampleInputid2">Subject</label> -->
                                <input type="text" class="form-control" placeholder="Subject" id="exampleInputid2">
                            </div>
                            <div class="form-group">
                                <!-- <label for="exampleInputid2">Your Massage</label> -->
                                <textarea placeholder="Your Massage" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn rounded-pill btn-warning-gradient float-right">ارسال</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyrights">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>حقوق النشر © 2020 جميع الحقوق محفوظة لشركة DeltaSoft.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">الرئيسية</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products">المنتجات</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#services">الخدمات</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>career">الوظائف</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">تعرف علينا</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">تواصل معنا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php }else{?>


        <footer>
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-left pr-5">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/svg/EN-Logo.svg'?>"  class="mb-3" alt="Delta Soft">
                        <p class="pr-5">Delta Soft is a leading company dedicated to helping the largest organizations solve their most challenging problems through learning. Our mission is to create custom digital learning experiences that lead to the behavioral changes
                            and knowledge transfer needed to support most important business goals.
                        </p>
                        <ul class="ul-icon-button">
                            <li>
                                <a href="#" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/eDeltasoft/" class="icon-button facebook"><i
                                            class="fab fa-facebook-f"></i><span></span></a>
                            </li>
                            <li>
                                <a href="#" class="icon-button google-plus"><i
                                            class="fa fa-google-plus"></i><span></span></a></li>
                            <li>
                                <a href="#" class="icon-button youtube"><i class="fa fa-youtube"></i><span></span></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/deltasoft" class="icon-button linkedin"><i class="fa fa-linkedin"></i><span></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-left">
                        <h4 class="h4">Connect Information</h4>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <h5> Main Branch : </h5>
                                <p>10 Ferdoos st, Talkha 35111, Ad Daqahliyah, Egypt.</p>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <h5> Mansoura Branch : </h5>
                                <p>26 Mekka St, Mansoura 35516, Ad Daqahliyah, Egypt.</p>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <p>
                                    <strong>Tel : </strong> 002-01018246669 • 0502208847
                                </p>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <p>
                                    <strong>Email : </strong> mohamed@edeltasoft.com
                                </p>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-left" id="contact">
                        <h4 class="h4">Contact</h4>
                        <form class="wpcf7-form init footer-form" method="post" novalidate="novalidate">
                        <!-- from contact form 7 -->
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="134">
                            <input type="hidden" name="_wpcf7_version" value="5.2.2">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f134-p77-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="77">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                        </div>
                            <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Your Name </label> -->
                                <input name="your-name" type="text" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" placeholder="Your Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <!-- <label for="exampleInputid1">Your Email</label> -->
                                <input type="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" placeholder="Your Email" id="exampleInputid1" name="your-email" >
                            </div>
                            <div class="form-group">
                                <!-- <label for="exampleInputid2">Subject</label> -->
                                <input type="text" class="wpcf7-form-control wpcf7-text form-control" placeholder="Subject" id="exampleInputid2" aria-invalid="false" name="your-subject"> 
                            </div>
                            <div class="form-group">
                                <!-- <label for="exampleInputid2">Your Massage</label> -->
                                <textarea placeholder="Your Massage" class="wpcf7-form-control wpcf7-textarea form-control"  name="your-message" aria-invalid="false"></textarea>
                            </div>
                            <button type="submit" class="wpcf7-form-control wpcf7-submit btn rounded-pill btn-warning-gradient float-right">Send</button>
                            <span class="ajax-loader"></span>
                        </form>

                        <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>


                        <script src="http://localhost/Deltasoft_wordpress/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.2.2" id="contact-form-7-js"></script>


















                        
                    </div>
                </div>
            </div>
            <div class="copyrights">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>Copyrights © 2020 All Rights Reserved by DeltaSoft.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <ul class="list-unstyled list-inline">

                            <?php $menuitems=wp_get_nav_menu_items('main menu',array());
                        foreach($menuitems as $item){ 
                        ?>
                                <li>
                                    <a href="<?php echo $item->url;?>"><?php echo apply_filters('the_title', $item->title);?></a>
                                </li>

                        <?php }?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <?php }?>

    <?php wp_footer(); ?>
</body>
</html>
