<?php
/**
 * The template part for displaying hero content.
 *
 * @package    WordPress
 * @subpackage Shamim_Ninja
 * @since      Shamim Ninja 1.0.0
 */
?>

<section id="hero" class="section hero-06 active">
	<div class="display-table">
		<div class="display-content">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 order-2 order-lg-1">
						<div class="hero-content">
							<h1 class="mb-3"><?php echo cs_get_options()['mss_hero_title'] ?></h1>
							<h4 class="text-capitalize mb-0"><span class="base-color">A  </span> <span class="element" data-elements="<?php echo cs_get_options()['mss_hero_subtitle'] ?>"></span></h4>
							<p class="max-width-450 mx-0 my-4"><?php echo cs_get_options()['mss_hero_description'] ?></p>
							<ul class="list-inline hero-social">
								<?php foreach(cs_get_options()['mss_social_items'] as $key => $value) : ?>
                                    <li class="list-inline-item">
                                        <a href="<?php echo $value['mss_social_items_url'] ?>" target="_blank">
                                            <img src="<?php echo DIR_MSS_IMG . $value['mss_social_items_icon']; ?>.svg" alt="<?php echo $value['mss_social_items_title']; ?>">
                                        </a>
                                    </li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 order-1 order-lg-2">
						<div class="hero-images">
							<div class="square">
								<img src="<?php echo DIR_MSS_IMG ?>element_square.png" alt="/">
							</div>
							<div class="circle"></div>
							<div class="circle-2"></div>
							<div class="circle-3"></div>
							<div class="floating"></div>
							<div class="rounded-circle">
								<img width="<?php echo cs_get_options()['mss_profile_image_width'] ?>%" src="<?php echo cs_get_options()['mss_profile_image']['url'] ?>" alt="<?php echo bloginfo('name')?>" class="rounded-circle img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
