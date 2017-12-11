<?php
/**
 * Template Name: servicios-tp
 */
?>

<div class="layout__servicios">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title__layout__servicios">
                    <h1>SERVICIOS</h1>
                </div>
            </div>
        </div>

        <?php if (get_field('servicios_items')): ?>
            <div class='row servicios_items'>
                <?php if (have_rows('servicios_items')): ?>
                    <?php while (have_rows('servicios_items')) : the_row(); ?>

                        <div class="col-12 <?php if (get_sub_field('servicio_destacado')): ?> <?php echo 'col-sm-6' ?> <?php endif; ?> <?php if (!get_sub_field('servicio_destacado')): ?> <?php echo 'col-sm-4' ?> <?php endif; ?> ">
                            <div class="">
                                <?php if (get_sub_field('servicios_item_imagen')): ?>
                                    <div class='servicios_item_imagen'>
                                        <img class="img-fluid"
                                             src="<?php echo get_sub_field('servicios_item_imagen')['url'] ?>"
                                             alt="<?php echo get_sub_field('servicios_item_imagen') ?>">
                                    </div><!-- .servicios_item_imagen -->
                                <?php endif; ?>

                                <?php if (get_sub_field('servicios_items_titulo')): ?>
                                    <div class='servicios_items_titulo'>
                                        <h2>
                                            <?php the_sub_field('servicios_items_titulo') ?>
                                        </h2>
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
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        <?php endif; ?>
    </div>


</div>