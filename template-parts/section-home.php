<?php
/**
 * The template part for displaying section home.
 *
 * @package    WordPress
 * @subpackage Twenty_Sixteen
 * @since      Twenty Sixteen 1.0
 */

?>

<section id="home" class="section intro-section"
	<?php if ( ! cs_get_option( 'so_section_home_video_enable' ) ): ?>
		<?php if ( cs_get_option( 'so_section_home_image' ) ): ?>
            style="background-image:url('<?php echo cs_get_option( 'so_section_home_image' ) ?>');"
		<?php else: ?>
            style="background-image:url('<?php echo DIR_SHAMS_ONE_IMG . cs_get_option( 'so_section_home_default_image' ) ?>');"
		<?php endif; ?>
	<?php endif; ?>>
    <div class="overlay">
    </div><!--Image Overlay-->
	<?php if ( cs_get_option( 'so_section_home_video_enable' ) ): ?>
		<?php if ( cs_get_option( 'so_section_home_video' ) ): ?>
            <video src="<?php echo cs_get_option( 'so_section_home_video' ) ?>" autoplay loop></video>
		<?php else: ?>
            <video src="<?php echo DIR_SHAMS_ONE_VIDEO . cs_get_option( 'so_section_home_default_video' ) ?>" autoplay
                   loop></video>
		<?php endif; ?>
	<?php endif; ?>
    <!--<div id="particles-js"></div>-->
    <div class="intro-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-push-2 col-md-10 col-md-push-1 col-sm-12">
                    <div class="intro-text">
						<?php if ( cs_get_option( 'so_section_home_intro_line_one' ) ): ?>
                            <!--Person Intro-->
                            <p><?php echo cs_get_option( 'so_section_home_intro_line_one' ) ?></p>
						<?php endif; ?>
						<?php if ( cs_get_option( 'so_section_home_intro_line_two' ) ): ?>
                            <!--Person Name-->
                            <div class="person-title">
                                <h1 class="person-name"><?php echo cs_get_option( 'so_section_home_intro_line_two' ) ?></h1>
                            </div>
						<?php endif; ?>
                        <!--Person Job Title-->
                        <h4 class="job-title"><i class="fa fa-long-arrow-right"></i> <span class="typed-effect"><!--Will Come From main.js file--></span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>