<?php
/**
 * Template Name: contacto-tp
 */
?>

<div class="layout__contacto">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="title__layout__contacto">
                    <h1>Contacto</h1>
                </div>
            </div>
        </div>

        <div class="warp__contacto">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="contactInformation">
                        <?php if (get_field('direccion')): ?>
                            <div class="contactInformation__address">
                                <?php if (get_field('direccion')['titulo_direccion']): ?>
                                    <div class="title">
                                        <h2>
                                            <?php echo get_field('direccion')['titulo_direccion']; ?>
                                        </h2>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('direccion')['info_direccion']): ?>
                                    <div class="info">
                                        <p>
                                            <?php echo get_field('direccion')['info_direccion']; ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (get_field('email')): ?>
                            <div class="contactInformation__email">
                                <?php if (get_field('email')['titulo_email']): ?>
                                    <div class="title">
                                        <h2>
                                            <?php echo get_field('email')['titulo_email']; ?>
                                        </h2>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('email')['info_email']): ?>
                                    <div class="info">
                                        <p>
                                            <?php echo get_field('email')['info_email']; ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (get_field('telefono')): ?>
                            <div class="contactInformation__telefono">
                                <?php if (get_field('telefono')['titulo_telefono']): ?>
                                    <div class="title">
                                        <h2>
                                            <?php echo get_field('telefono')['titulo_telefono']; ?>
                                        </h2>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('telefono')['info_telefono']): ?>
                                    <div class="info">
                                        <p>
                                            <?php echo get_field('telefono')['info_telefono']; ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>


                </div>
                <div class="col-12 col-sm-6">
                    <div class="form__contancto">
                        <?php if (qtrans_getLanguage() == "es") : ?>
                            <?php echo do_shortcode('[contact-form-7 id="178" title="Cantacto Es"]') ?>
                        <?php endif ?>
                        <?php if (qtrans_getLanguage() == "en") : ?>
                            <?php echo do_shortcode('[contact-form-7 id="207" title="Cantacto En"]') ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



