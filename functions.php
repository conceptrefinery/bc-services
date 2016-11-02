<?php



//* this will bring in the Genesis Parent files needed:

include_once( get_template_directory() . '/lib/init.php' );



//* We tell the name of our child theme

define( 'Child_Theme_Name', __( 'BC theme', 'genesischild' ) );

//* We tell the web address of our child theme (More info & demo)

define( 'Child_Theme_Url', 'http://google.com' );

//* We tell the version of our child theme

define( 'Child_Theme_Version', '1.0' );



//* Add HTML5 markup structure from Genesis

add_theme_support( 'html5' );



//* Add HTML5 responsive recognition

add_theme_support( 'genesis-responsive-viewport' );

add_action('wp_enqueue_scripts','bc_blog_styles');
    function bc_blog_styles() {
        if (!is_page_template('page-experiences_child.php')) {
            wp_enqueue_style('blog-css', get_stylesheet_directory_uri() . '/blog/main-blog.css');
        }
    }


 

add_action( 'wp_enqueue_scripts', 'bc_theme_scripts' );

function bc_theme_scripts() {

    wp_enqueue_style( 'genesis-css', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'flexslider-css', get_stylesheet_directory_uri() . '/css/flexslider.css' );

    wp_enqueue_style( 'orangebox-css', get_stylesheet_directory_uri() . '/css/orangebox.css' );

    wp_enqueue_style( 'bc-css', get_stylesheet_directory_uri() . '/style.css', null, '1.2.2' );

//    wp_enqueue_style('blog-css', get_stylesheet_directory_uri() . '/blog/main-blog.css');
    
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');


    wp_enqueue_script( 'flexslider-js', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'orangebox-js', get_stylesheet_directory_uri() . '/js/orangebox.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'bc-script', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '1.1.0', true );
    
     //Get masonry js
    wp_enqueue_script( 'masonry', get_stylesheet_directory_uri() . '/js/masonry.js', array('jquery'), '1.1.0', true );
    
    wp_enqueue_script( 'smooth-scroll', get_stylesheet_directory_uri() . '/js/smooth-scroll.js', array('jquery'), '1.1.0', true );
    
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.4', true );
    

}



// Add google tag manager

add_action('genesis_before','google_tag');

    function google_tag() {

        ?>

        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MX2JRP"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-MX2JRP');</script>

   <?php 

    }





// add google fonts

add_action( 'wp_head', 'bc_google_fonts' );

function bc_google_fonts() {

	?>

	<link href='https://fonts.googleapis.com/css?family=Merriweather:300italic,300' rel='stylesheet' type='text/css'>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

	<?php

}



// remove header

remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );

remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

remove_action( 'genesis_header', 'genesis_do_header' );





// footer

remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action( 'genesis_footer', 'bc_do_footer' );

function bc_do_footer() {

	?>

	<span class="footer-left">Copyrights &copy; <?php echo date('Y') ?>,  BC Services, All Rights Reserved.</span>

	<span class="footer-right">

                <a href="https://www.facebook.com/bespokeconciergeservices" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

                <a href="https://www.instagram.com/bespoke_concierge/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="margin-right:5px;"></i></a>

		<a href="/privacy-policy">Privacy Policy</a> | <a href="#" class="back-top">Back to Top</a>

	</span>

	<?php

}



// Contact information widget area

genesis_register_sidebar( array(

	'id' => 'contact-info',

	'name' => __( 'Contact info', 'genesis' ),

	'description' => __( 'Contact info details', 'bctheme' ),

) );



// Hexagon widget area

genesis_register_sidebar( array(

	'id' => 'hexagons-top',

	'name' => __( 'Top Services', 'genesis' ),

	'description' => __( 'Hexagon services', 'bctheme' ),

) );

genesis_register_sidebar( array(

	'id' => 'hexagons-middle',

	'name' => __( 'Middle Services', 'genesis' ),

	'description' => __( 'Hexagon services', 'bctheme' ),

) );

genesis_register_sidebar( array(

	'id' => 'hexagons-bottom',

	'name' => __( 'Bottom Services', 'genesis' ),

	'description' => __( 'Hexagon services', 'bctheme' ),

	'before_widget' => '<div id="%1$s" class="hex %2$s">',

	'after_widget'  => '</div>',

) );





// About area

genesis_register_sidebar( array(

	'id' => 'about-area',

	'name' => __( 'About Area', 'genesis' ),

	'description' => __( 'About Area widgets', 'bctheme' ),

) );



// About area

genesis_register_sidebar( array(

	'id' => 'action-call',

	'name' => __( 'Action Call', 'genesis' ),

	'description' => __( 'Action Call widgets', 'bctheme' ),

) );



