<div class="col-12 col-sm-4" <?php post_class(); ?>>
    <div class="item__post">
        <div class="header__post">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php get_template_part('templates/entry-meta'); ?>
        </div>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>
