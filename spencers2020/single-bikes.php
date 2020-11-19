<?php

/** Template Name: Bikes
*/

get_header();
?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
                $args = array(
                    'post_type' => 'bikes'
                );
                $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts() ) : while ($the_query->have_posts() ) :$the_query->the_post(); ?>
            <h2><?php the_title(); ?></h2>

            <p>My bike type is a: <?php the_field('type'); ?></p>
            <p>The color is: <?php the_field('color'); ?> </p>
            <img src="<?php the_field('image');  ?>" />
            
            <?php endwhile; ?>
            <?php endif; ?>
        </main>
    </div>
</div>

<?php get_footer(); 