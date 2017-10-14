<?php
/**
 * The template part for displaying section portfolio.
 *
 * @package    WordPress
 * @subpackage Twenty_Sixteen
 * @since      Twenty Sixteen 1.0
 */

?>

<?php

$args = array(
	'post_type'      => 'so-portfolio',
	'order'          => 'ASC',
	'orderby'        => 'post_title',
	'posts_per_page' => 6,
);

$the_query = new WP_Query( $args );
$taxonomy  = 'so-portfolio-type';
$terms     = get_terms( $taxonomy );
?>

<section id="portfolio" class="section section-padding projects">
    <div class="container">
        <!--Page Header-->
        <div class="row section-header">
			<?php if ( cs_get_option( 'so_section_portfolio_title' ) ): ?>
                <h2><?php echo cs_get_option( 'so_section_portfolio_title' ) ?></h2>
			<?php endif; ?>
			<?php if ( cs_get_option( 'so_section_portfolio_subtitle' ) ): ?>
                <p><?php echo cs_get_option( 'so_section_portfolio_subtitle' ) ?></p>
			<?php endif; ?>
        </div>
        <div class="row project-content text-center">
            <ul class="filter-list">
                <li data-filter="*" class="active">All</li>
				<?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
					<?php foreach ( $terms as $term ) : ?>
                        <li data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
					<?php endforeach; ?>
				<?php endif; ?>
            </ul>

            <div class="porject-container">
				<?php if ( have_posts() ): ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php
						
						$terms = wp_get_post_terms( get_the_ID(), 'so-portfolio-type' );
						
						$this_post_types = array();
						foreach ( $terms as $term ) {
							$this_post_types[ 'name' ][] = $term->name;
							$this_post_types[ 'slug' ][] = $term->slug;
						}
						$slug = implode( ' ', $this_post_types[ 'slug' ] );
						$name = implode( ', ', $this_post_types[ 'name' ] );
						?>
                        <div class="<?php echo $slug ?> project-item grid">
                            <a class="" href="<?php the_permalink(); ?>" target="_blank"><!--PopUp Image Link-->
                                <figure class="effect-sadie">
									<?php ( has_post_thumbnail() ) ? the_post_thumbnail() : ''; ?>
                                    <figcaption>
                                        <h2><?php the_title() ?></h2>
                                        <p>
                                            <small><?php echo $name ?></small>
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>
