<?php 
	$cozipress_hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	$cozipress_bread_bg_img						= get_theme_mod('breadcrumb_bg_img',esc_url(get_template_directory_uri() .'/assets/images/bg/breadcrumbg.jpg')); 
	$cozipress_bread_back_attach				= get_theme_mod('breadcrumb_back_attach','scroll');
		
if($cozipress_hs_breadcrumb == '1') {	
?>
	<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-center" style="background: url(<?php echo esc_url($cozipress_bread_bg_img); ?>) center center <?php echo esc_attr($cozipress_bread_back_attach); ?>;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb-heading">
                        </div>
						
                    </div>                    
                </div>
            </div>
        </div>
    </section>
<?php } ?>	