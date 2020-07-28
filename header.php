<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Ads: 961474359 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-961474359"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-961474359');
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<!-- for html UI-->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<!--<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
 <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
	<!--- Main style css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style_optimised.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
<!--- animation css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    <!--- owl carousel css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/owl-carousel/owl.carousel.min.css">

    <!--- animation custom css -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animation-responsive.css">
<!-- for html UI -->
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js" defer async></script>
<!---Typekit Fonts -->  
    <script src="https://use.typekit.net/xve3nod.js" defer async></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script> 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
<style>
	

.fb_iframe_widget iframe {
    width: 376px!important;
   max-width: 100%!important;
}	
.swh-social-icon ul li{
    display: none;
}
.swh-social-icon ul li:nth-child(-n+4){
    display: block;
}

</style>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	 <!-- jQuery -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.inview.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.youtube-inview-autoplay.js"></script>
<script>
// Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  function onYouTubeIframeAPIReady() {
    $('.youtube-video').inViewAutoplay({
      autohide: 1,
      modestbranding: 1,
      rel: 0,
      quality: 'hd720'
    });
  }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-21161273-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-21161273-1');
</script>


<!-- Google Code for Remarketing Tag -->
<!--
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
-->
<!--<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 961474359;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/961474359/?guid=ON&amp;script=0"/>
</div>
</noscript>-->
<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
<script type="application/ld+json">
 { "@context": "https://schema.org",
 "@type": "Organization",
 "name": "Select CITYWALK",
 "legalName" : "Select CITYWALK",
 "url": "https://www.selectcitywalk.com/",
 "logo": "https://www.selectcitywalk.com/wp-content/uploads/2017/09/logo.png",
 "foundingDate": "2003",
 "founders": [
 {
 "@type": "Person",
 "name": "Mr. Inder Sharma"
 },
 {
 "@type": "Person",
 "name": ""
 } ],
 "address": {
 "@type": "PostalAddress",
 "streetAddress": "A-3 District Centre Saket New Delhi",
 "addressLocality": "New Delhi",
 "addressRegion": "Delhi",
 "postalCode": "110017",
 "addressCountry": "India"
 },
 "contactPoint": {
 "@type": "ContactPoint",
 "contactType": "customer support",
 "telephone": "+91 11 4211 4211",
 "email": "contact@selectcitywalk.com"
 },
 "sameAs": [ 
 "https://www.facebook.com/selectcitywalkdelhi",
 "https://twitter.com/SelectCITYWALK",
 "https://www.instagram.com/selectcitywalk/",
 "https://www.youtube.com/c/Selectcitywalk",
 "https://foursquare.com/selectcitywalk",
 "https://www.pinterest.com/selectcitywalk/",
 "https://plus.google.com/+TheCitywalkNewDelhi",
 "https://selectcitywalk.com/wp-content/uploads/2017/09/snapchat-code.jpg",
 "https://en.wikipedia.org/wiki/Select_Citywalk",
 "https://in.linkedin.com/company/select-citywalk",
 "https://www.tripadvisor.in/Attraction_Review-g304551-d2154496-Reviews-Select_Citywalk-New_Delhi_National_Capital_Territory_of_Delhi.html"
 ]}
</script>

</head>
     <!---./ Top banner start ./-->
	 
<?php

