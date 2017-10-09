<?php
/**
 * The template part for displaying section overview.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( ! empty( cs_get_option( 'so_section_overview_stat' ) ) ): ?>
<section class="section section-padding why-me solid-bg">
	<div class="container">
		<div class="row why-me-content">
			<?php $statistics = cs_get_option( 'so_section_overview_stat' ) ?>
			<?php if ( is_array( $statistics ) ) : ?>
				<?php foreach ( $statistics as $key => $value ) : ?>
                    <div class="col-md-3 col-sm-6 single-item ">
                        <i class="fa <?php echo $value[ 'so_section_overview_stat_icon' ] ?>"></i>
                        <div class="content">
                            <h2><?php echo $value[ 'so_section_overview_stat_value' ] . ' ' . $value[ 'so_section_overview_stat_title' ] ?></h2>
                            <!--<p><?php /*echo $value[ 'so_section_overview_stat_title' ] */?></p>-->
                        </div>
                    </div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>