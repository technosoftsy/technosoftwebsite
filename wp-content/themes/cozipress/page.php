<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cozipress
 */

get_header();



?>


 


<!-- <section id="post-section" class="post-section st-py-default kg"> -->
<section id="post-section" class="post-section "> 
	<div class="container">
		<div class="row gy-lg-0 gy-5 wow fadeInUp">
			<?php 
				if ( class_exists( 'woocommerce' ) ) 
					{
						
						if( is_account_page() || is_cart() || is_checkout() ) {
								echo '<div class="col-lg-'.( !is_active_sidebar( "cozipress-woocommerce-sidebar" ) ?"12" :"8" ).'">'; 
						}
						else{ 
					
						echo '<div class="col-lg-'.( !is_active_sidebar( "cozipress-sidebar-primary" ) ?"12" :"8" ).'">'; 
						
						}
						
					}
					else
					{ 
						// Haldun   contorl area page width  in main page 
					
						echo '<div class="col-lg-'.( !is_active_sidebar( "cozipress-sidebar-primary" ) ?"12" :"" ).'">';
						
						
					} 
				?>
				<?php 		
					if( have_posts()) : the_post();
				?>
				<article class="post-items post-single">
					<div class="post-content">
						<?php the_content(); ?>
					</div>
				</article>
				<?php
					endif;
					
					if( $post->comment_status == 'open' ) { 
						 comments_template( '', true ); // show comments 
					}
				?>
			</div>
			
			<?php  
				if ( class_exists( 'WooCommerce' ) ){ 
					if( is_account_page() || is_cart() || is_checkout() ) {
						get_sidebar('woocommerce');
					}
				}else{
				// Haldun hide search and post area from all pages
			//	get_sidebar(); 
				} 
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>