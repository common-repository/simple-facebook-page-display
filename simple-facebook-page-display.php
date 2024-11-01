<?php
/*
Plugin Name: Simple Facebook Page Display
Plugin URI: https://profiles.wordpress.org/abhishekdahiya/profile/
Version: 1.0
Author: abhishekdahiya
Description: Simple Facebook Page Display(SFPD) Plugin Easy to Use. Use Shortcode - [sfpd_page page_url="Your_Facebook_Page_url"]
*/



function sfpd_display( $atts ) {

$atts = shortcode_atts(
	array(
		'page_url' => '',
		
	), $atts, 'sfpd_page' );	
ob_start();

?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=682001298539412&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="<?php echo $atts['page_url']; ?>" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo $atts['page_url']; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $atts['page_url']; ?>"></a></blockquote></div>
<?php  
return ob_get_clean();
}
add_shortcode('sfpd_page', 'sfpd_display' );