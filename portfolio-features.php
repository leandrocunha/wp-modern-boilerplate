<?php
    $args = array( 'post_type' => 'portfolio' );
    $loop = new WP_Query( $args );
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2 class="portfolio-scroll">Portfólio</h2>
            </div>
        </div>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-3">
                <div class="thumbnail">
                    <?php the_post_thumbnail( '250x250' ); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
