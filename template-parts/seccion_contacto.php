<?php
  $imagen = get_field('imagen');
  $texto = get_field('texto');
  $formulario = get_field('formulario');
 ?>
 <style>:root{--color-pagina: #B1A77E
 !important;}</style>

 <section class="grid-100 px-0 bg-brown-200 pt-71 pb-71 sm-pt-37 sm-pb-47 sm-px-28">
    <div class="grid-50 tablet-grid-50 mobile-grid-100 px-0 only-desk relative">
      <img class="lazyload w-full mt-35 z-10 relative" data-src="<?= $imagen['url'];?>" alt="<?= $imagen['alt'] ? $imagen['alt'] : $imagen['title'];?>">
      <img class="lazyload letra-fondo-contacto" data-src="https://tectonica.com.pe/wp-content/uploads/2021/05/letra_t_contacto.png" alt="Logo tectonica sombra">
    </div>
    <div class="grid-50 tablet-grid-50 mobile-grid-100 sm-px-0">
      <div class="mxw-446 mx-auto">
        <div class="grid-100 sm-px-0">
          <div class="grid-100 sm-px-0">
            <div class="sm-text-center text-contacto sm-br-none"><?= $texto;?></div>
          </div>
        </div>
        <?php if($formulario):?>
          <div class="form form--bg-white sm-form--label-bold">
            <?php echo do_shortcode($formulario);?>
          </div>
        <?php endif;?>
      </div>
    </div>
 </section>