global $post ;  
$get_banner_url = get_field('website_default_banner' , 25) ;
$get_banner_url_def = $get_banner_url['url'] ;
$get_banner_text_def = get_field("website_default_banner_text" , 25);
if(is_category()){
	$query_scw = get_query_var('cat');
	$get_cat = get_category($query_scw);
	$id_to_be_used = $query_scw;
	if($get_cat->parent !=""){
	  $id_to_be_used = $get_cat->parent ;
	}else{
	  $id_to_be_used = $get_cat->term_id ;
	}
	$get_banner_url = get_field('banner_image', 'category_'. $id_to_be_used);
	$get_banner_url = $get_banner_url['url'] ;
	$get_banner_text = get_field('banner_texts', 'category_'. $id_to_be_used);
	if($get_banner_url ==""){
		$get_banner_url = $get_banner_url_def ;
	}if($get_banner_text ==""){
		$get_banner_text = $get_banner_text_def ;
		?>
		<script>
	$(document).ready(function(){
		$(".swh-top-banner-text").addClass("def_scw_text");
			
	});
	</script>
		
		<?php
	}
	$logo_csr = get_field("csr_logo" , 25); // 25 is ID for -Home page
	$logo_csr['url'] = $logo_csr['url'];
	$logo_csr['alt'] = $logo_csr['alt'];
}else if(is_page()){
	$get_banner_url = get_field('banner_image', $post->ID);
	$get_banner_url = $get_banner_url['url'];
	$get_banner_text = get_field('banner_texts', $post->ID);
	if($get_banner_url ==""){
		$get_banner_url = $get_banner_url_def ;
	}if($get_banner_text ==""){
		$get_banner_text = $get_banner_text_def ;
		
		?>
		<script>
	$(document).ready(function(){
		$(".swh-top-banner-text").addClass("def_scw_text");
	});
	</script>
		
		<?php
	}
}else if(is_search()){
	$get_banner_url = $get_banner_url_def ;
	
		$get_banner_text = $get_banner_text_def ;
		?>
		<script>
	$(document).ready(function(){
		$(".swh-top-banner-text").addClass("def_scw_text");
	});
	</script>
		<?php
}else if(is_404()){

		$get_banner_url = $get_banner_url_def ;
	
		$get_banner_text = $get_banner_text_def ;
?>
		<script>
	$(document).ready(function(){
		$(".swh-top-banner-text").addClass("def_scw_text");
	});
	</script>
	
	<?php 
	
}else if(is_single()){
	/* $terms =  get_the_terms( $post->ID , 'listing_category' );
	if($terms[0]->slug == "shopping"){
			$page = get_page_by_path($terms[0]->slug);
			if ($page) {
				$pID = $page->ID;
			}
			$get_banner_url = get_field('banner_image', $pID);
			$get_banner_url = $get_banner_url['url'];
			$get_banner_text = get_field('banner_texts', $pID);
			if($get_banner_url ==""){
				$get_banner_url = $get_banner_url ;
			}if($get_banner_text ==""){
				$get_banner_text = $get_banner_text ;
			}
	}else if($terms[0]->slug == "eating"){
			$page = get_page_by_path($terms[0]->slug);
			if ($page) {
				$pID = $page->ID;
			}
			$get_banner_url = get_field('banner_image', $pID);
			$get_banner_url = $get_banner_url['url'];
			$get_banner_text = get_field('banner_texts', $pID);
			if($get_banner_url ==""){
				$get_banner_url = $get_banner_url ;
			}if($get_banner_text ==""){
				$get_banner_text = $get_banner_text ;
			}
	}else{
	$get_cat = get_the_category($post->ID);
	$id_to_be_used = $get_cat[0]->term_id ;
	if($get_cat[1]->category_parent){
		$id_to_be_used = $get_cat[1]->category_parent ;
	}else{
		if($get_cat[0]->parent !=""){
		  $id_to_be_used = $get_cat[0]->parent ;
		}else{
		  $id_to_be_used = $get_cat[0]->term_id ;
		}
	}
	
	//var_dump($get_cat);
	$get_banner_url = get_field('banner_image', 'category_'.$id_to_be_used);
	$get_banner_url = $get_banner_url['url'];
	$get_banner_text = get_field('banner_texts', 'category_'.$id_to_be_used);
	if($get_banner_url ==""){
		$get_banner_url = $get_banner_url;
	}if($get_banner_text ==""){
		$get_banner_text = $get_banner_text ;
	}
} */
$get_banner_url = get_field('website_default_banner' , 25) ;
$get_banner_url = $get_banner_url['url'] ;
$get_banner_text = get_field("website_default_banner_text" , 25);
}else if(is_home()){
	
	$get_banner_url = get_field('banner_image', $post->ID);
	$get_banner_url = $get_banner_url['url'];
	$get_banner_text = get_field('banner_texts', $post->ID);
	if($get_banner_url ==""){
		$get_banner_url = $get_banner_url_def ;
	}if($get_banner_text ==""){
		$get_banner_text = $get_banner_text_def ;
	?>
	<script>
	$(document).ready(function(){
		$(".swh-top-banner-text").addClass("def_scw_text");
	});
	</script>
	
	<?php
		
	}
}



