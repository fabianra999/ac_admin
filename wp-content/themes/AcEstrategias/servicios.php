<?php
/**
 * Template Name: servicios-tp
 */
?>



<?php if (get_field('servicios_items')): ?>
    <div class='servicios_items'>
        <?php if (have_rows('servicios_items')): ?>
            <?php while (have_rows('servicios_items')) : the_row(); ?>


                <div class="<?php if (get_sub_field('servicio_destacado')): ?> <?php echo 'active' ?> <?php endif; ?> ">
                    <?php if (get_sub_field('servicios_item_imagen')): ?>
                        <div class='servicios_item_imagen'>
                            <img class="img-fluid" src="<?php echo get_sub_field('servicios_item_imagen')['url'] ?>"
                                 alt="<?php echo get_sub_field('servicios_item_imagen') ?>">
                        </div><!-- .servicios_item_imagen -->
                    <?php endif; ?>

                    <?php if (get_sub_field('servicios_items_titulo')): ?>
                        <div class='servicios_items_titulo'>
                            <?php the_sub_field('servicios_items_titulo') ?>
                        </div><!-- .servicios_items_titulo -->
                    <?php endif; ?>

                    <?php if (get_sub_field('servicios_items_descripcion')): ?>
                        <div class='servicios_items_descripcion'>
                            <?php the_sub_field('servicios_items_descripcion') ?>
                        </div><!-- .servicios_items_descripcion -->
                    <?php endif; ?>


                    <?php if (get_sub_field('servicios_items_ver_mas_link')): ?>
                        <div class='servicios_items_ver_mas_link'>
                            <a href='<?php the_sub_field('servicios_items_ver_mas_link') ?>'>
                                <?php if (get_sub_field('servicios_items_ver_mas')): ?>
                                    <div class='servicios_items_ver_mas'>
                                        <?php the_sub_field('servicios_items_ver_mas') ?>
                                    </div><!-- .servicios_items_ver_mas -->
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php endif; ?>


                    <?php if (get_sub_field('servicios_items_consulta_link')): ?>
                        <div class='servicios_items_consulta_link'>
                            <a href='<?php the_sub_field('servicios_items_consulta_link') ?>'>
                                <?php if (get_sub_field('servicios_items_consulta')): ?>
                                    <div class='servicios_items_consulta'>
                                        <?php the_sub_field('servicios_items_consulta') ?>
                                    </div>
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
<?php endif; ?>
