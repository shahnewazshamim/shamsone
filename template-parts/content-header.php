<?php
/**
 * The template part for displaying header content.
 *
 * @package    WordPress
 * @subpackage Shamim_Ninja
 * @since      Shamim Ninja 1.0.0
 */
?>

<header>
	<div class="header-navbar h-100">
		<?php if (cs_get_options()['mss_is_logo_enable']): ?>
		    <a class="navbar-brand" href="<?php echo bloginfo('url')?>"><b><?php echo cs_get_options()['mss_logo_initial'] ?></b><span><?php echo cs_get_options()['mss_logo_text'] ?></span></a>
		<?php endif; ?>
        <ul class="list-group menu text-center" id="menu">
			<?php
			foreach (cs_get_options() as $key => $value) {
				if ( strpos( $key, '_icon' ) !== false ) {
					if($value == '') continue;
					$name = str_replace('menu_', '', $key);
					$name = str_replace('_icon', '', $name);
					?>
                    <li class="list-group-item">
                        <a class="active" href="#<?php echo $name ?>">
                            <i class="<?php echo str_replace('fas', 'fa', cs_get_options()[$key]) ?>"></i>
                            <span><?php echo $name ?></span>
                        </a>
                    </li>
            <?php
				}
			}
			?>
		</ul>
		<div class="menu-toggler">
                <span>
                    <i class="text-white lni-menu"></i>
                </span>
		</div>
	</div>
</header>