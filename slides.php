<?php
    $args = array( 'post_type' => 'slides' );
    $loop = new WP_Query( $args );
?>
    <ul class="slides owl-carousel" id="owl-carousel">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li class="slide">
                <?php the_post_thumbnail( 'full', array( 'class' => 'fill-box' ) ); ?>
            </li>
        <?php endwhile; ?>
    </ul>
