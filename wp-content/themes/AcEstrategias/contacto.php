<?php
/**
 * Template Name: contacto-tp
 */
?>

<div class="layout__servicios">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="contactInformation">
                    <div class="contactInformation__address">
                        <div class="title"></div>
                        <div class="info"></div>
                    </div>
                    <div class="contactInformation__email">
                        div class="title">
                    </div>
                    <div class="info"></div>
                </div>
                <div class="contactInformation__tel">
                    div class="title">
                </div>
                <div class="info"></div>
            </div>

            <div class="col-12 col-sm-6">
                <?php if (qtrans_getLanguage() == "es") : ?>
                    <?php echo do_shortcode('[contact-form-7 id="178" title="Cantacto Ep"]') ?>
                <?php endif ?>
                <?php if (qtrans_getLanguage() == "en") : ?>
                    <?php echo do_shortcode('[contact-form-7 id="178" title="Cantacto Ep"]') ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>