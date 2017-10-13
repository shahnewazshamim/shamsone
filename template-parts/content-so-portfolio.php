<?php
/**
 * The template part for displaying portfolio details.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section id="portfolio-details" class="section section-padding portfolio">
    <div class="container">
        <!--Page Header-->
        <div class="row section-header">
            <h1><?php the_title() ?></h1>
	        <?php
	        $terms = wp_get_post_terms( get_the_ID(), 'so-portfolio-type' );
	
	        $this_post_types = array();
	        foreach ( $terms as $term ) {
		        $this_post_types['name'][] = $term->name;
		        $this_post_types['slug'][] = $term->slug;
	        }
	        $slug = implode( ' ', $this_post_types['slug'] );
	        $name = implode( ', ', $this_post_types['name'] );
	        ?>
            <p><?php echo $name ?></p>
        </div>
        <!--Page Content-->
        <div class="portfolio-detail">
	        <?php $post_meta = get_post_meta( $post->ID, '_so_portfolio_post_options', true ); ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <h4 class="text-main">Technologies</h4>
                    <ul>
		                <?php foreach ( $post_meta['so_portfolio_key_tech'] as $key => $value ) : ?>
                            <li><p><i class="fa fa-code text-main"></i> <?php echo $value['so_portfolio_key_tech_title'] ?></p></li>
		                <?php endforeach; ?>
                    </ul>
                    <br>
                    <h4 class="text-main">Tools and IDE</h4>
                    <ul>
		                <?php foreach ( $post_meta['so_portfolio_key_tool'] as $key => $value ) : ?>
                            <li><p><i class="fa fa-wrench text-main"></i> <?php echo $value['so_portfolio_key_tool_title'] ?></p></li>
		                <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <p><?php the_content() ?></p>
                    <div class="blockquote">
                        <p class="text-main">Project Duration - <?php echo $post_meta['so_portfolio_overview_duration']?></p>
                        <p class="text-main">Team Members - <?php echo $post_meta['so_portfolio_overview_team']?></p>
                    </div>
                    <ul>
		                <?php foreach ( $post_meta['so_portfolio_overview_functionality'] as $key => $value ) : ?>
                            <li><p><i class="fa fa-check text-main"></i> <?php echo $value['so_portfolio_overview_functionality_title'] ?></p></li>
		                <?php endforeach; ?>
                    </ul>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
	                        <?php
	                        foreach ( $post_meta as $key => $value ) {
		                        if ( strpos( $key, 'so_portfolio_other_' ) !== false ) {
			                        if ( $value == '' ) {
				                        continue;
			                        }
			                        $links[ $key ] = $value;
		                        }
	                        }
	                       if ( ! empty( $links ) ) {
		                        foreach ( $links as $icon => $url ) {
			                        $icon = str_replace( '_', '-', str_replace( 'so_portfolio_other_', '', $icon ) );
			                        echo '<a href="' . $url . '" target="_blank" class="btn btn-boch btn-colored"><i class="fa fa-2x fa-' . $icon . '" aria-hidden="true"></i></a> ';
		                        }
	                        }
	                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
