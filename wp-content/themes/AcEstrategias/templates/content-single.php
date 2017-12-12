<?php while (have_posts()) : the_post(); ?>
    <div class="col-12" <?php post_class(); ?>>
        <div class="header__single">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
        </div>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
      <!--  <footer>
            <?php /*wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); */?>
        </footer>-->

        <?php comments_template('/templates/comments.php'); ?>
    </div>
<?php endwhile; ?>
