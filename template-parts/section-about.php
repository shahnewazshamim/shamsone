<?php
/**
 * The template part for displaying section about.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section id="about" class="section section-padding about">
    <div class="container">
        <!--Page Header-->
        <div class="row section-header">
			<?php if ( cs_get_option( 'so_section_about_title' ) ): ?>
                <h1><?php echo cs_get_option( 'so_section_about_title' ) ?></h1>
			<?php endif; ?>
			<?php if ( cs_get_option( 'so_section_about_subtitle' ) ): ?>
                <p><?php echo cs_get_option( 'so_section_about_subtitle' ) ?></p>
			<?php endif; ?>
        </div>
        <!--Page Content-->
        <div class="about-content">
            <div class="row">
                <!--Profile Photo-->
                <div class="col-lg-3 col-md-4 col-sm-12 profile-photo">
                    <div class="profile-img">
						<?php if ( cs_get_option( 'so_section_about_avatar' ) ): ?>
                            <img src="<?php echo cs_get_option( 'so_section_about_avatar' ) ?>" alt="">
						<?php else: ?>
                            <img src="<?php echo DIR_SHAMS_ONE_IMG . 'author-profile.png' ?>" alt="">
						<?php endif; ?>
                    </div>
					<?php if ( cs_get_option( 'so_section_about_button_one_enable' ) || cs_get_option( 'so_section_about_button_two_enable' ) ): ?>
                        <ul class="link-list">
							<?php if ( cs_get_option( 'so_section_about_button_one_enable' ) ): ?>
                                <li><a href="<?php echo cs_get_option( 'so_section_about_button_one_url' ) ?>"
                                       class="btn-boch"><?php echo cs_get_option( 'so_section_about_button_one_text' ) ?></a>
                                </li>
							<?php endif; ?>
							<?php if ( cs_get_option( 'so_section_about_button_two_enable' ) ): ?>
                                <li><a href="<?php echo cs_get_option( 'so_section_about_button_two_url' ) ?>"
                                       class="btn-boch btn-colored"><?php echo cs_get_option( 'so_section_about_button_two_text' ) ?></a>
                                </li>
							<?php endif; ?>
                        </ul>
					<?php endif; ?>
                </div>
                <!--Basic Info-->
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="basic-info">
						<?php if ( cs_get_option( 'so_profile_first_name' ) || cs_get_option( 'so_profile_last_name' ) ): ?>
                            <h1 class="person-title"><?php echo cs_get_option( 'so_profile_first_name' ) . ' ' . cs_get_option( 'so_profile_last_name' ) ?></h1>
						<?php endif; ?>
						<?php if ( cs_get_option( 'so_section_about_bio' ) ): ?>
                            <p class="bio-text"><?php echo cs_get_option( 'so_section_about_bio' ) ?></p>
						<?php endif; ?>
                        <ul class="social-nav">
							<?php
							if ( cs_get_option( 'so_enable_social' ) ) {
								foreach ( cs_get_all_option() as $key => $value ) {
									if ( strpos( $key, 'so_social_menu_' ) !== false ) {
										if ( $value == '' ) {
											continue;
										}
										$social_menus[ $key ] = $value;
									}
								}
								if ( ! empty( $social_menus ) ) {
									foreach ( $social_menus as $icon => $url ) {
										$icon = str_replace( '_', '-', str_replace( 'so_social_menu_', '', $icon ) );
										echo '<li><a href="' . $url . '" target="_blank"><i class="fa fa-' . $icon . '" aria-hidden="true"></i></a></li>';
									}
								}
							}
							?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Skill Area-->

                <div class="col-lg-4 col-md-4 col-sm-5">
                    <div class="personal-info">
                        <ul class="info-list">
							<?php
							foreach ( cs_get_all_option() as $key => $value ) {
								if ( strpos( $key, 'so_profile_address_' ) !== false ) {
									if ( $value == '' ) {
										continue;
									}
									$address_list[ $key ] = $value;
								}
							}

							if ( ! empty( $address_list ) ) {
								foreach ( $address_list as $icon => $value ) {
									$icon = str_replace( '_', '-', str_replace( 'so_profile_address_', '', $icon ) );
									echo '<li><i class="pe-7s-' . $icon . '" aria-hidden="true"></i><p>' . $value . '</p></li>';
								}
							}
							?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8 col-sm-7 skills-info">
                    <div class="progress-bar-area">
						<?php if ( cs_get_option( 'so_section_about_skill' ) ): ?>
							<?php foreach ( cs_get_option( 'so_section_about_skill' ) as $key => $value ): ?>
                                <!--Single Skill Bar-->
                                <div class="single-bar">
                                    <div class="skill-info">
                                        <span class="skill-title"><?php echo $value['so_section_about_skill_title'] ?></span>
                                        <span class="skill-percent"><?php echo $value['so_section_about_skill_level'] ?>
                                            %</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                             style="width: <?php echo $value['so_section_about_skill_level'] ?>%;"></div>
                                    </div>
                                </div>
							<?php endforeach; ?>
						<?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
