<?php
/**
 * Testimonial section
 */
if ( ! function_exists( 'wpazure_kit_consultera_testimonial' ) ) :
	function wpazure_kit_consultera_testimonial() {
		
		// Get Service section data
		$HomeTestiEnable = get_theme_mod('testimonial_section_enable',true);
		$HomeTestiSectionTitle = get_theme_mod('testimonial_section_title','What Clients Say');
		$HomeTestiSectionDes = get_theme_mod('testimonial_section_description','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		// Get tesimonial one data
		$TestiOneImage = get_theme_mod('testimonial_image_one',WPAZURE_KIT_PLUGIN_URL .'inc/rynobiz/images/testimonial/test1.jpg');
		$TestiOneName = get_theme_mod('testimonial_name_one','Petrik Johnson');
		$TestiOneDesi = get_theme_mod('testimonial_desi_one','CEO John Softwares');
		$TestiOneDes = get_theme_mod('testimonial_des_one','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		// Get tesimonial Two data
		$TestiTwoImage = get_theme_mod('testimonial_image_two',WPAZURE_KIT_PLUGIN_URL .'inc/rynobiz/images/testimonial/test2.jpg');
		$TestiTwoName = get_theme_mod('testimonial_name_two','Petrik Johnson');
		$TestiTwoDesi = get_theme_mod('testimonial_desi_two','CEO John Softwares');
		$TestiTwoDes = get_theme_mod('testimonial_des_two','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		
		// Three testimonials
		$TestiThreeImage = get_theme_mod('testimonial_image_three',WPAZURE_KIT_PLUGIN_URL .'inc/rynobiz/images/testimonial/test3.jpg');
		$TestiThreeName = get_theme_mod('testimonial_name_three','Petrik Johnson');
		$TestiThreeDesi = get_theme_mod('testimonial_desi_three','CEO John Softwares');
		$TestiThreeDes = get_theme_mod('testimonial_des_three','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
	
	
	
		if($HomeTestiEnable == true){?>
		<!-- TESTIMONIAL SECTION START -->
			<section class="section-padding-100 testimonial-section bg-offwhite">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-12">
							<div class="section-heading text-center">
								<?php if(!empty($HomeTestiSectionTitle)){?>
								<h2 class="title"><?php echo esc_html($HomeTestiSectionTitle);?></h2>
								<?php } if(!empty($HomeTestiSectionDes)){?>
								<p>
									<?php echo esc_html($HomeTestiSectionDes);?>
								</p>
								<?php }?>
							</div>
						</div>
					</div>
					
					
					<div class="row">
					
					<div class="col-md-4 col-12 mb-30px testtwo1">
						<div class="testimonial-child-2-wrap">
						
						
			
						
						<?php if(!empty($TestiOneDes)){?>
							<div class="testimonial-single-child-2 bg-offwhite">
			              		<div class="testimonial-text-child-2 text-center">
			              			<p>
									<?php echo esc_html($TestiOneDes);?>
				              		</p>
			              		</div>
			              
						<?php } ?> 
			              	<div class="testimonial-detail-child-2 text-center">
		              			<div class="testimonial-img-child-2">
		              				<?php if(!empty($TestiOneImage)){?>
										<img src="<?php echo esc_url($TestiOneImage);?>">
										<?php }?>
		              			</div>
		              			<?php if(!empty($TestiOneName)){?>
									<strong class="d-block pt-3 "><?php echo esc_html($TestiOneName);?></strong>
									<?php } if(!empty($TestiOneDesi)){?>
									
									<div class="testimonial-designation-child-2"><?php echo esc_html($TestiOneDesi)?></div>
									<?php }?>
		              		</div>
								</div>
						</div>
					</div>
					
					<div class="col-md-4 col-12 mb-30px testtwo2">
						<div class="testimonial-child-2-wrap">
						<?php if(!empty($TestiTwoDes)){?>
							<div class="testimonial-single-child-2 bg-offwhite ">
			              		<div class="testimonial-text-child-2 text-center">
			              			<p>
				              			<?php echo esc_html($TestiTwoDes);?>
				              		</p>
			              		</div>
			              	
							<?php } ?>
			              	<div class="testimonial-detail-child-2  text-center">
		              			<div class="testimonial-img-child-2">
		              				<?php if(!empty($TestiTwoImage)){?>
										<img src="<?php echo esc_url($TestiTwoImage);?>">
										<?php }?>
		              			</div>
		              			<?php if(!empty($TestiTwoName)){?>
									<strong class="d-block pt-3"><?php echo esc_html($TestiTwoName);?></strong>
									<?php } if(!empty($TestiTwoDesi)){?>
									
									<div class="testimonial-designation-child-2"><?php echo esc_html($TestiTwoDesi)?></div>
									<?php }?>
		              		</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="col-md-4 col-12 mb-30px testtwo3">
						<div class="testimonial-child-2-wrap">
						<?php if(!empty($TestiThreeDes)){?>
							<div class="testimonial-single-child-2 bg-offwhite ">
			              		<div class="testimonial-text-child-2 text-center">
			              			<p>
				              			<?php echo esc_html($TestiThreeDes);?>
				              		</p>
			              		</div>
			              	
							<?php } ?>
			              	<div class="testimonial-detail-child-2  text-center">
		              			<div class="testimonial-img-child-2">
		              				<?php if(!empty($TestiThreeImage)){?>
										<img src="<?php echo esc_url($TestiThreeImage);?>">
										<?php }?>
		              			</div>
		              			<?php if(!empty($TestiTwoName)){?>
									<strong class="d-block pt-3"><?php echo esc_html($TestiThreeName);?></strong>
									<?php } if(!empty($TestiThreeDesi)){?>
									
									<div class="testimonial-designation-child-2"><?php echo esc_html($TestiThreeDesi)?></div>
									<?php }?>
		              		</div>
							</div>
						</div>
					</div>
					
				</div>
					
				</div>
			</section>
			<!-- TESTIMONIAL SECTION END --><?php 
		} 
	}

endif;

if ( function_exists( 'wpazure_kit_consultera_testimonial' ) ) {
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 16, 'wpazure_kit_consultera_testimonial' );
add_action( 'consultera_homepage_sections', 'wpazure_kit_consultera_testimonial', absint( $homepage_section_priority ) );

}