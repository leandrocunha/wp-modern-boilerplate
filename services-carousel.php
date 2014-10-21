<?php
    $args = array( 'post_type' => 'services' );
    $loop = new WP_Query( $args );
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>What we do?</h2>
            </div>
        </div>
        <?php
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <div class="col-md-4">
            <div class="thumbnail">
                <?php the_post_thumbnail( '350x150' ); ?>
            </div>
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
        </div>
        <?php
            endwhile;
        ?>
    </div>
</div>
