<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

<!---./ Footer upper section /.--> 
 <?php // if(!is_404()){ ?>     

 <style>
/*.loader {background:#393939 url('<?php bloginfo('template_url'); ?>/images/loader-scw.gif') 50% 50% no-repeat;position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 9999;}*/
  select::-ms-expand {
    display: none;
}  



/*.winter-is-coming, .snow {
  z-index: 100;
  pointer-events: none;
}
.winter-is-coming {
  overflow: hidden;
  position: absolute;
  top: 0;
  height: 100%;
  width: 100%;
  max-width: 100%;
}
.snow {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  animation: falling linear 1 both;
  transform: translate3D(0, -100%, 0);
}
.snow--near {
  animation-duration: 20s;
  background-image: url('https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-large-075d267ecbc42e3564c8ed43516dd557.png');
  background-size: contain;
}
.snow--near + .snow--alt {
  animation-delay: 5s;
}
.snow--mid {
  animation-duration: 30s;
  background-image: url('https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-medium-0b8a5e0732315b68e1f54185be7a1ad9.png');
  background-size: contain;
}
.snow--mid + .snow--alt {
  animation-delay: 10s;
}
.snow--far {
  animation-duration: 40s;
  background-image: url('https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-small-1ecd03b1fce08c24e064ff8c0a72c519.png');
  background-size: contain;
}
.snow--far + .snow--alt {
  animation-delay: 15s;
}
@keyframes falling {
  0% {
    transform: translate3D(-7.5%, -100%, 0);
  }
  100% {
    transform: translate3D(7.5%, 100%, 0);
  }
}*/