function bc_contact_form() {

	?>

	<form action='//bcservices.activehosted.com/proc.php' method='post' id='_form_14' accept-charset='utf-8' enctype='multipart/form-data'>

		<input type='hidden' name='f' value='14'>

		<input type='hidden' name='s' value=''>

		<input type='hidden' name='c' value='0'>

		<input type='hidden' name='m' value='0'>

		<input type='hidden' name='act' value='sub'>

		<input type='hidden' name='nlbox[]' value='1'>



		<p><input type='text' name='fullname' placeholder='Full Name' ></p>

		<p><input type='email' name='email' placeholder="Email Address *" ></p>

		<p><input type='text' name='phone' placeholder="Phone Number" ></p>

		<p><textarea name='field[1]' rows='4' cols='40' placeholder="Your Message"></textarea></p>

		<p><input type='submit' class="pop-submit" value="SUBMIT"></p>

	</form>	

	<?php

}



add_action( 'genesis_before_header', 'bc_nav_mobile' );

function bc_nav_mobile() {

	?>

	<div class="nav-mobile">

		<label for="drawer-toggle" id="drawer-toggle-label"></label>

	</div>

	<?php

}



add_action( 'wp_head', 'add_livechat' );

function add_livechat() {

	?>



<!--Start of Zopim Live Chat Script-->

<script type="text/javascript">

window.$zopim||(function(d,s){var z=$zopim=function(c){

z._.push(c)},$=z.s=

d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.

_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');

$.src='//v2.zopim.com/?46xq3KMd9IsS4AVtJAadV1yG6DhRqAoM';z.t=+new Date;$.

type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

</script>

<!--End of Zopim Live Chat Script-->



	<?php

}







function partners_form() {

	?>

	<h3 style="text-align: center;">Get In Touch</h3>

	<p>&nbsp;</p>

	<form method="POST" action="https://bcservices.activehosted.com/proc.php" id="_form_14_" class="_form _form_14 _inline-form  _dark enquire-form" novalidate>

  <input type="hidden" name="u" value="14" />

  <input type="hidden" name="f" value="14" />

  <input type="hidden" name="s" />

  <input type="hidden" name="c" value="0" />

  <input type="hidden" name="m" value="0" />

  <input type="hidden" name="act" value="sub" />

  <input type="hidden" name="v" value="2" />

  

  <input type="text" name="fullname" placeholder="Full Name" />

  <input type="text" name="email" placeholder="Email Address*" required/>

  <input type="text" name="phone" placeholder="Phone Number" />

  <textarea name="field[1]" placeholder="Your Message"  ></textarea>

  <button id="_form_14_submit" class="_submit" type="submit">SUBMIT</button>

</form>

	<?php

}



function experience_form() {

	?>

	<form method="POST" action="https://bcservices.activehosted.com/proc.php" id="_form_17_" class="_form _form_17 _inline-form  _dark enquire-form" novalidate>

  <input type="hidden" name="u" value="17" />

  <input type="hidden" name="f" value="17" />

  <input type="hidden" name="s" />

  <input type="hidden" name="c" value="0" />

  <input type="hidden" name="m" value="0" />

  <input type="hidden" name="act" value="sub" />

  <input type="hidden" name="v" value="2" />

  

  <input type="text" name="fullname" placeholder="Full Name*" required/>

  <input type="text" name="phone" placeholder="Phone*" required/>

  <input type="text" name="email" placeholder="Email*" required/>

  <textarea name="field[2]" placeholder="Experience Enquiry Message*"  required></textarea>

  <button id="_form_17_submit" class="_submit" type="submit">ENQUIRE NOW</button>

    

</form>

	<?php

}

/* ## CR Custom Functions BC-Services
--------------------------------------------- */

//Custom Post Meta Titles
add_filter( 'genesis_post_meta', 'sp_post_meta_filter' );
function sp_post_meta_filter($post_meta) {
	$post_meta = '[post_categories before="Filed Under: "] [post_tags before="Tagged: "]';
	return $post_meta;
}
//Custom Read More after excerpt
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Custom Excerpt Length
function custom_excerpt_length( $length ) {
	$length = 20;
    return $length;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Get first letter of single post content
function cr_get_first_letter($letter) {
    $letter = substr($letter, 3, 1);
    
    return $letter;
}

genesis_register_sidebar( array(
	'id' => 'single_sidebar',
	'name' => __( 'Single Post Sidebar', 'genesis' ),
	'description' => __( 'Sidebar for single post', 'bctheme' )
) );

genesis_register_sidebar( array(
	'id' => 'blog_sidebar',
	'name' => __( 'Blog Sidebar', 'genesis' ),
	'description' => __( 'Sidebar for blog page', 'bctheme' )
) );


//Change default email FROM

 
function ec_mail_from ($email ){
  return 'admin@bc-services.com'; // new email address from sender.
}
add_filter( 'wp_mail_from', 'ec_mail_from' );
