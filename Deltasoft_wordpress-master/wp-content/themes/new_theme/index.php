<?php get_header();?>

<?php
	if ( have_posts()  && $pagename==_('career') ) :?>
<div>
    <p class="career-introduction career">
    <?php echo _('Your Career Life Grows With Us We appreciate the diverse skills and capabilities of our staff and we look forward to push them to a higher level. We strive to create professional environment which is full of challenges of the, and encourages innovation and creativity, and to reward success and effective teamwork. We’re always looking for talented people who are passionate about innovation and creativity. Do you like to be involved in building many of the products and services of educational and creative? Send your CV to hr@edeltasoft.com Required Jobs:');?>
    </p>
</div>
        <section class="home-wrapper w-100 career">
<ul class="bottom-text-box card-grid-container__grid card-grid card-grid--3">
		<?php while ( have_posts()) :
	
			the_post();
			?>
            <li class="card-grid__item" style="display: inline-block;list-style: none;">
                <div class="card-item card-item--custom card-item--green card-item--plain paragraph paragraph--type--card-item-custom paragraph--view-mode--default">
	<!-- <div class="col-md-6" style="border: outset;"> -->
			<div <?php post_class(); ?> >
			
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><! – .entry-header – >
			
				<div class="entry-content">
					<?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
				</div><! – .entry-content – >
			
        </div><! – #post-## – >
        </div>
            </li>
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;
        
		endwhile;
        ?>
        </ul>
        </section>
        <section class="section subscribe pt-5 pb-5 w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 pt-3 pb-3 text-center">
                    <h4 class="title">اشترك في نشرتنا الإخبارية</h4>
                    <h5 class="title mb-4">لمعرفة أخبار دلتا سوفت.</h5>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 pt-3 pb-3 text-center">
                    <form class="form-inline justify-content-center">
                        <div class="form-group mx-sm-5">
                            <input type="text" class="form-control" id="inputSubscribe" placeholder="<?php echo _('Subscribe');?>">
                        </div>
                        <button type="submit" class="btn btn-warning-gradient btn-lg rounded-pill">اشترك
                                الان</button>
                    </form>
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
	<?php else :?>