@media only screen and (max-width: 767px){
.swh-navbar {
    overflow-y: scroll;
}
    
</style>      
    
<!--CSS Spinner-->
<?php if(is_home()){ ?>
<div class="loader"></div> 	
<?php } ?>
   

          
   <!--- ./OverLay./ --->
   <div class="overlayaccessibility"></div>
   <!--- ./Scroll to top feature./ --->
      
	<div class="scroll-top-wrapper ">
		<span class="scroll-top-inner">
			<em class="fa fa-angle-up" aria-hidden="true" title="Go To Top" ></em>
		</span>
	</div> 
      
      
    
    <!---./ Footer Start ./-->
    
    <footer>
      <div class="sw-footer">
        
          
        <div class="sw-footer-mobsocial">
         <div class="container-fluid">   
        
			<div class="row">
				<!--<div class="col-sm-12 footer-logo">
					<a href="https://www.tripadvisor.in/Attraction_Review-g304551-d2154496-Reviews-Select_Citywalk-New_Delhi_National_Capital_Territory_of_Delhi.html" target="_blank"><img src="http://primary.tiinfotech.net/~citywalk/wp-content/themes/scw/images/footer-logo.png" alt="Trip Advisor" class="img-responsive"></a>
				</div>-->
				<div class="col-sm-12">
					<div class="sw-footer-social wow fadeInUp">
						<?php wp_nav_menu(array('menu' => 'Footer Social Menu')); ?>
					</div>
				</div>
			</div>
           
          <div class="row"> 
            <div class="col-sm-12">
              <div class="sw-footer-signup"> 
                
                <div class="input-group">
                  <!--<input type="text" class="form-control" placeholder="Your Email address here...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Sign Up</button>
                  </span>-->
				  <?php echo do_shortcode('[email-subscribers namefield="NO" desc="" group="Public"]'); ?>
                </div>
                
              </div>
            </div>
          </div>
            </div>
        </div> 
            
            
        <div class="sw-footer-mobmenu">
			<div class="container-fluid">  
				<div class="row">
					<div class="col-sm-12 hidden-xs">
						<div class="sw-footer-navbar">
							<?php wp_nav_menu(array('menu' => 'Footer Menu')); ?>
						</div>
					</div>
				</div>
          
				<div class="row">
				
					
					
					<div class="col-sm-12">		<p style="text-align: center;font-size: 11px;
font-family: 'sofia-pro', sans-serif;
letter-spacing: 0px;
color: #787878;">* Timings of the individual establishments at the mall may vary. Kindly check the same with the respective stores.</p>
						<?php dynamic_sidebar('Footer Bottom Widget Area'); ?>
					</div>
					
				</div>
            </div>    
        </div>      
            
 
      </div>
    </footer>   
	<!-- Load Facebook SDK for JavaScript -->
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>


<!-- Your customer chat code --> 
<div class="fb-customerchat" attribution="setup_tool" page_id="93881236428" minimized=true >  </div> 
 <?php //} ?>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>


<!-- <div class="winter-is-coming">
  
  <div class="snow snow--near"></div>
  <div class="snow snow--near snow--alt"></div>
  
  <div class="snow snow--mid"></div>
  <div class="snow snow--mid snow--alt"></div>
  
  <div class="snow snow--far"></div>
  <div class="snow snow--far snow--alt"></div>
</div> -->

    <!-- Main JS (Do not remove) -->
    <script src="<?php bloginfo('template_url'); ?>/js/scripts_optimised.js"></script>
    <!-- owl carousel js-->
	<?php if(is_page(15388)) { echo ""; } else {  ?>
    <script src="<?php bloginfo('template_url'); ?>/owl-carousel/owl.carousel.min.js"></script>
    <!-- Bootstrap -->
	<?php } ?>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-datepicker3.css"/>


    
    

  <?php if(is_page(15388)) { echo ""; } else {  ?>  
    <script>
    	$("#pojo-a11y-toolbar").click(function(){
    		if($(this).hasClass("pojo-a11y-toolbar-open")){
    			$("body").addClass("pojo-a11y-toolbar_active_h");
    		}else{
    			$("body").removeClass("pojo-a11y-toolbar_active_h");
    		}
    	});
    	$(".overlayaccessibility").click(function(){
    		$("body").find("#pojo-a11y-toolbar").removeClass("pojo-a11y-toolbar-open");
    		$("body").removeClass("pojo-a11y-toolbar_active_h");
    	});
	//Home slider starts here
	$('#homeslider').owlCarousel({
	    loop:true,
	    margin:10,
	    nav: true,
	    dots:false,
	    autoplay:true,
	    autoplayTimeout:10050,
	    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	    responsiveClass:true,
	    animateOut: 'fadeOut',
    	animateIn: 'fadeIn',
	    responsive:{
		    0:{
		    items:1,
		    margin:10
		    }
	    }
    });
	//Home slider ends here
    $('#hofferSlider, #heventSlider, #hservicesSlider, #hcitywlkSlider, #hwtsecondnewSlider ').owlCarousel({
	    loop:false,
	    margin:10,
	    nav: true,
	    dots:false,
	    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	    responsiveClass:true,
	    responsive:{
		    0:{
		    items:1,
		    margin:10
		    },
		    767:{
		    items:2,
		    margin:14
		    },
		    991:{
		    items:3,
		    margin:14
		    },
		    1200:{
		    items:3,
		    margin:14
		    }
	    }
    });
     $('#hcitywlkSlider2').owlCarousel({
	    loop:false,
	    margin:10,
	    nav: true,
	    dots:false,
	    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	    responsiveClass:true,
	    responsive:{
		    0:{
		    items:1,
		    margin:10
		    },
		    767:{
		    items:2,
		    margin:14
		    }
	    }
    });
	 $('#upcomingevents , #ongoingevents').owlCarousel({
	    margin:10,
	    nav: true,
	    dots:false,
	    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	    responsiveClass:true,
	    responsive:{
		    0:{
		    items:1,
		    margin:10
		    },
		    767:{
		    items:2,
		    margin:14
		    },
		    991:{
		    items:3,
		    margin:14
		    },
		    1200:{
		    items:3,
		    margin:14
		    }
	    }
    });
	
    $('#hwtnewSlider').owlCarousel({
    	loop:false,
	    margin:10,
	    nav: true,
	    dots:false,
		autoplay:true,
		autoplayTimeout:2500,
		autoplayHoverPause:true,
	    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	    responsiveClass:true,
	    responsive:{
		    0:{
		    items:1,
		    margin:10
		    },
		    767:{
		    items:2,
		    margin:14
		    },
		    991:{
		    items:3,
		    margin:14
		    },
		    1200:{
		    items:3,
		    margin:14
		    }
	    }
    });
    </script>
      
  <?php } ?>
    <!--- animation JS -->
    
    <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <script>
    wow = new WOW(
    {
    animateClass: 'animated',
    offset:40,
    }
    );
    wow.init();
    </script>

     

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/fancybox/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/fancybox/jquery.fancybox.css" media="screen" />      
      <style>
      /*.subscribtion-banner{display:none;}*/
      </style>
    <script>  
      $(document).ready(function(){
		 

 
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"

   });
   $(".fancybox1").fancybox({
	   openEffect: "none",
        closeEffect: "none",
		loop: false
     });


// One time pop open by cookies


 /* if(localStorage.getItem('popState') != 'shown'){
        $(".subscribtion-banner").delay(2000).fadeIn();
        localStorage.setItem('popState','shown')
    }
	var loc = location.href;
	var website = '<?php echo get_bloginfo('url'); ?>';
	
	
	if(loc == website+'/home'){
		$(".wl").attr("href" , website);
	} */

   });
 </script>
 
       <!--Loader spinner-->
       
    <script>      

        $(window).on('load', function () {
            
			// Very IMP used for Search present in header banner
			jQuery(document).on('click', 'ul.search_bar_scw > li', function(){ 
				var get_data_type = jQuery(this).find("a").attr("data-type");
				var get_data_val = jQuery(this).find("a").attr("data-val");
				var final_val = get_data_type+"|"+get_data_val ;
				jQuery("#search_param").val(final_val);
			});	
			var url = location.href ; 
	
			jQuery(".nav.nav-tabs.scw-scrolling-nav li a , .nav.nav-tabs.nav-justified li a").each(function(){
				var atl = jQuery(this).attr("href");
				if(atl == url){
					jQuery(this).parent().addClass("active");
				}
				
			});
// Close popup after subscribed oe already subscribed
		

		   
			



        });
		$(document).ready(function(){
	
			




			
            $("a.home span").text("");			
		    $("a.home span").text("Home");
			$("a.brand_category").parent().parent().parent().detach();
			var get_brand = $(".common-breadcrumb span").find("a.brand_category").attr("href" , "javascript:void(0);").attr("title" , "");
			$("a.brand_category").css("cursor" , "text");
			
			
		});

    </script>  