?> 
<script>  
      $(document).ready(function(){
		 

        function getCookie(key) {
            var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
            return keyValue ? keyValue[2] : null;
        }
		if(getCookie('scw_subscrb_cookies') == 1 || getCookie('scw_subscrb_cookies') == "1"){
			$(".subscribtion-banner").css({'display':'none'});
		}else{
			$(".subscribtion-banner").css({'display':'block'});
		}
		 
	  });
	  </script>
	  
<body <?php body_class();   ?>>

	


<!-- Load Facebook SDK for JavaScript -->
<!-- <div id="fb-root"></div> -->
<!-- <script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 -->
<!-- Your customer chat code --><!-- 
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="93881236428">
</div> -->
   <!---./ Top Header start ./-->
    <?php $args=array(15388,15429,16532); if(!is_page($args)){ ?>
    <div class="swh-top-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-6">
		   <?php $logo = get_field('logo' , 25); ?>
            <div class="swh-logo">
              <a class="wl" href="<?php bloginfo('url'); ?>/home"><img src="<?php if(is_category() && $query_scw == 37){ echo $logo_csr['url'] ; } /* 9308 == is for page Monochrome Affaire*/ elseif($post->ID == 9308 || $post->ID == 10031){ $mono_logo = get_field('monochrome_logo' , 25); echo $mono_logo['url']; } else{echo $logo['url']; } ?>" alt="<?php if(is_category() && $query_scw == 37){ echo $logo_csr['alt'] ; } else {echo $logo['alt']; } ?>"/></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="swh-social-icon">
              <?php wp_nav_menu(array('menu' => 'Footer Social Menu')); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

    <div class="swh-top-banner <?php if($post->ID != 25){?>inner-page-banner<?php } ?>">
      <div class="swh-top-banner-cover"> 
	  <?php $want_to_display_slider = get_field('want_to_display_slider' , 25); ?>
	  <?php if($want_to_display_slider == "no"){ ?>
		  <div class="sw-top-banner-img no-slide -sel-no" style="background-image: url(<?php echo $get_banner_url ; ?>);"></div>
	  <?php }elseif($want_to_display_slider == "yes"){ ?>
	  <?php if($post->ID == 10798){ ?>
		<div class="sw-top-banner-img no-slide -sel-no" style="background-image: url(<?php echo $get_banner_url ; ?>);">
			<div class="enter-about-padd counter-wrapper">  
        <div id="result" class="animated fadeIn"><span class="first animated flipInX">Loading...</span></div>
			<div id="result_format"><span></span></div>
			<div id="odometer" class="odometer" style="display:none;"></div> 
		 
         
           </div>
		</div>
	  
	  <?php }else{ ?>
			<div id="homeslider" class="owl-carousel owl-theme">
					<?php $getSlider = get_field('slider_fetch_from' , 25 , false); 
					query_posts('cat='.$getSlider.'&showposts=-1'); ?>
					<?php while(have_posts()):the_post(); ?>
					<?php if(get_field('redirect_url' , $post->ID)){ ?>
					<a href="<?php echo get_field('redirect_url' , $post->ID); ?>" <?php if(get_field('redirect_to_new_tab' , $post->ID) == "yes"){ ?>target="_blank" <?php } ?>>
					 <?php } ?>
                       <div class="sw-top-banner-img <?php echo $want_to_display_slider ; ?>-slide -sel-<?php echo $getSlider; ?>" style="background-image: url(<?php if ( wp_is_mobile() ) : echo get_field('mobile_banner_image')['url']; else : echo get_the_post_thumbnail_url($post->ID , 'full') ; endif; ?>);"></div><?php if(get_field('redirect_url' , $post->ID)){ ?>
					   </a>
					   <?php } ?>
                      <?php endwhile; wp_reset_query(); ?>
                      
                    </div>
	  <?php } ?>
	         
	  
	  <?php }else{ ?>
        <div class="sw-top-banner-img no-slide -sel-null" style="background-image: url(<?php echo $get_banner_url ; ?>);"></div>

	  <?php } ?>	   
		<?php if($get_banner_text !=""){ ?>
		<?php if($want_to_display_slider == "no"){ ?>
        <div class="swh-top-banner-text wow fadeInUp">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <?php echo $get_banner_text ; ?>
              </div>
            </div>
          </div>
        </div>
		<?php } ?>
		<?php } ?>
      </div>
    </div>
    
    
    <!---./ Top banner filter start ./-->
    
    <div class="swh-bannner-filter">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="swh-bannner-search">
              
              
              
              <div class="input-group">
			  <?php if($post->ID == 10662){ ?>
			  <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
			  <?php }else{ ?>
			  <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                <!--<div class="input-group-btn search-panel">
                  <button type="button" class="btn btn-default dropdown-toggle search-filter-swh" data-toggle="dropdown" role="CategoryFilter" aria-label="CategoryFilter">
                  <em class="fa fa-th" aria-hidden="true" title="Category Filter"></em>
                  <span id="search_concept">All</span>
                  <em class="fa fa-angle-down" aria-hidden="true" title="Category Filter"></em>
                  </button>
                  <ul class="dropdown-menu search_bar_scw" role="menu">
                    <li><a href="#" data-type="all">All</a></li>
                    <li><a href="#" data-type="term" data-val="shopping">Shopping</a></li>
                    <li><a href="#" data-type="term" data-val="eating">Eating</a></li>
                    <!--<li><a href="#">Entertainment</a></li>-->
                    <!--<li><a href="#" data-type="cat" data-val="93">Events</a></li>
                    <!--<li><a href="#" data-type="post_type" data-val="services">Services</a></li>-->
                    <!--<li><a href="#" data-type="cat" data-val="2">Blog</a></li>  
                  </ul>
                </div>-->
				<!-- -->
				<!--<form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
					
					
					<input type="text" class="form-control" name="s" value="<?php echo get_search_query() ?>"  placeholder="Enter Keyword" title="Enter Keyword">
					<span class="input-group-btn">
					  <button class="btn btn-default ser-icon-swh" type="submit"><em class="fa fa-search" aria-hidden="true" title="search"></em></button>
					  <input type="hidden" name="post_param" value="all" id="search_param">
					</span>
				</form>-->
				
				<!-- -->
			  <?php } ?>
              </div>
              
              
              
            </div> 
          </div>
		  <?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) { ?>
          <div class="col-sm-12 col-md-6">
            <div class="swh-bannner-detail">
              
              <?php dynamic_sidebar('fourth-footer-widget-area'); ?>
              
            </div>
          </div>
		  <?php } ?>
        </div>
        
      </div>
    </div>
    
    
    
    <!--/. Navbar start /.-->
    
    <div class="swh-navbar">
	  <?php wp_nav_menu( array('menu' => 'Header Menu', 'container' => '', 'items_wrap' => '<ul class="nav nav-justified">%3$s</ul>' )); ?>
	  <div class="sw-footer-navbar visible-xs">
          <?php wp_nav_menu(array('menu' => 'Footer Menu')); ?>
        </div>
		<div class="sw-footer-social visible-xs">
            <?php wp_nav_menu(array('menu' => 'Footer Social Menu')); ?>
        </div>
    </div>
	<?php if($post->ID != 25){ ?>
	<!--/. breadcrumb start /.-->
      
     <div class="common-breadcrumb clearfix" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php
		if(function_exists('bcn_display'))
		{
				bcn_display();
		}?>
    </div> 
	<?php } ?>
	<?php } ?>