<?php
    $titulo = get_field('titulo');
    $imagen = get_field('imagen');
    $imagenMovil = get_field('imagen_movil');
 ?>

<section class="grid-100 px-0">
    <div class="grid-40 tablet-grid-40 mobile-grid-100 px-0 line-0">
        <img class="lazyload w-full cover only-desk" data-src="<?= $imagen["url"];?>" alt="<?= $imagen["alt"] ? $imagen["alt"] : $imagen["title"];?>">
        <img class="lazyload w-full sm-h-249 cover only-mov" data-src="<?= $imagenMovil["url"];?>" alt="<?= $imagenMovil["alt"] ? $imagenMovil["alt"] : $imagenMovil["title"];?>">
    </div>
    <div class="grid-60 tablet-grid-60 mobile-grid-100 pt-93 sm-pt-23 sm-pb-71 px-69 sm-px-0 pb-103 sm-text-center">
        <h2 class="title strong-big color-title-brown-100 inline-block text-left sm-text-center "><?= $titulo;?></h2>
        <?php if( have_rows('caracteristicas') ): ?>
            <div class="grid-100 flex wrap sm-px-0">
            <?php while( have_rows('caracteristicas') ): the_row(); 
                $icono = get_sub_field('icono');
            ?>
                <div class="grid-50 tablet-grid-50 mobile-grid-100 text-center grid-mb-54 sm-px-0">
                    <img class="lazyload h-93 sm-h-95" data-src="<?= $icono["url"];?>" alt="<?= $icono["alt"] ? $icono["alt"] : $icono["title"];?>">
                    <h3 class="title-nosotros mxw-273 mx-auto"><?php the_sub_field('titulo'); ?></h3>
                    <div class="text-nosotros mxw-273 mx-auto"><?php the_sub_field('descripcion'); ?></div>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

