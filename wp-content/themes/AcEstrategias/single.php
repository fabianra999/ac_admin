<?php
/**
 * Template Name: contacto-tp
 */
?>


<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6">
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