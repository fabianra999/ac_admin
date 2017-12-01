<?php
/**
 * Template Name: quienesSomos-tp
 */
?>

<div class="layout__quienesSomos">


    <?php if (get_field('items_quienes_somos')): ?>
        <div class='items_quienes_somos'>
            <?php if (have_rows('items_quienes_somos')): ?>
                <?php while (have_rows('items_quienes_somos')) : the_row(); ?>


                    <?php if (get_sub_field('titulo_item_quienes_somos')): ?>
                        <div class='titulo_item_quienes_somos'>
                            <?php the_sub_field('titulo_item_quienes_somos') ?>
                        </div>
                    <?php endif; ?>


                    <?php if (get_sub_field('imagen_item_quienes_somos')): ?>
                        <div class='imagen_item_quienes_somos'>
                            <img class="img-fluid" src="<?php echo get_sub_field('imagen_item_quienes_somos')['url'] ?>"
                                 alt="<?php echo get_sub_field('imagen_item_quienes_somos') ?>">
                        </div>
                    <?php endif; ?>


                    <?php if (get_sub_field('descripcion_item_quienes_somos')): ?>
                        <div class='descripcion_item_quienes_somos'>
                            <?php the_sub_field('descripcion_item_quienes_somos') ?>
                        </div>
                    <?php endif; ?>


                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    <?php endif; ?>



    <?php if( get_field( 'perfil_profesional' ) ): ?>
        <div class='perfil_profesional'>
            <?php the_field( 'perfil_profesional' ) ?>
        </div>
    <?php endif; ?>




        <?php if( get_field( 'perfil_profesional_nombre' ) ): ?>
            <div class='perfil_profesional_nombre'>
                <?php the_field( 'perfil_profesional_nombre' ) ?>
            </div><!-- .perfil_profesional_nombre -->
        <?php endif; ?>

        <?php if (get_field('perfil_profesional_imagen')): ?>
            <div class='imagen_item_quienes_somos'>
                <img class="img-fluid" src="<?php echo get_field('perfil_profesional_imagen')['url'] ?>"
                     alt="<?php echo get_field('perfil_profesional_imagen') ?>">
            </div>
        <?php endif; ?>

        <?php if( get_field( 'perfil_profesional_descripcion' ) ): ?>
            <div class='perfil_profesional_descripcion'>
                <?php the_field( 'perfil_profesional_descripcion' ) ?>
            </div><!-- .perfil_profesional_descripcion -->
        <?php endif; ?>



</div>