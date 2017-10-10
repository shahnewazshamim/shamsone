<?php
/**
 * The template part for displaying section resume.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php if ( cs_get_option( 'so_section_resume_education' ) || cs_get_option( 'so_section_resume_job' ) ): ?>
    <section id="resume" class="section section-padding resume solid-bg">
        <div class="container">
            <!--Page Header-->
            <div class="row section-header">
				<?php if ( cs_get_option( 'so_section_resume_title' ) ): ?>
                    <h2><?php echo cs_get_option( 'so_section_resume_title' ) ?></h2>
				<?php endif; ?>
				<?php if ( cs_get_option( 'so_section_resume_subtitle' ) ): ?>
                    <p><?php echo cs_get_option( 'so_section_resume_subtitle' ) ?></p>
				<?php endif; ?>
            </div>
            <!--Page Content-->
            <div class="row resume-content">
                <!--Education History-->
                <div class="col-md-6 col-sm-6 education">
					<?php $educations = cs_get_option( 'so_section_resume_education' ) ?>
					<?php if ( is_array( $educations ) ) : ?>
						<?php foreach ( $educations as $key => $value ) : ?>
                            <!--Single Resume Item-->
                            <div class="single-item-resume">
                                <i class="pe-7s-study"></i>
                                <div class="item-detail">
                                    <h4 class="institute"><?php echo $value['so_section_resume_education_institution'] ?></h4>
                                    <p class="date"><?php echo $value['so_section_resume_education_degree'] ?></p>
                                    <p class="detail"><?php echo $value['so_section_resume_education_description'] ?></p>
                                </div>
                            </div>
						<?php endforeach; ?>
					<?php endif; ?>
                </div>
                <!--Employment History-->
                <div class="col-sm-6 job">
					<?php $experiences = cs_get_option( 'so_section_resume_job' ) ?>
					<?php if ( is_array( $experiences ) ) : ?>
						<?php foreach ( $experiences as $key => $value ) : ?>
                            <!--Single Resume Item-->
                            <div class="single-item-resume">
                                <i class="pe-7s-portfolio"></i>
                                <div class="item-detail">
                                    <h4 class="institute"><?php echo $value['so_section_resume_job_title'] ?></h4>
                                    <p class="date"><?php echo $value['so_section_resume_job_company'] ?></p>
                                    <p class="detail"><?php echo $value['so_section_resume_job_description'] ?></p>
                                </div>
                            </div>
						<?php endforeach; ?>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>