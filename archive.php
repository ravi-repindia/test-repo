<?php

get_header();
$category = get_queried_object(); 
//var_dump($category); 
$currentCat = $category->term_id; 
$currentcatparnt = $category->parent;


$brand_listing_title = get_field('brand_listing_title');
$brand_listing_background = get_field('brand_listing_background', 297);

$taxonomy = "brand_category";

?>
<main class="inner-common-container white-bg">
    <div class="shopping-page">
     <section class="shop-modern-sec">
      <div class="container-fluid">
        <div class="row">
          <?php echo category_description(); ?>
        </div>   
      </div>   
     </section>
     <section class="shop-brands-sec" style="background-image:url('<?php echo $brand_listing_background['url']; ?>');" id="view_brand">
        <div class="container-fluid container-comm">
          <div class="row">
            <div class="col-sm-12">
            <?php //if($brand_listing_title !=""){ ?>
				<div class="shop-brands-head">
              <h1 class="title"><?php echo $category->name ; ?></h1>    
            </div>
			
			<?php //} ?>
			<div>
			 <?php 
						    $current_category = single_cat_title("", false); 
							$currentTerm = get_query_var( 'term' );
							$paged = (get_query_var('paged'))? get_query_var('paged') : 1;


									// The Arguments
									$post_args = array(
			'taxonomy'    => $taxonomy,
            'post_type' => 'brands',
			'field' => 'slug',			
			'post_status' => 'publish',
			'term' =>  $currentTerm,
			'posts_per_page'=>-1,
			'paged' => $paged,
		    
        );  

									// The Query
									$the_query = new WP_Query( $post_args );
									
									// If we have the posts...
									if ( $the_query->have_posts() ) : ?>
	  <div class="shop-brands-logos wow fadeInUp">
						<div id="search-results">
						<section class="tenant">
						<section class="list-inline-output">
						<?php 

								   // Start the loop the loop --> 
										 while ( $the_query->have_posts() ) : $the_query->the_post(); 
										$productThumb = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID(),'thumbnail') ); 
										
										 $title = get_the_title($post->ID);
					$title_explode_on_space = explode(" " , $title);
					if(count($title_explode_on_space) > 0){
						$title_explode_on_space = $title_explode_on_space[0];
						$title_explode_on_space = substr($title_explode_on_space, 0, 1);
					}else{
						$title_explode_on_space = substr($title, 0, 1);
					}
					if($brand_title_aplphabet == $title_explode_on_space){
						$post_id[] = $post->ID ;
					}
			?>
						
						
						
					<div class="data_scw loading-posts p-<?php echo $post->ID ; ?>" data-alpha="<?php echo $title_explode_on_space ; ?>">
						 <ul>
						 <?php $athmnt_id = get_post_thumbnail_id( $post->ID ); ?>
						  <?php $image_alt = get_post_meta( $athmnt_id , '_wp_attachment_image_alt', true); ?>
						  
						    <li><a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $image_alt; ?>" longdesc="<?php echo get_attachment_link( $athmnt_id ); ?>"/></a></li>
							<li class="hours">
							<?php if(get_field('address') !=""){ echo get_field('address'); }else { echo " - " ; } ?>
							   
							</li>
							<li><?php if(get_field('phone_and_email_address') !=""){ echo get_field('phone_and_email_address'); }else { echo " - " ; } ?></li>
							<li><a href="<?php the_permalink(); ?>" class="btn test_read_scw"><em class="fa fa-caret-right" aria-hidden="true" title="Filter"></em>Explore</a></li>
						 </ul>
						 
					  </div>
					<?php
				endwhile; endif; ?>  
				
					  </section>
						 </section>
						</div>
					</div>
					<!--<div class="row nav_load_more_scw">
              <div class="col-sm-12">
                
              </div>
            </div>
			<div class="col-sm-12">
			<div class="ack-scw pbd-alp-placeholder-2"></div>
			<p id="pbd-alp-load-posts" class="pbd_shopping_scw_new"><a class="pbdscw" href="javascript:void(0);" data-op="dc_c" data-cat="" data-floor="" data-alpha="" data-type="" data-maxp="<?php// echo $the_query->found_posts ; ?>" data-posts="20">Load More</a></p>
			<div id="loading-icon" style="display: none;margin-left:50px;"><img width="45" height="45" src="<?php //bloginfo('template_directory'); ?>/images/loader.gif" alt="Loader" /></div>
			</div>-->
			</div>
			
			
     </div>  
     </div>  
     </div>  
	 </section>
 </main>
      
					
 <?php wp_reset_postdata(); get_footer(); ?>