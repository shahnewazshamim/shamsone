<?php
/**
 * The template part for displaying section portfolio.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
$args      = array(
	'post_type'      => 'so-portfolio',
	'order'          => 'ASC',
	'orderby'        => 'post_title',
	'posts_per_page' => 6,
);
$the_query = new WP_Query( $args );
?>

<section id="projects" class="section section-padding projects">
    <div class="container">
        <!--Page Header-->
        <div class="row section-header">
            <h2>
                Portfolio
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
            </p>
        </div>
        <div class="row project-content text-center">
            <ul class="filter-list">
                <li data-filter="*" class="active">All</li>
                <li data-filter=".webdesign">Web Design</li>
                <li data-filter=".graphics">Graphics</li>
                <li data-filter=".photography">Photography</li>
                <li data-filter=".app">App</li>
            </ul>
            <div class="porject-container">
				<?php if ( have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php //$post_meta = get_post_meta( $post->ID, '_so_portfolio_post_options', true ); ?>
                    <!--Single Project Item-->
                    <div class="webdesign project-item grid">
                        <a class="image-popup-link" href="<?php the_post_thumbnail_url(); ?> "><!--PopUp Image Link-->
                            <figure class="effect-sadie">
	                            <?php ( has_post_thumbnail() ) ? the_post_thumbnail( 'portfolio-thumb' ) : ''; ?>

                                <!--<img src="assets/img/projects/1.jpg" alt="img02">-->
                                <figcaption>
                                    <h2><?php the_title() ?></h2>
                                    <p><?php the_content() ?></p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
				<?php endwhile; ?>
				<?php endif; ?>

                <!--Single Project Item
                <div class="webdesign project-item grid">
                    <a class="image-popup-link" href="assets/img/projects/1.jpg"><!--PopUp Image Link
                        <figure class="effect-sadie">
                            <img src="assets/img/projects/1.jpg" alt="img02">
                            <figcaption>
                                <h2>Project Name</h2>
                                <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!--Single Project Item
                <div class="graphics project-item grid">
                    <a class="image-popup-link" href="assets/img/projects/2.jpg"><!--PopUp Image Link
                        <figure class="effect-sadie">
                            <img src="assets/img/projects/2.jpg" alt="img02">
                            <figcaption>
                                <h2>Project Name</h2>
                                <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!--Single Project Item
                <div class="sports project-item grid">
                    <a class="image-popup-link" href="assets/img/projects/6.jpg"><!--PopUp Image Link
                        <figure class="effect-sadie">
                            <img src="assets/img/projects/6.jpg" alt="img02">
                            <figcaption>
                                <h2>Project Name</h2>
                                <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!--Single Project Item
                <div class="photography graphics project-item  grid">
                    <a class="image-popup-link" href="assets/img/projects/3.jpg"><!--PopUp Image Link
                        <figure class="effect-sadie">
                            <img src="assets/img/projects/3.jpg" alt="img02">
                            <figcaption>
                                <h2>Project Name</h2>
                                <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!--Single Project Item
                <div class="photography project-item grid">
                    <a class="image-popup-link" href="assets/img/projects/7.jpg"><!--PopUp Image Link
                        <figure class="effect-sadie">
                            <img src="assets/img/projects/7.jpg" alt="img02">
                            <figcaption>
                                <h2>Project Name</h2>
                                <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!--Single Project Item
                <div class="app project-item grid">
                    <a class="image-popup-link" href="assets/img/projects/4.jpg"><!--PopUp Image Link
                        <figure class="effect-sadie">
                            <img src="assets/img/projects/4.jpg" alt="img02">
                            <figcaption>
                                <h2>Project Name</h2>
                                <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!--Single Project Item
                <div class="webdesign graphics project-item grid">
                    <a class="image-popup-link" href="assets/img/projects/5.jpg"><!--PopUp Image Link
                        <figure class="effect-sadie">
                            <img src="assets/img/projects/5.jpg" alt="img02">
                            <figcaption>
                                <h2>Project Name</h2>
                                <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!--Single Project Item
                <div class="webdesign project-item grid">
                    <a class="image-popup-link" href="assets/img/projects/8.jpg"><!--PopUp Image Link
                        <figure class="effect-sadie">
                            <img src="assets/img/projects/8.jpg" alt="img02">
                            <figcaption>
                                <h2>Project Name</h2>
                                <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!--Single Project Item
                <div class="app project-item grid">
                    <a class="image-popup-link" href="assets/img/projects/9.jpg"><!--PopUp Image Link
                        <figure class="effect-sadie">
                            <img src="assets/img/projects/9.jpg" alt="img02">
                            <figcaption>

                                <h2>Project Name</h2>
                                <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>-->
            </div>
        </div>
    </div>
</section>
