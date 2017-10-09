<?php
/**
 * The template part for displaying section whyme.
 *
 * @package    WordPress
 * @subpackage Twenty_Sixteen
 * @since      Twenty Sixteen 1.0
 */

?>

<?php if ( ! empty( cs_get_option( 'so_section_whyme_procedure' ) ) ): ?>
    <section class="section section-padding why-me solid-bg">
        <div class="container">
            <div class="row why-me-content">
				<?php $processes = cs_get_option( 'so_section_whyme_procedure' ) ?>
				<?php if ( is_array( $processes ) ) : ?>
					<?php foreach ( $processes as $key => $value ) : ?>
                        <div class="col-md-4 col-sm-6 single-item ">
                            <i class="fa <?php echo $value[ 'so_section_whyme_procedure_icon' ] ?>"></i>
                            <div class="content">
                                <h2><?php echo $value[ 'so_section_whyme_procedure_title' ] ?></h2>
                                <p><?php echo $value[ 'so_section_whyme_procedure_description' ] ?></p>
                            </div>
                        </div>
					<?php endforeach; ?>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
