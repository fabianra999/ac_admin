<?php
/**
 * Template Name: inicio-tp
 */
?>


<div class="layout__home">

    <article class="home__gallery">
        <div id="carouselExampleIndicators" class="carousel slide galeria__home" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php if (get_field('images')): ?>
                    <?php $j = 0; ?>
                    <?php foreach (get_field('images') as $image): ?>

                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $j ?>"
                            class=' <?php echo $j == 0 ? 'active' : '' ?> '>
                            <?php echo 0 + $j ?>
                        </li>
                        <?php $j++; endforeach; ?>
                <?php endif; ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php if (get_field('images')): ?>
                    <?php $i = 0; ?>
                    <?php foreach (get_field('images') as $image): ?>
                        <div class='carousel-item <?php echo $i == 0 ? 'active' : '' ?>'>
                            <img src='<?php echo $image['sizes']['thumbnail']; ?>'
                                 alt='<?php echo $image['alt']; ?>'/>
                        </div>
                        <?php $i++; endforeach; ?>
                <?php endif; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </article>

    <div class="container">
        <article class="home__products">
            <?php if (get_field('items_home')): ?>
                <div class='items_home'>
                    <div class='row'>
                        <?php if (have_rows('items_home')): ?>
                            <?php while (have_rows('items_home')) : the_row(); ?>
                                <?php
                                $itemClas = get_sub_field('titulo');
                                $classItem = preg_replace("[\s+]", "", $itemClas);
                                ?>
                                <div class='item_home col-12 col-sm-4 <?php echo $classItem ?>'>

                                    <!-- .titulo -->
                                    <?php if (get_sub_field('titulo_item_home')): ?>
                                        <div class='warp__titulo'>
                                            <h1><?php the_sub_field('titulo_item_home') ?></h1>
                                        </div>
                                    <?php endif; ?>

                                    <!-- .descripcion -->
                                    <?php if (get_sub_field('texto_item_home')): ?>
                                        <div class='warp__descripcion'>
                                            <p> <?php the_sub_field('texto_item_home') ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <!-- .boton -->
                                    <?php if (get_sub_field('boton_item_home')): ?>
                                        <div class='warp__boton'>
                                            <a href='<?php the_sub_field('boton_item_home') ?>'>Boton</a>
                                        </div>
                                    <?php endif; ?>

                                    <!-- .imagenes -->
                                    <?php if (get_sub_field('imagen_item_home')): ?>
                                        <div class='warp__imagen'>
                                            <img class="img-fluid" src="<?php echo get_sub_field('imagen_item_home')['url'] ?>"
                                                 alt="<?php echo get_sub_field('imagen_item_home') ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            <?php endif; ?>
        </article>

        <article class="home__testimonials">
            <?php if (get_field('testimonios_items')): ?>
                <div class='items_home'>
                    <div class='row'>
                        <?php if (have_rows('testimonios_items')): ?>
                            <?php while (have_rows('testimonios_items')) : the_row(); ?>
                                <?php
                                $itemClas = get_sub_field('titulo');
                                $classItem = preg_replace("[\s+]", "", $itemClas);
                                ?>
                                <div class='item_home col-12 col-sm-4 <?php echo $classItem ?>'>

                                    <!-- .descripcion -->
                                    <?php if (get_sub_field('testimonios_descripcion')): ?>
                                        <div class='warp__descripcion'>
                                            <p> <?php the_sub_field('testimonios_descripcion') ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <!-- .titulo -->
                                    <?php if (get_sub_field('testimonios_nombre')): ?>
                                        <div class='warp__titulo'>
                                            <h1><?php the_sub_field('testimonios_nombre') ?></h1>
                                        </div>
                                    <?php endif; ?>

                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            <?php endif; ?>
        </article>
    </div>
</div>