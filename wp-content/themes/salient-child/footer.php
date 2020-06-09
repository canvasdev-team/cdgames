<?php
/**
 * The template for displaying the footer.
 *
 * @package Salient WordPress Theme
 * @version 9.0.2
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$options = get_nectar_theme_options();
global $post;

$header_format = ( ! empty( $options['header_format'] ) ) ? $options['header_format'] : 'default';
$theme_skin    = ( ! empty( $options['theme-skin'] ) ) ? $options['theme-skin'] : 'original';
if ( 'centered-menu-bottom-bar' == $header_format ) {
	$theme_skin = 'material';
}

$using_footer_widget_area  = ( ! empty( $options['enable-main-footer-area'] ) && $options['enable-main-footer-area'] == 1 ) ? 'true' : 'false';
$disable_footer_copyright  = ( ! empty( $options['disable-copyright-footer-area'] ) && $options['disable-copyright-footer-area'] == 1 ) ? 'true' : 'false';
$footer_reveal             = ( ! empty( $options['footer-reveal'] ) ) ? $options['footer-reveal'] : 'false';
$footer_full_width         = ( ! empty( $options['footer-full-width'] ) ) ? $options['footer-full-width'] : 'false';
$copyright_line            = ( ! empty( $options['footer-copyright-line'] ) && $options['footer-copyright-line'] == 1 ) ? 'true' : 'false';
$footer_columns            = ( ! empty( $options['footer_columns'] ) ) ? $options['footer_columns'] : '4';
$footer_bg_image_overlay   = ( ! empty( $options['footer-background-image-overlay'] ) ) ? $options['footer-background-image-overlay'] : '0.8';
$footer_bg_image           = ( ! empty( $options['footer-background-image'] ) && ! empty( $options['footer-background-image']['url'] ) ) ? nectar_options_img( $options['footer-background-image'] ) : false;
$footer_bg_color           = ( ! empty( $options['footer-background-color'] ) ) ? $options['footer-background-color'] : 'default-footer-color';
$footer_copyright_bg_color = ( ! empty( $options['footer-copyright-background-color'] ) ) ? $options['footer-copyright-background-color'] : 'default-footer-copyright-color';
$footer_custom_color       = ( ! empty( $options['footer-custom-color'] ) && $options['footer-custom-color'] == '1' ) ? 'true' : 'false';

$using_footer_bg_img       = 'false';
$footer_bg_image_markup    = '';

if ( $footer_bg_image && ! empty( $footer_bg_image ) ) {
	$using_footer_bg_img    = 'true';
	$footer_bg_image_markup = 'style="background-image:url(' . $footer_bg_image . ');"';
}

$matching_footer_color = 'false';

if ( $footer_custom_color == 'true' ) {
	$matching_footer_color = ( $footer_bg_color == $footer_copyright_bg_color ) ? 'true' : 'false';
} elseif ( $footer_custom_color == 'false' && $theme_skin == 'material' || $footer_custom_color == 'false' && $theme_skin == 'ascend' ) {
	$matching_footer_color = 'true';
}


?>

<div id="footer-outer" <?php echo ( $footer_reveal != '1' ) ? 'data-midnight="light"' : ''; ?> data-cols="<?php echo esc_attr( $footer_columns ); ?>" data-custom-color="<?php echo esc_attr( $footer_custom_color ); ?>" data-disable-copyright="<?php echo esc_attr( $disable_footer_copyright ); ?>" data-matching-section-color="<?php echo esc_attr( $matching_footer_color ); ?>" data-copyright-line="<?php echo esc_attr( $copyright_line ); ?>" data-using-bg-img="<?php echo esc_attr( $using_footer_bg_img ); ?>" data-bg-img-overlay="<?php echo esc_attr( $footer_bg_image_overlay ); ?>" data-full-width="<?php echo esc_attr( $footer_full_width ); ?>" data-using-widget-area="<?php echo esc_attr( $using_footer_widget_area ); ?>" <?php echo $footer_bg_image_markup; // WPCS: XSS ok. ?>>
	
<?php

get_template_part( 'includes/partials/footer/call-to-action' );

get_template_part( 'includes/partials/footer/main-widgets' );

get_template_part( 'includes/partials/footer/copyright-bar' );

?>

</div><!--/footer-outer-->

<?php

get_template_part( 'includes/partials/footer/off-canvas-navigation' );

?>


</div> <!--/ajax-content-wrap-->


<?php
if ( ! empty( $options['boxed_layout'] ) && $options['boxed_layout'] == '1' && $header_format != 'left-header' ) {
	echo '</div><!--/boxed closing div-->'; }


get_template_part( 'includes/partials/footer/back-to-top' );

get_template_part( 'includes/partials/footer/body-border' );

wp_footer();

if ( 'material' == $theme_skin ) {
	echo '</div></div><!--/ocm-effect-wrap-->';
}

nectar_hook_before_body_close();

?>
<div id="sticky-bar-footer" data-total="0" data-count="0">
	<div class="sticky-bar-controls left">
		<p class="message-prev arrow-control" title="Previous"><i class="fas fa-arrow-left"></i></p>
	</div>
	<div class="message-ticker">
	<?php dynamic_sidebar( 'footer-sticky-bar' ); ?>		
	</div>
	<div class="sticky-bar-controls right">
		<p class="message-prev arrow-control" title="Next"><i class="fas fa-arrow-right"></i></p>
	</div>
</div>
<style>
	span.arrow-control{ cursor: pointer; }
	span.arrow-control:hover{ color: blue; }
	.message-ticker{ float: none; width:80%; margin: 0px auto; text-align: center; min-height: 30px; }
	.sticky-bar-controls{ width: 15%; height: 80%; }
	.sticky-bar-controls.left{ float: left; position: absolute; left: 8px; }
	.sticky-bar-controls.right{ float: right; position: absolute; top: 20px; right: 8px; text-align: right; }
	#sticky-bar-footer{
		z-index: 99;
		position: fixed;
		margin:0px;
		bottom: 0;
		padding: 18px;
		width: 100% !important;
		background-color: #000;
		color: #fff;
		font-size: 18px;
		display: flex;
	}
	.message-item{
		display: inline-block;
		width: 100%;
		margin: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.message-ticker > p, .sticky-bar-controls > p{
	  margin: 0;
	  padding: 0;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);		
	}
	.hide-message{
		display: none;
	}
	p.arrow-control > i[class*="fa-"], span[class*="fa-"] {
	    line-height: normal;
	}
	a#to-top {
	    bottom: 80px;
	}
	div#footer-outer {
	    padding-bottom: 28px;
	}
	@media only screen and (max-width: 812px){
		#sticky-bar-footer {
		    font-size: 16px;
		}
	}
	@media only screen and (max-width: 600px){
		#sticky-bar-footer {
		    font-size: 14px;
		}
		.message-ticker{
			min-height: 90px;
		}
	}	
</style>
<script type="text/javascript">
	function animateMessage(messages){
		var interval = 5000;

		setInterval(function(){
			var i = Number(jQuery('#sticky-bar-footer').attr('data-count'));

			var ii = (i+1);
			if(ii >= messages.length)
				ii = 0;
		
			jQuery('#sticky-bar-footer .message-ticker').html('<p>'+messages[ii]+'</p>').css('opacity', '0.1').animate({
			    opacity: 1,
			  }, 1000 );

			i++;

			if(i >= messages.length)
				i = 0;

			jQuery('#sticky-bar-footer').attr('data-count', i);

		}, interval);
	}

	jQuery(function($){

		var messages = new Array();
		jQuery('#sticky-bar-footer .message-item').each(function(){
			messages.push($(this).html());
		});

		jQuery('#sticky-bar-footer .message-ticker').html('<p>'+messages[0]+'</p>').css('opacity', '0.1').animate({
		    opacity: 1,
		  }, 1000 );
		jQuery('#sticky-bar-footer').attr('data-total', messages.length);

		jQuery('.message-next').click(function(){
			var total = Number(jQuery('#sticky-bar-footer').attr('data-total')); 
			var current = Number(jQuery('#sticky-bar-footer').attr('data-count')); 

			var i = (current+1);

			if(i >= total)
				i = 0;
			
			jQuery('#sticky-bar-footer .message-ticker').html('<p>'+messages[i]+'</p>').css('opacity', '0.1').animate({
			    opacity: 1,
			  }, 1000 );
			jQuery('#sticky-bar-footer').attr('data-count', i)
		});

		jQuery('.message-prev').click(function(){
			var total = Number(jQuery('#sticky-bar-footer').attr('data-total')); 
			var current = Number(jQuery('#sticky-bar-footer').attr('data-count')); 

			var i = (current - 1);

			if(i < 0)
				i = messages.length - 1;
			
			jQuery('#sticky-bar-footer .message-ticker').html('<p>'+messages[i]+'</p>').css('opacity', '0.1').animate({
			    opacity: 1,
			  }, 500 );
			jQuery('#sticky-bar-footer').attr('data-count', i)
		});

		animateMessage(messages);
	});
</script>
</body>
</html>
