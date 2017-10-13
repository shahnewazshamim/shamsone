<?php
/**
 * The template part for displaying navigation content.
 *
 * @package    WordPress
 * @subpackage Twenty_Sixteen
 * @since      Twenty Sixteen 1.0
 */

?>

<div class="nav-bar-area">
    <!--Top Nav Bar-->
    <div class="container">
        <div class="row">
            <nav class="navbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Your Logo Here-->
                    <a href="#" class="navbar-brand">
                        <img src="<?php echo DIR_SHAMS_ONE_IMG . 'logo.png' ?>" alt=""/>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php wp_nav_menu( array(
						'theme_location' => 'primary-menu',
						'container'      => FALSE,
						'menu_class'     => 'nav navbar-nav navbar-right text-uppercase',
						'menu_id'        => 'nav',
					) ); ?>
                </div>
            </nav>
        </div>
    </div>
</div>