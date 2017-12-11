<?php
/**
 * Template Name: quienesSomos-tp
 */
?>

<div class="layout__quienesSomos">


    <?php if (get_field('items_quienes_somos')): ?>
        <div class='items_quienes_somos'>
            <div class='container'>
                <div class="row">
                    <?php if (have_rows('items_quienes_somos')): ?>
                        <?php while (have_rows('items_quienes_somos')) : the_row(); ?>
                            <div class="col-12 col-sm-6">
                                <div class="item_quienes_somos">

                                    <?php if (get_sub_field('titulo_item_quienes_somos')): ?>
                                        <div class='titulo_item_quienes_somos'>
                                            <h2>
                                                <?php the_sub_field('titulo_item_quienes_somos') ?>
                                            </h2>
                                        </div>
                                    <?php endif; ?>


                                    <?php if (get_sub_field('imagen_item_quienes_somos')): ?>
                                        <div class='imagen_item_quienes_somos'>
                                            <img class="img-fluid"
                                                 src="<?php echo get_sub_field('imagen_item_quienes_somos')['url'] ?>"
                                                 alt="<?php echo get_sub_field('imagen_item_quienes_somos') ?>">
                                        </div>
                                    <?php endif; ?>


                                    <?php if (get_sub_field('descripcion_item_quienes_somos')): ?>
                                        <div class='descripcion_item_quienes_somos'>
                                            <p>
                                                <?php the_sub_field('descripcion_item_quienes_somos') ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    <?php endif; ?>

    <hr>

    <div class="professional__profile">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 align-self-center">
                    <?php if (get_field('perfil_profesional_nombre')): ?>
                        <div class='perfil_profesional_nombre'>
                            <h1>
                                <?php the_field('perfil_profesional_nombre') ?>
                            </h1>
                        </div><!-- .perfil_profesional_nombre -->
                    <?php endif; ?>
                </div>
                <div class="col-12 col-sm-6 align-self-center">
                    <?php if (get_field('perfil_profesional_imagen')): ?>
                        <div class='imagen_item_quienes_somos'>
                            <img class="img-fluid" src="<?php echo get_field('perfil_profesional_imagen')['url'] ?>"
                                 alt="<?php echo get_field('perfil_profesional_imagen') ?>">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-sm-12">
                    <?php if (get_field('perfil_profesional_descripcion')): ?>
                        <div class='perfil_profesional_descripcion'>
                            <?php the_field('perfil_profesional_descripcion') ?>
                        </div><!-- .perfil_profesional_descripcion -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <?php if (get_field('perfil_profesional')): ?>
        <div class='perfil_profesional'>
            <?php the_field('perfil_profesional') ?>
        </div>
    <?php endif; ?>

</div>