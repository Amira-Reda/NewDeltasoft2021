<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
   

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark header-sticky">
            <div class="container-fluid p-0">
                <a class="navbar-brand" href="/">
                <?php if( WPGlobus::Config()->language == 'ar'){?>
                    <img src="<?php echo get_template_directory_uri().'/assets/images/svg/AR-Logo.svg'?>" alt="DeltaSoft" />

                    <?php }else{ ?>
                    
                    <img src="<?php echo get_template_directory_uri().'/assets/images/svg/EN-Logo.svg'?>" alt="DeltaSoft" />
                <?php }?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-auto">
                    
                    <?php $menuitems=wp_get_nav_menu_items('main menu',array());
                    foreach($menuitems as $item){ 
                        // echo var_dump($item);
                     ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $item->url;?>"><?php echo apply_filters('the_title', $item->title);?></a>
                        </li>
                    <?php }?>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" >
                        <a class="btn btn-warning rounded-pill mr-1 my-2 my-sm-0" type="submit" href="#contact">              
                              <?php if( WPGlobus::Config()->language == 'ar'){?>
                                اطلب الأن
                              <?php }else{?>
                                Request a Quote

                              <?php }?>
                              </a>
                        <div class="dropdown">
                            <button class="btn btn-success rounded-pill my-2 my-sm-0 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    EN
                            </button>

                               

                            <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a id="menu-item-9999999999" class="menu-item menu-item-type-custom menu-item-object-custom menu_item_wpglobus_menu_switch wpglobus-selector-link wpglobus-current-language menu-item-9999999999 dropdown-item" href="http://localhost/deltasoft_wordpress"><span class="wpglobus_flag wpglobus_language_name wpglobus_flag_en">EN</span></a>

                                <a id="menu-item-wpglobus_menu_switch_ar" class="menu-item menu-item-type-custom menu-item-object-custom sub_menu_item_wpglobus_menu_switch wpglobus-selector-link menu-item-wpglobus_menu_switch_ar dropdown-item" href="http://localhost/deltasoft_wordpress/ar"><span class="wpglobus_flag wpglobus_language_name wpglobus_flag_ar">AR</span></a>
                            </div> -->
                        <!-- </div> -->
                       

<?php 
/**
 * WPGlobus language switcher.
 */
if ( class_exists( 'WPGlobus' ) ): ?>
	<div class="wpglobus-selector-box dropdown-menu" aria-labelledby="dropdownMenuButton">  <?php
		
		/**
		 * Filter that prevent using language that has `draft` status.
		 * That works with module `Publish` from WPGlobus Plus add-on.
		 */
		$enabled_languages = apply_filters( 'wpglobus_extra_languages', WPGlobus::Config()->enabled_languages, WPGlobus::Config()->language );
		
		foreach ( $enabled_languages as $language ):
			$url = null;
			$is_current = true;

			if ( $language != WPGlobus::Config()->language ) {
				$url = WPGlobus_Utils::localize_current_url( $language );
				$is_current = false;
			}
            $link =WPGlobus::Config()->en_language_name[$language];	
			printf( '<a %s %s>%s</a>', ( empty( $url ) ? '' : 'href="' . esc_url( $url ) . '"' ), ( $is_current ? 'class="wpglobus-current-language dropdown-item"' : 'class="dropdown-item"' ), $link );
	  
		endforeach; ?>
	  
   </div> </div> <?php 
endif; ?>
                    </form>
                </div>
            </div>
        </nav>
    </header>

   