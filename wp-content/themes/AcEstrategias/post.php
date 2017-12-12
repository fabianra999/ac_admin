<?php
/**
 * Template Name: post-tp
 */
?>
<div class="layout__post">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="title__layout__post">
                    <h1>Post</h1>
                </div>
            </div>
        </div>
        <div class="warp__post">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'ASC',
                    'posts_per_page' => '-1',
                );
                // The Query
                $the_query = new WP_Query($args);
                // The Loop
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        get_template_part('templates/content', get_post_format());
                        //the_post_navigation();
                        ?>
                    <?php }
                } else {
                    echo 'No hay artículos';
                    // no se encontraron artículos
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>
</div>