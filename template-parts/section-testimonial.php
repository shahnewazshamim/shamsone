<?php
/**
 * The template part for displaying section testimonial.
 *
 * @package    WordPress
 * @subpackage Twenty_Sixteen
 * @since      Twenty Sixteen 1.0
 */

?>

<section id="testimonial" class="section section-padding image-bg testimonial"
	<?php if ( cs_get_option( 'so_section_testimonial_image' ) ): ?>
        style="background-image:url('<?php echo cs_get_option( 'so_section_testimonial_image' ) ?>');"
	<?php else: ?>
        style="background-image:url('<?php echo DIR_SHAMS_ONE_IMG . cs_get_option( 'so_section_testimonial_default_image' ) ?>');"
	<?php endif; ?>
    <!--Image Overlay-->
    <div class="overlay"></div>
    <div class="container">
        <!--Page Content-->
        <div class="row testimonial-content text-center">
            <div class="col-md-8 col-md-push-2">
                <div class="testimonial-item">
                    <div class="testimonial-carousel owl-theme">
						<?php $feedbacks = cs_get_option( 'so_section_testimonial_list' ) ?>
						<?php if ( is_array( $feedbacks ) ) : ?>
							<?php foreach ( $feedbacks as $key => $value ) : ?>
                                <!--Single Testimonial-->
                                <div class="item single-testimonial">
                                    <p class="test-text"><?php echo $value[ 'so_section_testimonial_list_feedback' ] ?></p>
                                    <div class="test-author-info">
                                        <p><?php echo $value[ 'so_section_testimonial_list_client' ] ?></p>
                                    </div>
                                </div>
							<?php endforeach; ?>
						<?php endif; ?>
                    </div>
                    <ul class="testimonial-pagination">
						<?php if ( is_array( $feedbacks ) ) : ?>
							<?php $count = 0; ?>
							<?php foreach ( $feedbacks as $key => $value ) : ?>
								<?php if ( $value[ 'so_section_testimonial_list_logo' ] ) : ?>
                                    <li data-slide="<?php echo $count ?>" <?php echo ( $count == 0 ) ? 'class="active"' : '' ?>>
                                        <img src="<?php echo $value[ 'so_section_testimonial_list_logo' ] ?>" alt="">
                                    </li>
								<?php else: ?>
                                    <li data-slide="<?php echo $count ?>" <?php echo ( $count == 0 ) ? 'class="active"' : '' ?>>
                                        <img src="<?php echo DIR_SHAMS_ONE_IMG . 'author_profile.png' ?>" alt="">
                                    </li>
								<?php endif; ?>
								<?php $count ++ ?>
							<?php endforeach; ?>
						<?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>