<style>
.common-breadcrumb > span a.brand_category:hover span { color:#777777 !important ;}
#widget .btn-o { width : width: 60px !important;height: 20px !important;}
</style> 
	<script>
// Get the modal 
$(document).ready(function(){
	setTimeout(function(){
            $('.loader').fadeOut(500);
            }, 100);
	$(".share_scw_event").click(function(){
		$(this).parent().next().fadeIn();
		$(this).parents(".share-box").addClass("overlay-active");
		$(this).parents(".wow").removeClass("wow fadeInUp animated").css("animation-name" , "inherit");
		$(this).parents(".inner-common-container").addClass("zindex");
	});
	$("#myBtn").click(function(){
		$("div#myModal").fadeIn();
		$(this).parents(".wow").removeClass("wow fadeInUp animated").css("animation-name" , "inherit");
		$(".inner-common-container").addClass("zindex");
	});
	$(".sit_scw").click(function(){
		var getBtn = jQuery(this).find("button").attr("data-target");
		$("#myModal"+getBtn).fadeIn();
		$(this).parents(".wow").removeClass("wow fadeInUp animated").css("animation-name" , "inherit");
		$(".swh-tab-section").addClass("zindex");
	});
	$(".modal .close").click(function(){
		$(this).parent().parent().fadeOut();
		$(this).parents(".share-box").removeClass("overlay-active");
		$(this).parents(".inner-common-container").removeClass("zindex");
		$(".swh-tab-section").removeClass("zindex");
		$(".inner-common-container").removeClass("zindex");
		
	});
	// Serach box load more option whether to display or not 
	var maxp = $("#pbd-alp-load-postsn a").attr("data-maxp");
	var posts= $("#pbd-alp-load-postsn a").attr("data-posts");
	var url = location.href ;
	var url_split = url.split("?");
	var decodedUri = decodeURIComponent(url_split[1]);
	if (decodedUri.indexOf('|') > -1){
		//setting up the form data 
		var form_param = decodedUri.split("=");
		form_param = form_param[1].split("&");
		jQuery("#search_param").val(form_param[0]);
		var decodeUrl_split = decodedUri.split("|");
		if(decodeUrl_split.length > 0){
			var decodeUrl_split = decodeUrl_split[1].split("&");
			$("#search_concept").text(decodeUrl_split[0]);
			if(decodeUrl_split[0] == "undefined"){
				$("#search_concept").text("all");
			}if(decodeUrl_split[0] == "93"){
				$("#search_concept").text("events");
			}if(decodeUrl_split[0] == "2"){
				$("#search_concept").text("blog");
			}
		}
	}
	
	
	if(parseInt(posts) >= parseInt(maxp)){
		$("p#pbd-alp-load-postsn").css("display" , "none");
	}
});



</script>
<script>
 $(document).ready(function(){
	var uri = window.location.toString();
	if (uri.indexOf("?") > 0) {
	    var clean_uri = uri.substring(0, uri.indexOf("?"));
	    window.history.replaceState({}, document.title, clean_uri);
	} 
}); 
</script>
<style>
.register-now {
    background: #e42227;
    padding: 0px 10px;
    border-radius: 4%;
	-webkit-transition: 0.5s ease all;
	-moz-transition: 0.5s ease all;
	-o-transition: 0.5s ease all;
	transition: 0.5s ease all;
}
.register-now.blink {
	 background: #333;
	 -webkit-transition: 0.5s ease all;
	-moz-transition: 0.5s ease all;
	-o-transition: 0.5s ease all;
	transition: 0.5s ease all;
}
.register-now:hover {
    background: #333;
	-webkit-transition: 0.5s ease all;
	-moz-transition: 0.5s ease all;
	-o-transition: 0.5s ease all;
	transition: 0.5s ease all;
	cursor:pointer;
}
.register-now a {
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 12px;
}
.swh-top-header .register-now {display:block !important;}

</style>
<script>
function blink_text() {
	$('.register-now').toggleClass("blink");
   
}
setInterval(blink_text, 800);

 

</script>
<script>
    $(document).ready(function(){
	 
	 $('#DateOfBirth').attr("readonly" , "readonly");
      var date_input=$('#DateOfBirth'); //our date input has the name "date"
      var container=$('.career-form form').length>0 ? $('.career-form form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
		yearRange: '1950:2049',
		endDate: '+0d',
        autoclose: true,
      };
      date_input.datepicker(options);
	  
	  //
	$(".search_bar_scw li").click(function(){
		var g = $('input[name="s"]').val();
		if(g !=""){
			$('input[name="s"]').val("");
		}
	}); 
	//$(".es_submit_button").attr("title" , "Please enter valid email address").attr("disabled" , "disabled");
	$(".es_submit_button , .es_textbox_class").attr("title" , "Please enter a valid email format (e.g. example@email.com)");
	$(".es_textbox_class").removeAttr("onkeypress");
	//$(".es_submit_button").css("cursor" , "not-allowed");
	//<!--Email must be an email -->
	//$(".home").find("footer input[type='button']").addClass("footer_s_btnnn");
// Start====
		$('.es_submit_button , .es_textbox_class , .footer_s_btn').on('input keyup keypress keydown', function(e) {
				console.log('hello');
				var $thissubmit = $("input.es_submit_button");
				var input = $(this);
				var keyCode = e.keyCode || e.which;
				var re = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
				var is_nameX = input.val();
				$(".es_msg").find("span").html("");
		// 1
			if(is_nameX == " "){
				console.log('invalid');
				input.addClass("invalid");
				//$(".error.emailAddress").fadeIn(300);
				//$(".es_submit_button").attr("title" , "Please enter valid email address").attr("disabled" , "disabled");
				$(".es_submit_button ,.es_textbox_class").attr("title" , " Please enter a valid email format (e.g. example@email.com)");
				//$(".es_submit_button").css("cursor" , "not-allowed");
				if (keyCode === 13){ 
				    $(".es_msg").find("span").html("Please enter a valid email format (e.g. example@email.com)");
					e.stopPropagation();
					
					return false;
				  }
				
			}
			else{
				input.removeClass("invalid");
				$(".error.emailAddress").fadeOut();
				var is_email = re.test(input.val());
			//2===
				if(is_email){
					
					var getParam = input.val();
					getParam = getParam.split(".")[1];
					if(getParam.length > 1){
						//$(".es_submit_button").css("cursor" , "pointer");
						//$(".es_submit_button").attr("title" , "").removeAttr("disabled");
						$(".es_submit_button , .es_textbox_class").attr("title" , "");
						input.removeClass("invalid");
						$(".es_textbox_class").attr("onkeypress" , "if(event.keyCode==13) es_submit_pages(event, 'https://www.selectcitywalk.com')");
				
					}else{
						//$(".es_submit_button").attr("title" , "Please enter valid email address").attr("disabled" , "disabled");
						$(".es_submit_button , .es_textbox_class").attr("title" , " Please enter a valid email format (e.g. example@email.com)");
						$("#es_txt_email_pg").focus();
						//$(".es_submit_button").css("cursor" , "not-allowed");
						$(".es_textbox_class").removeAttr("onkeypress");
						if (keyCode === 13) {
                            $(".es_msg").find("span").html("Please enter a valid email format (e.g. example@email.com)");	
                            $("#es_txt_email_pg").focus();						
						     //alert(keyCode);
							e.stopPropagation();
							return false;
						}
					}
				//$(".error.invEmail").fadeOut();
				}
				else{
					input.addClass("invalid");
					//$(".error.emailAddress").fadeOut();
					//$(".error.invEmail").fadeIn();
					//$(".es_submit_button").attr("title" , "Please enter valid email address").attr("disabled" , "disabled");
					$(".es_submit_button , .es_textbox_class").attr("title" , " Please enter a valid email format (e.g. example@email.com)");
						console.log("13-03");
					if (keyCode === 13) { 
						$(".es_msg").find("span").html("Please enter a valid email format (e.g. example@email.com)");
						$("#es_txt_email_pg").focus();
						
						e.stopPropagation();
						return false;

					}
				}
			// 2 End
			}
			// 1 End	
		});
// End =====
$('.footer_s_btnnn').on('click', function(e) {
	//console.log("13-300000000000000000");
	var exx = $.Event( "keypress", { which: 13 } );
	$('.footer_s_btnnn').trigger(exx);
	if($(".es_msg").find("span").html() == "Please enter a valid email format (e.g. example@email.com)"){

		$("footer").find("input[type='text'].es_textbox_class").focus().addClass('gggggggggg');	
		//console.log("pppppppppppppppppppp13-300000000000000000");
	}
});
// End 2=====







	//Long Dec.
		$("img").each(function(){
			/* var AtterAlt = $(this).attr("alt");
			$(this).attr("longdesc", AtterAlt);  */
		});
		
		//<!--Email must be an email -->

		$('.form-email').on('input keyup keypress', function(e) {
			
				var input=$(this);
				var keyCode = e.keyCode || e.which;
				var re = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
				var is_nameX=input.val();
				input.parent().find('.invalid_span').remove();
				$(".wpcf7-not-valid-tip").fadeOut();
			if(is_nameX == ""){
				input.addClass("invalid");
				input.parent().append('<span class="invalid invalid_span" style="color:#e42227;">Please enter email address</span>');
				//$(".error.emailAddress").fadeIn(300);
				//$(".es_submit_button").attr("title" , "Please enter valid email address").attr("disabled" , "disabled");
				$(".form-email").attr("title" , " Please enter a valid email format (e.g. example@email.com)");
				//$(".es_submit_button").css("cursor" , "not-allowed");
				if (keyCode === 13) { 
					e.stopPropagation();
					return false;
				  }
				
			}
			else{
				input.removeClass("invalid");$(".error.emailAddress").fadeOut();
				input.parent().find('.invalid_span').remove();
				var is_email=re.test(input.val());
				if(is_email){
					
					var getParam = input.val();
					getParam = getParam.split(".")[1];
					if(getParam.length > 1){
						//$(".es_submit_button").css("cursor" , "pointer");
						//$(".es_submit_button").attr("title" , "").removeAttr("disabled");
						$(".form-email").attr("title" , "");
					input.removeClass("invalid");
					input.parent().find('.invalid_span').remove();
				
					}else{
						//$(".es_submit_button").attr("title" , "Please enter valid email address").attr("disabled" , "disabled");
						$(".form-email").attr("title" , " Please enter a valid email format (e.g. example@email.com)");
						//$(".es_submit_button").css("cursor" , "not-allowed");
						input.parent().append('<span class="invalid invalid_span" style="color:#e42227;">Please enter a valid email format (e.g. example@email.com)</span>');
						if (keyCode === 13) {
							
                            //alert(" Please enter a valid email format (e.g. example@email.com)");							
						     //alert(keyCode);
							e.stopPropagation();
					return false;
						}
					}
				//$(".error.invEmail").fadeOut();
				}
				else{input.addClass("invalid");
					input.parent().append('<span class="invalid invalid_span" style="color:#e42227;">Please enter a valid email format (e.g. example@email.com)</span>');
					//$(".error.emailAddress").fadeOut();
					//$(".error.invEmail").fadeIn();
					//$(".es_submit_button").attr("title" , "Please enter valid email address").attr("disabled" , "disabled");
					$(".form-email").attr("title" , " Please enter a valid email format (e.g. example@email.com)");
					if (keyCode === 13) { 
					//alert(" Please enter a valid email format (e.g. example@email.com)");
					e.stopPropagation();
					return false;
				  }
				}
			}
				
		});


		$(".wpcf7-submit").click(function(){
			$("body").find('.invalid_span').remove();
		});
    });
</script>	
<?php /* $args=array(15388,15429); if(!is_page($args)){ ?>
 <div class="subscribtion-banner" style="display:none;">
      <div class="subscribtion-form" role="form">
        <button class="popup1_close" tabindex="1" role="button"><em class="fa fa-times" aria-hidden="true" title="Close"></em></button>
        <h3>Subscribe Now!</h3>
        <p>Get the latest updates and notifications on events, offers and news from Select CITYWALK.</p>
        <?php echo do_shortcode('[email-subscribers namefield="NO" desc="" group="Public"]'); ?>
		<!--<a href="http://bit.ly/2IHHKHn" target="_blank"><img src="<?php //bloginfo('template_url'); ?>/popup/550.png" alt="wonder-women" class="img-responsive"/></a>-->
      </div>
      <div class="subscribtion-overlay"></div>
    </div>
<?php } */ ?>
</body>

</html>