<?php if( WPGlobus::Config()->language == 'ar'){?>
    <section class="home-wrapper w-100">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-5 mx-auto">
                                <div class="carousel-caption text-sm-center text-md-left text-lg-left">
                                    <h1>معمل الهيثم</h1>
                                    <p>
                                        الهيثم لاب هو بيئة تعليمية إلكترونية اجتماعية جذابة ومتعددة اللغات.
                                    </p>
                                    <button class="btn btn-warning-gradient btn-lg rounded-pill float-xl-right float-md-right float-sm-none ">المزيد
                                        </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="<?php echo get_template_directory_uri().'/assets/images/svg/slide-1.svg';?>" class="d-block w-100" alt="AlHaytham Lab">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-5 mx-auto">
                                <div class="carousel-caption text-sm-center text-md-left text-lg-left">
                                    <h1>معمل الهيثم</h1>
                                    <p>
                                        الهيثم لاب هو بيئة تعليمية إلكترونية اجتماعية جذابة ومتعددة اللغات.
                                    </p>
                                    <button class="btn btn-warning-gradient btn-lg rounded-pill float-xl-right float-md-right float-sm-none ">المزيد</button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="<?php echo get_template_directory_uri().'/assets/images/svg/slide-1.svg';?>" class="d-block w-100" alt="AlHaytham Lab">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-5 mx-auto">
                                <div class="carousel-caption text-sm-center text-md-left text-lg-left">
                                    <h1>معمل الهيثم</h1>
                                    <p>
                                        الهيثم لاب هو بيئة تعليمية إلكترونية اجتماعية جذابة ومتعددة اللغات.
                                    </p>
                                    <button class="btn btn-warning-gradient btn-lg rounded-pill float-xl-right float-md-right float-sm-none ">المزيد</button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="<?php echo get_template_directory_uri().'/assets/images/svg/slide-1.svg';?>" class="d-block w-100" alt="AlHaytham Lab">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="arrow left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="arrow right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--end section-->

    <section class="section products w-100" id="products">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">المنتجات</h4>
                        <p class="para-desc mx-auto mb-0">
                            تقدم دلتا سوفت العديد من المنتجات المبتكرة في مختلف مجالات التكنولوجيا والتعليم الإلكتروني.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="row justify-content-center products-items mt-5">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInLeft" src="<?php echo get_template_directory_uri().'/assets/images/svg/human-anatomy.svg';?>" />
                    <h5 class="mt-3">معمل التشريح البشري</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInDown" src="<?php echo get_template_directory_uri().'/assets/images/svg/Drossey-1.svg';?>" />
                    <h5 class="mt-3">دروسي</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInRight" src="<?php echo get_template_directory_uri().'/assets/images/svg/Science-Virtual-lab-1.svg';?>" />
                    <h5 class="mt-3">مختبر العلوم الافتراضي</h5>
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section services w-100" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">الخدمات</h4>
                        <p class="para-desc mx-auto mb-0">
                            مهما كانت احتياجات التعلم الخاصة بك وتحديات الأداء ، فلدينا العديد من الخدمات للتعامل معها. </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="row justify-content-center services-items mt-5">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-5">
                    <img class="wow fadeInLeft" src="<?php echo get_template_directory_uri().'/assets/images/svg/Training.svg';?>" />
                    <h5 class="mt-3">التدريب والاستشارات</h5>
                    <p>يعتبر التدريب همزة الوصل بين الرؤية الاستراتيجية للمنظمات ومرحلة التنفيذ والتي تشمل تطبيق هذه الاستراتيجيات في العالم الحقيقي.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-5">
                    <img class="wow fadeInDown" src="<?php echo get_template_directory_uri().'/assets/images/svg/Mobile.svg';?>" />
                    <h5 class="mt-3"> تطبيقات الجوال على منصات مختلفة</h5>
                    <p>أصبح لكل منزل الآن هاتف محمول أو جهاز لوحي واحد على الأقل من مختلف الأنواع والأشكال ، وتزايدت أهمية استخدامه في الوقت الحاضر بشكل كبير
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-5">
                    <img class="wow fadeInRight" src="<?php echo get_template_directory_uri().'/assets/images/svg/3D-videos-production.svg';?>" />
                    <h5 class="mt-3">إنتاج مقاطع فيديو ثلاثية الأبعاد </h5>
                    <p>لا يمكن تطوير جميع المفاهيم العلمية باستخدام مقاطع الفيديو ثنائية الأبعاد فقط.
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInLeft" src="<?php echo get_template_directory_uri().'/assets/images/svg/Interactive-3D-objects.svg';?>" />
                    <h5 class="mt-3">كائنات تفاعلية ثلاثية الأبعاد</h5>
                    <p>تحتاج معظم المجالات العلمية مثل الفيزياء والطب والهندسة إلى أكثر من النص والصور التوضيحية لفهم مفاهيمها .
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInDown" src="<?php echo get_template_directory_uri().'/assets/images/svg/Animation-production.svg';?>" />
                    <h5 class="mt-3"> إنتاج الرسوم المتحركة</h5>
                    <p>كانت الرسوم المتحركة ولا تزال هي أفضل طريقة لشرح الموضوعات العلمية المعقدة ، على سبيل المثال ما يمكن شرحه في محاضرة لمدة ساعة بطريقة تقليدية.
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInRight" src="<?php echo get_template_directory_uri().'/assets/images/svg/Open-Edx-MOOC.svg';?>" />
                    <h5 class="mt-3">منصة Edx MOOC </h5>
                    <p>منصة Moocs مفتوحة المصدر هي تقنية تستخدم لمساعدة المتعلمين على الوصول إلى موادهم التعليمية بكفاءة وسهولة.
                    </p>

                </div>


                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section clients w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title pb-2">
                        <h4 class="title mb-4">العملاء</h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="row justify-content-center clients-items mt-5">
                <div class="owl-carousel owl-centered owl-theme">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/clients-logos/tf1-logo.jpg';?>" alt="<?php bloginfo( 'name' ); ?> Client Logo">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/clients-logos/ELogo.png';?>" alt="<?php bloginfo( 'name' ); ?> Client Logo">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/clients-logos/education-logo.png';?>" alt="<?php bloginfo( 'name' ); ?> Client Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section about w-100" id="about">
        <div class="container-fluid">
            <div class="row about-items mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12 text-left">
                    <h4 class="mb-4">تعرف علينا</h4>
                    <ul>
                        <li>دلتا سوفت هي شركة رائدة مكرسة لمساعدة المؤسسات الكبرى في حل أكثر مشاكلها صعوبة من خلال التعلم. مهمتنا هي إنشاء تجارب تعليمية رقمية مخصصة تؤدي إلى التغييرات السلوكية ونقل المعرفة اللازمة لدعم أهداف العمل الأكثر أهمية.</li>
                        <li>تأسست في عام 2010 ، ولأكثر من عقد من الزمان ، وبجهود كبيرة من 60 خبيرًا محترفًا ، قمنا بتطبيق أحدث التقنيات لدعم التحول الرقمي للتعليم التقليدي الممل إلى رقمي مثير للإعجاب المحتوى لعملائنا في الشرق الأوسط ومنطقة الخليج.</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-content-center flex-wrap">
                    <img class="wow fadeInLeft mx-auto d-block w-100" src="<?php echo get_template_directory_uri().'/assets/images/svg/about.svg';?>" />
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#myModal">

                        </button>

                    <!-- Modal -->
                    <div class="modal fade video-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">


                                <div class="modal-body">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section mobile-app w-100">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12 text-right d-flex align-content-center flex-wrap">
                    <img class="anmiupDown w-100" src="<?php echo get_template_directory_uri().'/assets/images/svg/Mobile-App.svg';?>" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-left mobile-app-items">
                    <h4 class="mb-4">تطبيقات الجوال</h4>
                    <p>نحن في دلتا سوفت نؤمن بأهمية الهواتف الذكية في مجال التكنولوجيا بشكل عام وفي مجال التعلم الإلكتروني بشكل خاص. تعمل جميع منتجاتنا وخدماتنا بكفاءة على منصات متنقلة مختلفة (Android- IOS) ، وتعمل أيضًا على تطوير وتنفيذ مواقع العملاء لتكون
                        قابلة للعرض على جميع أحجام الشاشات والأجهزة اللوحية المحمولة (تصميم سريع الاستجابة).</p>
                    <button class="btn btn-lg rounded-pill btn-primary-gradient float-xl-right float-md-right float-sm-none ">المزيد</button>
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section electronic mobile-app w-100">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-5 col-sm-12 text-left mobile-app-items electronic-items">
                    <h4 class="mb-4">المحتوى الإلكتروني</h4>
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى . </p>
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى.
                    </p>
                    <button class="btn btn-lg rounded-pill btn-warning-gradient float-xl-right float-md-right float-sm-none ">ابداء
                            الان</button>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12 text-right d-flex align-content-center flex-wrap">
                    <img class="wow fadeInRight w-100" src="<?php echo get_template_directory_uri().'/assets/images/svg/Electronic.svg';?>" />
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section a-c-integration w-100">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-7 col-md-7 col-sm-12 a-c-integration-items text-left">
                    <h4 class="mb-4">تكامل القدرة على الوصول </h4>
                    <p>
                        توفر Delta Soft خدمات التعليم الإلكتروني وتطوير المحتوى الرقمي. نحن فخورون للغاية باتباع المعايير والإجراءات والتقنيات الدولية.
                        <br> ابتكرت دلتا سوفت منهجيتها الخاصة لضمان الجودة ، والتي تضمن تقديم جميع الخدمات المقدمة وفقًا لمعايير جودة عالية ، وتلتزم الشركة بالجودة والفعالية والعائد على الاستثمار لمنتجاتنا والخدمات.
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 text-right d-flex align-content-center flex-wrap">
                    <img class="wow fadeInLeft w-100" src="<?php echo get_template_directory_uri().'/assets/images/svg/Access.svg';?>" />
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section pt-3 pb-3 w-100">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-5 col-sm-12 pt-3 pb-3 text-center">
                    <!-- <h4 class="mb-4">Global <br> presence </h4> -->
                    <img class="wow fadeInRight" class="w-75" src="<?php echo get_template_directory_uri().'/assets/images/Global-1.png';?>">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 text-right">

                    <!-- HTML -->
                    <div id="chartdiv"></div>
                    <!-- <img class="wow fadeInLeft" src="assets/images/Global-3.png" /> -->
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->
    <section class="section subscribe pt-5 pb-5 w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 pt-3 pb-3 text-center">
                    <h4 class="title">اشترك في نشرتنا الإخبارية</h4>
                    <h5 class="title mb-4">لمعرفة أخبار دلتا سوفت.</h5>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 pt-3 pb-3 text-center">
                    <form class="form-inline justify-content-center">
                        <div class="form-group mx-sm-5">
                            <input type="text" class="form-control" id="inputSubscribe" placeholder="Subscribe">
                        </div>
                        <button type="submit" class="btn btn-warning-gradient btn-lg rounded-pill">اشترك
                                الان</button>
                    </form>
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->
<?php }else{?>
<section class="home-wrapper w-100">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-5 mx-auto">
                                <div class="carousel-caption text-sm-center text-md-left text-lg-left">
                                    <h1>AlHaytham Lab</h1>
                                    <p>
                                        Alhaythamlab is an engaging and multilingual web-based social e-learning environment.
                                    </p>
                                    <button class="btn btn-warning-gradient btn-lg rounded-pill float-xl-right float-md-right float-sm-none ">More</button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="<?php echo get_template_directory_uri().'/assets/images/svg/slide-1.svg';?>" class="d-block w-100" alt="AlHaytham Lab">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-5 mx-auto">
                                <div class="carousel-caption text-sm-center text-md-left text-lg-left">
                                    <h1>AlHaytham Lab</h1>
                                    <p>
                                        Alhaythamlab is an engaging and multilingual web-based social e-learning environment.
                                    </p>
                                    <button class="btn btn-warning-gradient btn-lg rounded-pill float-xl-right float-md-right float-sm-none ">More</button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img  src="<?php echo get_template_directory_uri().'/assets/images/svg/slide-1.svg'?>" class="d-block w-100" alt="AlHaytham Lab">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-5 mx-auto">
                                <div class="carousel-caption text-sm-center text-md-left text-lg-left">
                                    <h1>AlHaytham Lab</h1>
                                    <p>
                                        Alhaythamlab is an engaging and multilingual web-based social e-learning environment.
                                    </p>
                                    <button class="btn btn-warning-gradient btn-lg rounded-pill float-xl-right float-md-right float-sm-none ">More</button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="<?php echo get_template_directory_uri().'/assets/images/svg/slide-1.svg'?>" class="d-block w-100" alt="AlHaytham Lab">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="arrow left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="arrow right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--end section-->

    <section class="section products w-100" id="products">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Products</h4>
                        <p class="para-desc mx-auto mb-0">
                            <span class="font-weight-bold"> Delta Soft</span> presents many of innovative products in different fields of Technology and E-Learning.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="row justify-content-center products-items mt-5">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                
                    <img class="wow fadeInLeft" src="<?php echo get_template_directory_uri().'/assets/images/svg/human-anatomy.svg'?>" />
                    <h5 class="mt-3">Human anatomy Lab</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInDown"  src="<?php echo get_template_directory_uri().'/assets/images/svg/Drossey-1.svg'?>" />
                    <h5 class="mt-3">Drossey</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInRight"  src="<?php echo get_template_directory_uri().'/assets/images/svg/Science-Virtual-lab-1.svg'?>" />
                    <h5 class="mt-3">Science Virtual lab</h5>
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section services w-100" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Our Services</h4>
                        <p class="para-desc mx-auto mb-0">
                            Whatever your learning needs and performance challenges, we’ve got many services to address it. </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="row justify-content-center services-items mt-5">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-5">
                    <img class="wow fadeInLeft" src="<?php echo get_template_directory_uri().'/assets/images/svg/Training.svg'?>" />
                    <h5 class="mt-3">Training and Consultation</h5>
                    <p>The training is considered the link between the strategic vision of the organizations and the execution phase which includes the application of these strategies in the real world.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-5">
                    <img class="wow fadeInDown" src="<?php echo get_template_directory_uri().'/assets/images/svg/Mobile.svg'?>" />
                    <h5 class="mt-3"> Mobile apps on different platforms</h5>
                    <p>Every house now has at least one mobile phone or tablet of various kinds and forms, and the importance of its use nowadays increased significantly
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-5">
                    <img class="wow fadeInRight" src="<?php echo get_template_directory_uri().'/assets/images/svg/3D-videos-production.svg'?>"  />
                    <h5 class="mt-3">3D videos production </h5>
                    <p>Not all scientific concepts can be developed by using 2D videos only.
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInLeft"  src="<?php echo get_template_directory_uri().'/assets/images/svg/Interactive-3D-objects.svg'?>"  />
                    <h5 class="mt-3">Interactive 3D objects</h5>
                    <p>Most of scientific fields like physics, Medicine, Engineering needs more than text and illustrative images to understand it concepts
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInDown"  src="<?php echo get_template_directory_uri().'/assets/images/svg/Animation-production.svg'?>"  />
                    <h5 class="mt-3"> Animation production</h5>
                    <p>Animation was and still is the best way to explain complex scientific topics, for example what can be explained in a lecture for an hour in a traditional way.
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <img class="wow fadeInRight" src="<?php echo get_template_directory_uri().'/assets/images/svg/Open-Edx-MOOC.svg'?>" />
                    <h5 class="mt-3">Open Edx MOOC </h5>
                    <p>Moocs open source platform is a technology used to help learners acess their learning materials efficiently and easily.
                    </p>

                </div>


                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section clients w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title pb-2">
                        <h4 class="title mb-4">Clients</h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="row justify-content-center clients-items mt-5">
                <div class="owl-carousel owl-centered owl-theme">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/clients-logos/tf1-logo.jpg'?>"  alt="<?php bloginfo( 'name' ); ?> Client Logo">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/clients-logos/ELogo.png'?>"  alt="<?php bloginfo( 'name' ); ?> Client Logo">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/clients-logos/education-logo.png'?>" alt="<?php bloginfo( 'name' ); ?> Client Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section about w-100" id="about">
        <div class="container-fluid">
            <div class="row about-items mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12 text-left">
                    <h4 class="mb-4">About Us</h4>
                    <ul>
                        <li>Delta Soft is a leading company dedicated to helping the largest organizations solve their most challenging problems through learning. Our mission is to create custom digital learning experiences that lead to the behavioral changes
                            and knowledge transfer needed to support most important business goals.</li>
                        <li>Founded in 2010, and for over a decade, with the great efforts of 60 professional experts, we have been applying the cutting edge of technology to power digital transformation of traditional boring education into impressive digitized
                            content for our clients in MENA and Gulf region.</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-content-center flex-wrap">
                    <img class="wow fadeInLeft mx-auto d-block w-100" src="<?php echo get_template_directory_uri().'/assets/images/svg/about.svg';?>"  />
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#myModal">

                        </button>

                    <!-- Modal -->
                    <div class="modal fade video-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">


                                <div class="modal-body">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section mobile-app w-100">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12 text-right d-flex align-content-center flex-wrap">
                    <img class="anmiupDown w-100" src="<?php echo get_template_directory_uri().'/assets/images/svg/Mobile-App.svg'?>"  />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-left mobile-app-items">
                    <h4 class="mb-4">Mobile App</h4>
                    <p>We in Delta Soft believe in the importance of smart phones in the field of technology in general and in the field of e-learning in particular. All our products and services operate efficiently on different mobile platforms (Android-
                        IOS), also working on the development and implementation of customer sites to be viewable on all screen sizes and mobile tablets (Responsive design).</p>
                    <button class="btn btn-lg rounded-pill btn-primary-gradient float-xl-right float-md-right float-sm-none ">More</button>
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section electronic mobile-app w-100">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-5 col-sm-12 text-left mobile-app-items electronic-items">
                    <h4 class="mb-4">Electronic content</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                    </p>
                    <button class="btn btn-lg rounded-pill btn-warning-gradient float-xl-right float-md-right float-sm-none ">GET
                            STARTED</button>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 text-right d-flex align-content-center flex-wrap">
                    <img class="wow fadeInRight w-100" src="<?php echo get_template_directory_uri().'/assets/images/svg/Electronic.svg'?>" />
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section a-c-integration w-100">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-7 col-md-7 col-sm-12 a-c-integration-items text-left">
                    <h4 class="mb-4">Access ability integration </h4>
                    <p>
                        Delta Soft provides eLearning and digital content development services. We are highly proud of following the international standards, procedures and techniques.
                        <br> Delta Soft have created its own methodology of Quality Assurance, which assure that all provided services are served in a highly quality standards, and the company is committed with quality, effectiveness and ROI for our products
                        and services.
                    </p>
                </div>

                <div class="col-lg-5 col-md-5 col-sm-12 text-right d-flex align-content-center flex-wrap">
                    <img class="wow fadeInLeft w-100" src="<?php echo get_template_directory_uri().'/assets/images/svg/Access.svg'?>" />
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->

    <section class="section pt-3 pb-3 w-100">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-5 col-sm-12 pt-3 pb-3 text-center">
                    <!-- <h4 class="mb-4">Global <br> presence </h4> -->
                    <img class="wow fadeInRight" class="w-75" src="<?php echo get_template_directory_uri().'/assets/images/Global-1.png'?>" >
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 text-right">

                    <!-- HTML -->
                    <div id="chartdiv"></div>
                    <!-- <img class="wow fadeInLeft" src="assets/images/Global-3.png" /> -->
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--end section-->
    <section class="section subscribe pt-5 pb-5 w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 pt-3 pb-3 text-center">
                    <h4 class="title">Subscribe to our newsletter</h4>
                    <h5 class="title mb-4">to hear about Delta Soft News.</h5>
                </div>
                <div id="mc_embed_signup" class="col-lg-12 col-md-12 col-sm-12 pt-3 pb-3 text-center">
                    <form action="https://gmail.us17.list-manage.com/subscribe/post?u=6f252e544904bcbae75acfc5f&amp;id=7520a26831" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"  class="validate form-inline justify-content-center" target="_blank" novalidate>
                        <div class="form-group mx-sm-5">
                            <input type="email" value="" name="EMAIL" id="mce-EMAIL"  class="required email form-control" id="inputSubscribe" placeholder="Subscribe">
                        </div>
                        <button type="submit" class="btn btn-warning-gradient btn-lg rounded-pill">Subscribe</button>


                    </form> 
                    
                    <div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6f252e544904bcbae75acfc5f_7520a26831" tabindex="-1" value=""></div>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->



                </div>
                <!--end col-->
            </div>
        </div>
    </section>
                    <?php }
                    endif;?>
<?php get_footer(); ?>
