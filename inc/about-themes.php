<?php
/**
 *Pub Store About Theme
 *
 * @package Pub Store
 */

//about theme info
add_action( 'admin_menu', 'pub_store_abouttheme' );
function pub_store_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'pub-store'), __('About Theme Info', 'pub-store'), 'edit_theme_options', 'pub_store_guide', 'pub_store_mostrar_guide');   
} 

//Info of the theme
function pub_store_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php esc_html_e('About Theme Info', 'pub-store'); ?></h3>
		   </div>
          <p><?php esc_html_e('Pub Store is a free Bar WordPress theme. It is perfect for the wine shop, bar, hotels, resort, lodge, pubs, clubs,  barbecues, cuisine, restaurants, fast food, sweet shop, cafe, and any other related business. It is user-friendly customizer options, the user can setup it within minutes. The Pub Store is a beautiful modern responsive, multilingual, cross-browser Compatible and  WooCommerce Compatible multi-purpose WordPress Theme. it is Compatible with WordPress Latest version and most Popular WordPress plugins.','pub-store'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'pub-store'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'pub-store'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'pub-store'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'pub-store'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'pub-store'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'pub-store'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'pub-store'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'pub-store'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'pub-store'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
<div class="gt-right">			
        <div>				
            <a href="<?php echo esc_url( PUB_STORE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'pub-store'); ?></a> | 
            <a href="<?php echo esc_url( PUB_STORE_PROTHEME_URL ); ?>" target="_blank"><?php esc_html_e('Purchase Pro', 'pub-store'); ?></a> | 
            <a href="<?php echo esc_url( PUB_STORE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'pub-store'); ?></a>
        </div>		
</div><!-- .gt-right-->
<div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>