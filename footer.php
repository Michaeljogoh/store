<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pub Store
 */
?>

<div class="sitefooter"> 
   <div class="container footer"> 
          <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="ftr-col-1">  
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
           <?php endif; ?>
          
          <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="ftr-col-2">  
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
           <?php endif; ?>
           
           <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="ftr-col-3">  
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
           <?php endif; ?>
           
           <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                <div class="ftr-col-4">  
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>
           <?php endif; ?> 
           <div class="clear"></div>
      </div><!--end .container-->

        <div class="footer-copyright"> 
            <div class="container">
                <div class="copyleft">
                </div>                        	
                <div class="design-by">
                </div>
                <div class="clear"></div>
             </div><!--end .container-->             
        </div><!--end .footer-copyright-->  
                     
     </div><!--end #sitefooter-->
</div><!--#end sitelayout_type-->

<?php wp_footer(); ?>
</body>
</html>