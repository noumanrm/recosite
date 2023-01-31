<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?=  bloginfo( 'title' ); ?></title>
    <meta name="viewport" content="width=device-width">

    <?php $gtm_id = get_field( 'tag_manager_id', 'options' );
    if($gtm_id): ?>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', '<?= $gtm_id ?>');
    </script>
    <!-- End Google Tag Manager -->
    <?php endif; ?>

    <?php $ga_code = get_field('google_analytics_code', 'options');
    if($ga_code): ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $ga_code ?>"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', '<?= $ga_code ?>');
    </script>
    <?php endif; ?>

	<script type="text/javascript" src="//cdn.rlets.com/capture_configs/cb0/bcb/e1a/7244031a3059fcb643596cb.js" async="async"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-103789117-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<script type='application/ld+json'> 
	{
	  "@context": "http://www.schema.org",
	  "@type": "ProfessionalService",
	  "name": "RECO Institute",
	  "url": "http://recoinstitute.wpengine.com/",
	  "sameAs": [
		"https://www.instagram.com/recointensive/",
		"https://twitter.com/recoinstitute",
		"https://www.youtube.com/channel/UCm8_P2MMBvL71cpQaPfMykA",
		"https://www.facebook.com/recoinstitute/",
		"https://plus.google.com/+RECOInstituteDelrayBeach"
	  ],
	  "logo": "http://2onngf3b1s5eegnnq2wfi16y.wpengine.netdna-cdn.com/wp-content/uploads/2016/05/logo.jpg",
	  "image": "http://2onngf3b1s5eegnnq2wfi16y.wpengine.netdna-cdn.com/wp-content/uploads/2016/06/tower1-302x175.jpg",
	  "description": "Sober living in Delray Beach Florida is available at RECO Institute. We are a leader in residential housing facilities for sober living with proven success.n",
	  "address": {
		"@type": "PostalAddress",
		"streetAddress": "1200 NW 17th Ave.",
		"addressLocality": "Delray Beach",
		"addressRegion": "FL",
		"postalCode": "33445",
		"addressCountry": "United States"
	  },
	  "geo": {
		"@type": "GeoCoordinates",
		"latitude": "26.4768239",
		"longitude": "-80.08955689999999"
	  },
	  "hasMap": "https://goo.gl/maps/Vv39XsirQtx",
	  "openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 07:00-22:00",
	  "contactPoint": {
		"@type": "ContactPoint",
		"contactType": "Customer Service ",
		"telephone": "+1 (561) 665-1865 "
	  },
			  "telephone": "+1 (561) 665-1865",
			  "priceRange": "Call for quote"
			}
	 </script>

    
    <link rel="icon" type="image/png" href="/wp-content/themes/ogkbase/images/recofav.ico">
    <link rel="" href="<?php bloginfo('template_url'); ?>/assets/sass/lightbox.css">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

    <script>
    // Set the options to make LazyLoad self-initialize
    window.lazyLoadOptions = {
        elements_selector: ".lazy",
        // ... more custom settings?
    };
    // Listen to the initialization event and get the instance of LazyLoad
    window.addEventListener('LazyLoad::Initialized', function(event) {
        window.lazyLoadInstance = event.detail.instance;
    }, false);

    function checkWebP(callback) {
        var webP = new Image();
        webP.onload = webP.onerror = function() {
            callback(webP.height == 2);
        };
        webP.src =
            'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
    };
    checkWebP(function(support) {
        if (support) {
            jQuery(document.body).addClass('webp');
        } else {
            jQuery(document.body).addClass('no-webp');
        }
    });
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

	<style>
		html {
		  scroll-behavior: smooth;
		}
		.admission-speciallist-content-outerwrap{ justify-content: center!important; }
		#apexchat_bar_invitation_frame { display: none!important; }
		video {
			clip-path: inset(1px 1px);
		}
        .camping-trip-signup-section {
			padding: 204px 20px 100px;
			max-width: 800px;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>

<body <?php body_class(); ?>>

    <?php if($gtm_id): ?>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=<?= get_field( 'tag_manager_id', 'options' ) ?>"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <?php endif; ?>

    <header class="header-outerwrap-section">
        <div class="header-desktop">
            <div class="header-top-section">
                <ul>
                    <li>
                        <a href="<?php echo get_home_url(); ?>/contact">Help for Yourself</a>
                    </li>
                    <li>
                        <a href="<?php echo get_home_url(); ?>/contact">Help for a Loved One</a>
                    </li>
                    <li>
                        <a href="<?php echo get_home_url(); ?>/contact">Referring Professionals</a>
                    </li>
                </ul>
            </div>
            <div class="header-innerwrap-section">
                <div class="header-left">
                    <div class="header-logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/header-logo.svg" alt="reco-logo">
                        </a>
                    </div>
                    <div class="header-navbar">
                         <!-- <ul>
                            <li class="mega-menu">
                                <a href="<?php echo get_home_url(); ?>/our-team">about us</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/our-team">our staff</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/accreditations">accreditations</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/mission-statement">Mission Statement</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/our-alumni">our alumni</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/alumni-buddy">alumni buddy</a>
                                    </li>
                                    
                                    <div class="sub-menu-content">
                                        <h3>"Allowed me to build a life for myself."</h3>
                                        <p>Sober housing that RECO Institute provides is a cut above the rest all
                                            their
                                            houses are safe...</p>
                                        <a href="<?php echo get_home_url(); ?>/testimonials">Alumni Testimonials</a>
                                    </div>
                                   
                                </ul>
                            </li>
                            <li class="mega-menu">
                                <a href="<?php echo get_home_url(); ?>/our-alumni">alumni resources</a>
                                <ul class="sub-menu">
                                    <li>
                                        <span>Whats the Word</span>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/reco-alumni-blog">Alumni Blog</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/reco-media">Media</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/testimonials">Alumni Testimonials</a>
                                    </li>
                                    <li>
                                        <span>Activities</span>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/events">Alumni Events</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/reco-alumni-camping-trip">Camping Trips</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/find-a-meeting">Find Meetings</a>
                                    </li>
                                    
                                        <a href="<?php echo get_home_url(); ?>/our-featured-may-alumn-meet-katherine/">
                                            <div class="sub-menu-content">
                                                <span>featured post</span>
                                                <img src="<?php bloginfo('template_url'); ?>/images/alumniresources-img.png"
                                                    alt="">
                                                <p>4 ways regular yoga practice can give you a health leg up</p>
                                            </div>
                                        </a>
                                   
                                </ul>
                            </li>
                            <li class="mega-menu">
                                <a href="<?php echo get_home_url(); ?>/our-properties">our properties</a>
                                <ul class="sub-menu">
                                    <li>
                                        <span>Female Residences</span>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/the-hart/">The Hart</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/the-siebold/">The Siebold</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/the-van-epps/">The Van Epps</a>
                                    </li>
                                    <li>
                                        <span>Clinical & Administrative</span>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/reco-towers/">Reco Towers</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/reco-ranch/">Reco Ranch</a>
                                    </li>
                                    <li>
                                        <span>Male Residences</span>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/the-parker/">The Parker</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/the-tapper/">Reco Tapper</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/the-row/">Reco Row</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/check-availability">Check Availability</a>
                                    </li>
                                    
                                        <div class="recidences-outerwrap">

                                        <a href="<?php echo get_home_url(); ?>/ourproperties/the-parker/">
                                            <img src="<?php bloginfo('template_url'); ?>/images/male-residence.svg"
                                                alt="">
                                        </a>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/the-hart/">
                                            <img src="<?php bloginfo('template_url'); ?>/images/female-residence.svg"
                                                alt="">
                                        </a>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/reco-towers/">
                                            <img src="<?php bloginfo('template_url'); ?>/images/reco-towers.svg" alt="">
                                        </a>
                                        <a href="<?php echo get_home_url(); ?>/ourproperties/reco-ranch/">
                                            <img src="<?php bloginfo('template_url'); ?>/images/reco-ranch.svg" alt="">
                                        </a>
                                        
                                        </div>
                                    

                                </ul>
                            </li>
                            <li class="mega-menu">
                                <a href="<?php echo get_home_url(); ?>/admissions">admissions</a>
                                <ul class="sub-menu">

                                    <li>
                                        <a href="sober-living-housing-guidelines">Sober Living Housing Guidelines</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/check-availability">Availability</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/addiction-treatment/">Addiction Treatment</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/admissions-faqs">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_home_url(); ?>/verify-insurance/">verify Insurance</a>
                                    </li>

                                    
                                        <div class="sub-menu-content">
                                            <img src="<?php bloginfo('template_url'); ?>/images/admissions-img.png"
                                                alt="">
                                        </div>
                                    
                                </ul>
                            </li>
                            <li class="mega-menu">
                                <a href="https://www.recoshop.com/">reco shop</a>
                                <ul class="sub-menu">
                                    <li>
                                        <div class="sub-menu-content">
                                            <h3>Shop fearless looks</h3>
                                            <p>Wear your heart on yours sleeve with our clothing tailored towards what
                                                makes
                                                you uniquely you.</p>
                                            <a href="https://www.recoshop.com/">Reco Shop</a>
                                        </div>
                                    </li>
                                    
                                    <div class="sub-menu-content-images-outerwrap">
                                            <div class="sub-menu-content-innerwrap">
                                                <div class="sub-menu-content-images-innerwrap">
                                                    <img src="<?php the_sub_field('shop_image_one'); ?>"alt="">
                                                </div>
                                                <div class="sub-menu-content-images-innerwrap">
                                                    <img src="<?php the_sub_field('shop_image_two'); ?>"alt="">
                                                </div>
                                            </div>
                                            <div class="sub-menu-content-innerwrap">
                                                <img src="<?php the_sub_field('shop_image_three'); ?>"alt="">
                                            </div>
                                        </div>
                                    
                                </ul>
                            </li>
                            <li class="mega-menu">
                                <a href="<?php echo get_home_url(); ?>/contact">contact</a>
                                <ul class="sub-menu">
                                    <li>
                                        <span>RECO Institute</span>
                                    </li>
                                    <li>
                                        <p><a href="https://goo.gl/maps/KakrF7V4JfNDkVJp6" target="_blank">140 NE 4th Avenue Delray Beach, FL33483</a></p>
                                    </li>
                                    <li>
                                        <a href="tel:561.237.7368"><b>Local</b> 561.237.7368</a>
                                    </li>
                                    <li>
                                        <a href="tel:855.799.1035"><b>Toll-Free</b> 855.799.1035</a>
                                    </li>
                                    <li>
                                        <b>renew.restore.recover.</b>
                                    </li>

                                    <div class="social-icons">
                                        <a target="_blank" href="https://www.instagram.com/recointensive/"><img
                                                src="<?php bloginfo('template_url') ;?>/images/instagram.svg"
                                                alt=""></a>
                                        <a target="_blank" href="https://www.facebook.com/recoinstitute/"><img src="<?php bloginfo('template_url') ;?>/images/fb.svg"
                                                alt=""></a>
                                        <a target="_blank" href="https://twitter.com/recoinstitute"><img src="<?php bloginfo('template_url') ;?>/images/twitter.svg"
                                                alt=""></a>
                                        <a target="_blank" href="youtube.com/channel/UCm8_P2MMBvL71cpQaPfMykA"><img src="<?php bloginfo('template_url') ;?>/images/youtube.svg"
                                                alt=""></a>
                                    </div>
                                    
                                        <div class="sub-menu-content">
                                            <img src="<?php bloginfo('template_url') ;?>/images/map.svg" alt="">
                                        </div>
                                    
                                </ul>
                            </li>
                        </ul> -->


                          <ul>
                        <?php
                        if( have_rows('mega_nav_items','options') ):
                        
                            while( have_rows('mega_nav_items','options') ) : the_row(); ?>
                            <li class="mega-menu">
                                <a href="<?php the_sub_field('main_nav_link','options'); ?>"><?php the_sub_field('main_nav_link_title','options'); ?></a>
                                <?php
                                
                                if( have_rows('mega_columns','options') ): 
                                    
                                ?>
                                 <ul class="sub-menu">
                                    <?php while( have_rows('mega_columns','options') ) : the_row();  
                                    $menu_type_heading = get_sub_field('menu_type_heading','options');
                                    $menu_link = get_sub_field('link','options');
                                    $menu_link_text = get_sub_field('link_text','options');
                                    ?>

                                    <?php if( $menu_type_heading ) { ?>    
                                    <li>
                                        <span><?php echo $menu_type_heading; ?></span>
                                    </li>
                                    <?php } ?>
                                    <?php if ($menu_link) { ?>
                                    <li>
                                        <a href="<?php echo $menu_link;  ?>"><?php echo $menu_link_text;  ?></a>
                                    
                                    </li>
                                    <?php } ?>
                                    <?php endwhile; ?>
                                    <?php if( have_rows('right_section_content') ): ?>
                                        <?php while( have_rows('right_section_content') ): the_row(); ?>
                                        <?php if( get_row_layout() == 'about_us_right_col' ) : ?>
                                    <div class="sub-menu-content">
                                        <h3><?php the_sub_field('heading') ?></h3>
                                        <?php the_sub_field('sub_content') ?>
                                        <a href="<?php the_sub_field('page_link') ?>">Alumni Testimonials</a>
                                    </div>
                                    <?php elseif( get_row_layout() == 'featured_alumni_post' ) : ?>
                                        <a href="<?php the_sub_field('post_url') ?>">
                                            <div class="sub-menu-content">
                                                <span>featured post</span>
                                                <img src="<?php the_sub_field('post_image') ?>"
                                                    alt="">
                                                <p><?php the_sub_field('post_title') ?></p>
                                            </div>
                                        </a>
                                        <?php elseif( get_row_layout() == 'residences_images_' ) : ?>
                                        <div class="recidences-outerwrap">  
                                        <?php while( have_rows('residences') ): the_row(); ?>
                                        <a href="<?php the_sub_field('residences_link'); ?>">
                                            <img src="<?php the_sub_field('residence_image'); ?>"
                                                alt="">
                                        </a>
                                    
                                    <?php endwhile; ?>
                                        </div>
                                        <?php elseif( get_row_layout() == 'admissions' ) : ?>
                                        <div class="sub-menu-content">
                                            <img src="<?php the_sub_field('admissions_image'); ?>"
                                                alt="">
                                        </div>
                                        
                                        <?php elseif( get_row_layout() == 'shop' ) : ?>
                                        <div class="sub-menu-content">
                                            <h3><?php the_sub_field('heading'); ?></h3>
                                            <?php the_sub_field('sub_content'); ?>
                                            <a href="<?php the_sub_field('page_link'); ?>">Reco Shop</a>
                                        </div>
                                        
                                    
                                        <div class="sub-menu-content-images-outerwrap">
                                            <div class="sub-menu-content-innerwrap">
                                                <div class="sub-menu-content-images-innerwrap">
                                                    <img src="<?php the_sub_field('shop_image_one'); ?>"alt="">
                                                </div>
                                                <div class="sub-menu-content-images-innerwrap">
                                                    <img src="<?php the_sub_field('shop_image_two'); ?>"alt="">
                                                </div>
                                            </div>
                                            <div class="sub-menu-content-innerwrap">
                                                <img src="<?php the_sub_field('shop_image_three'); ?>"alt="">
                                            </div>
                                        </div>
                                        <?php elseif( get_row_layout() == 'contact_social_icons' ) : ?>
                                            
                                        <div class="social-icons">
                                        <?php while( have_rows('social_icons') ): the_row(); ?>
                                        <a target="_blank" href="<?php the_sub_field('social_links'); ?>"><img
                                                src="<?php the_sub_field('icon'); ?>"
                                                alt=""></a>
                                        <?php endwhile; ?>
                                    </div>
                                    
                                        <div class="sub-menu-content">
                                            <img src="<?php the_sub_field('map_image'); ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php
                            endwhile;
                        endif;
                            ?>
                        </ul>  
                    </div>
                </div>
                <div class="contact-no">
                    <a href="#" class="mega-menu">844.960.3156</a>
                    <ul>
                        <li><a href="#" onclick="navigator.clipboard.writeText('844.960.3156')">copy</a></li>
                        <li><a href="tel:844.960.3156">call now</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-mobile-outerwrap">
            <div class="hamburger-nav">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header-mobile-top">
                <div class="mobile-logo">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/header-logo.svg" alt=""></a>
                </div>
                <div class="contact-no">
                    <a href="#">844.960.3156</a>
                    <ul>
                        <li><a href="#" onclick="navigator.clipboard.writeText('844.960.3156')">copy</a></li>
                        <li><a href="tel:844.960.3156">call now</a></li>
                    </ul>
                </div>

            </div>
            <div class="header-mobile-topwrap">
                <div class="header-mobile-help-service">
                    <h4>Get Help Anytime, 24/7 for</h4>
                    <ul>
                        <li><a href="/contact">Yourself</a></li>
						<li><a href="/contact">A Loved One</a></li>
						<li><a href="/contact">Professionals</a></li>
                    </ul>
                </div>
                <div class="header-mobile-nav">
                    <?php
                wp_nav_menu( array(
                    'menu' => 'mobile-menu'
                ) );
                ?>
                </div>
                <div class="header-contact-info">
                    <div class="header-contact-info-contact">
                        <a href="tel:561.464.6505"><span>local </span>561.464.6505</a>
                        <a href="tel:844.955.3042"><span>Toll Free </span>844.955.3042</a>
                        <a href="tel:561.450.6637"><span>Fax </span>561.450.6637</a>
                        <a href="#"><b>info@recointensive.com</b></a>
                    </div>
                    <div class="header-contact-info-address">
                        <p>140 NE 4th Ave, Delray Beach, FL</p>
                    </div>
    
                    <div class="header-contact-info-social-icons">
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/recointensive/" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/images/insta-pink.svg" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/recoinstitute/" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/images/fb-pink.svg" alt="facebook">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/recoinstitute" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/images/twitter-pink.svg" alt="twitter">
                                </a>
                            </li>
                            <li>
                                <a href="youtube.com/channel/UCm8_P2MMBvL71cpQaPfMykA" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/images/youtube-pink.svg" alt="you-tube">
                                </a>
                            </li>
    
                        </ul>
                    </div>
                    <div class="header-mobile-bottom">
                        <div class="header-copyright">
                            <p><span>©2020 RECO Intensive</span> Delray Beach Addiction Treatment Center <span> All Rights Reserved | Legal</span></p>
                        </div>
                        <div class="header-bottom-left">
                            <ul>
                                <li>
                                    <a href="/accreditations">
                                        <img src="<?php bloginfo('template_url'); ?>/images/RECO_Accreditations.png" alt="">
                                    </a>
                                </li>
                          
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main class="site-content">