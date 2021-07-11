<?php
  $colorPagina = get_field("color_pagina");
  $nombreProyecto = get_the_title();
  $sloganProyecto = get_field('slogan_proyecto');
  $textoSombraSlogan = get_field('texto_sombra_slogan');
  $posicionTextoSombraSlogan = get_field('posicion_texto_sombra_slogan');
  $fotoDestacada = get_field('foto_destacada');
  $logo = get_field('logo_proyecto');
  $metraje = get_field('metraje');
  $dormitorios = get_field('dormitorios');
  $direccion2 = get_field('direccion2');
  $colorFondo = get_field('color_de_fondo');
 ?>

<?php if($colorPagina):?>
  <style>:root{--color-pagina: <?= $colorPagina;?> !important;}</style>
<?php endif;?>


<section class="grid-100 flex wrap px-0">
  <div class="grid-60 tablet-grid-60 mobile-grid-100 px-0 line-0 relative">
    <img class="lazyload w-full h-560 cover sm-h-279" data-src="<?= $fotoDestacada['url'];?>" alt="<?= $fotoDestacada['alt'] ? $fotoDestacada['alt'] : $fotoDestacada['title'];?>">
    <div class="card-draft__flontante--banner mx-auto only-desk">
      <div class="card-draft__flontante-item bg-white-100 text-center">
        <svg class="h-72 contain mx-auto" width="69" height="61" viewBox="0 0 69 61" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M45.1636 31.4285C48.4208 20.5855 42.2715 9.15507 31.4286 5.89777C20.5856 2.64048 9.15514 8.78985 5.89785 19.6328C2.64056 30.4757 8.78993 41.9062 19.6329 45.1635C30.4758 48.4208 41.9063 42.2714 45.1636 31.4285Z" fill="#F7F5F1"/>
          <path d="M17.0356 21.0332V15.0332C14.0356 15.0332 12.0356 17.4532 12.0356 20.0332V54.0532V54.0332C12.0356 56.7332 14.2856 59.0232 17.0556 59.0232H67.0356V21.0332H17.0356Z" fill="white"/>
          <path d="M12.0356 54.0532C12.0356 51.4732 14.0356 49.0332 17.0356 49.0332V15.0332C14.0356 15.0332 12.0356 17.4532 12.0356 20.0332V54.0532Z" fill="<?= $colorPagina;?>"/>
          <path d="M12.0356 54.0532C12.0356 51.4732 14.0356 49.0332 17.0356 49.0332V15.0332C14.0356 15.0332 12.0356 17.4532 12.0356 20.0332V54.0532Z" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M17.0356 21.0332H67.0356V59.0332H17.0556C14.2856 59.0332 12.0356 56.7332 12.0356 54.0332" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M39.0356 37.0332V45.0332H27.0356V29.0332H39.0356V34.0332" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M39.0356 29.0332H56.0356V40.0332H52.0356" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M47.0356 40.0332H52.0356V51.0332H34.0356V45.0332" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M44.0356 40.0332H39.0356" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M34.0356 0.0332031V4.0332" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M34.0356 8.0332V12.0332" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M32.0356 6.0332H28.0356" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M40.0356 6.0332H36.0356" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M25.0356 11.0332V13.0332" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M25.0356 15.0332V17.0332" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M24.0356 14.0332H22.0356" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M28.0356 14.0332H26.0356" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
        <h3 class="card-draft__flontante-title text-center"><?= $metraje?></h3>
      </div>
      <div class="card-draft__flontante-item bg-white-100 text-center">
        <svg class="h-72 contain mx-auto" style="transform: translateX(calc(var(--width_pantalla) * (calc(7/var(--width_base)))));" width="71" height="74" viewBox="0 0 63 74" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M54.1164 49.8507C63.2936 40.6735 63.2936 25.7943 54.1164 16.617C44.9392 7.4398 30.06 7.43981 20.8827 16.617C11.7055 25.7943 11.7055 40.6735 20.8827 49.8507C30.06 59.028 44.9392 59.028 54.1164 49.8507Z" fill="#F7F5F1"/>
          <path d="M44 54.7334L41.83 41.7334H45V25.7334H3V41.7334H6.17L4 54.7334H1V72.7334H4L6 69.7334H42L44 72.7334H47V54.7334H44Z" fill="white"/>
          <path d="M1 54.7334V72.7334H4L6 69.7334H42L44 72.7334H47V54.7334H1Z" fill="<?= $colorPagina;?>" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M3 41.7334V25.7334H24H45V41.7334" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 36.7334H7L4 54.7334" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M44 54.7334L41 36.7334H37" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M24 38.7334C24 39.8334 23.1 40.7334 22 40.7334H13C11.9 40.7334 11 39.8334 11 38.7334V35.7334C11 34.6334 11.9 33.7334 13 33.7334H22C23.1 33.7334 24 34.6334 24 35.7334V38.7334Z" fill="#929497" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M37 38.7334C37 39.8334 36.1 40.7334 35 40.7334H26C24.9 40.7334 24 39.8334 24 38.7334V35.7334C24 34.6334 24.9 33.7334 26 33.7334H35C36.1 33.7334 37 34.6334 37 35.7334V38.7334Z" fill="#929497" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M37 11.7334H42V12.7334L38 16.7334V17.7334H43" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M46 14.7334H51V15.7334L47 19.7334V20.7334H52" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          <path d="M54 18.7334H59V19.7334L55 23.7334V24.7334H60" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
        <h3 class="card-draft__flontante-title text-center"><?= $dormitorios?></h3>
      </div>
      <div class="card-draft__flontante-item bg-white-100 text-center">
        <svg class="h-72 contain mx-auto"  width="67" height="66" viewBox="0 0 67 66" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M46.2651 32.1953C49.6018 21.0879 43.3025 9.37867 32.1951 6.04193C21.0877 2.70519 9.37844 9.00455 6.0417 20.1119C2.70496 31.2193 9.00432 42.9286 20.1117 46.2653C31.2191 49.6021 42.9284 43.3027 46.2651 32.1953Z" fill="#F7F5F1"/>
          <path d="M17.1597 27.1631V21.1631C14.1597 21.1631 12.1597 23.5831 12.1597 26.1631V59.1831V59.1631C12.1597 61.8631 14.4097 64.1531 17.1797 64.1531H65.1597V27.1531H17.1597V27.1631Z" fill="white"/>
          <path d="M12.1597 59.1831C12.1597 56.6031 14.1597 54.1631 17.1597 54.1631V21.1631C14.1597 21.1631 12.1597 23.5831 12.1597 26.1631V59.1831Z" fill="<?= $colorPagina;?>"/>
          <path d="M17.1597 27.1631H39.1597" stroke="#2A5082" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12.1597 59.1831C12.1597 56.6031 14.1597 54.1631 17.1597 54.1631V21.1631C14.1597 21.1631 12.1597 23.5831 12.1597 26.1631V59.1831Z" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M57.1597 27.1631H65.1597V64.1631H17.1797C14.4097 64.1631 12.1597 61.8631 12.1597 59.1631" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M27.1597 62.1631V44.1631H19.1597" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
          <path d="M19.1597 39.1631H27.1597V29.1631" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
          <path d="M32.1597 29.1631V48.1631H63.1597" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
          <path d="M32.1597 62.1631V53.1631H63.1597" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
          <path d="M48.1597 15.1631C43.1897 15.1631 39.1597 19.0931 39.1597 23.9431C39.1597 26.0431 39.4797 27.4931 40.6997 29.4031C41.9197 31.3131 48.1597 40.1631 48.1597 40.1631C48.1597 40.1631 54.3997 31.3131 55.6197 29.4031C56.8397 27.4931 57.1597 26.0431 57.1597 23.9431C57.1597 19.0931 53.1297 15.1631 48.1597 15.1631ZM48.1697 27.1631H48.1397C46.4897 27.1631 45.1497 25.8831 45.1497 24.1631C45.1497 22.4331 46.4897 21.1631 48.1497 21.1631H48.1597C49.8097 21.1631 51.1497 22.4331 51.1597 24.1631C51.1597 25.8831 49.8297 27.1631 48.1697 27.1631Z" fill="#929497" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <h3 class="card-draft__flontante-direction text-center"><?= $direccion2?></h3>
      </div>
    </div>
  </div>
  <div class="grid-40 tablet-grid-40 mobile-grid-100 px-62 sm-px-34 pt-77 sm-pt-24 pb-77 flex justify-end column relative hola" style="background-color: <?= $colorFondo;?>">
    <h3 class="mb-0 card-draft__slogan"><?= $sloganProyecto;?></h3>
    <h3 class="mb-0 card-draft__slogan--shadow card-draft__slogan-<?= $posicionTextoSombraSlogan;?>"><?= $textoSombraSlogan;?></h3>
    <img class="lazyload w-full mxw-301 mt-142" data-src="<?= $logo['url'];?>" alt="<?= $logo['alt'] ? $logo['alt'] : $foto['title'];?>">
  </div>
  <div class="grid-100 only-mov w-full sm-mt-24 sm-px-15">
    <div class="card-draft__flontante--banner">
        <div class="card-draft__flontante-item bg-white-100 text-center">
          <svg class="h-72 sm-h-50 contain mx-auto" width="69" height="61" viewBox="0 0 69 61" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M45.1636 31.4285C48.4208 20.5855 42.2715 9.15507 31.4286 5.89777C20.5856 2.64048 9.15514 8.78985 5.89785 19.6328C2.64056 30.4757 8.78993 41.9062 19.6329 45.1635C30.4758 48.4208 41.9063 42.2714 45.1636 31.4285Z" fill="#F7F5F1"/>
            <path d="M17.0356 21.0332V15.0332C14.0356 15.0332 12.0356 17.4532 12.0356 20.0332V54.0532V54.0332C12.0356 56.7332 14.2856 59.0232 17.0556 59.0232H67.0356V21.0332H17.0356Z" fill="white"/>
            <path d="M12.0356 54.0532C12.0356 51.4732 14.0356 49.0332 17.0356 49.0332V15.0332C14.0356 15.0332 12.0356 17.4532 12.0356 20.0332V54.0532Z" fill="<?= $colorPagina;?>"/>
            <path d="M12.0356 54.0532C12.0356 51.4732 14.0356 49.0332 17.0356 49.0332V15.0332C14.0356 15.0332 12.0356 17.4532 12.0356 20.0332V54.0532Z" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17.0356 21.0332H67.0356V59.0332H17.0556C14.2856 59.0332 12.0356 56.7332 12.0356 54.0332" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M39.0356 37.0332V45.0332H27.0356V29.0332H39.0356V34.0332" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M39.0356 29.0332H56.0356V40.0332H52.0356" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M47.0356 40.0332H52.0356V51.0332H34.0356V45.0332" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M44.0356 40.0332H39.0356" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M34.0356 0.0332031V4.0332" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M34.0356 8.0332V12.0332" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M32.0356 6.0332H28.0356" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M40.0356 6.0332H36.0356" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M25.0356 11.0332V13.0332" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M25.0356 15.0332V17.0332" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M24.0356 14.0332H22.0356" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M28.0356 14.0332H26.0356" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          </svg>
          <h3 class="card-draft__flontante-title text-center"><?= $metraje?></h3>
        </div>
        <div class="card-draft__flontante-item bg-white-100 text-center">
          <svg class="h-72 sm-h-50 contain mx-auto" style="transform: translateX(calc(var(--width_pantalla) * (calc(7/var(--width_phone)))));" width="71" height="74" viewBox="0 0 63 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M54.1164 49.8507C63.2936 40.6735 63.2936 25.7943 54.1164 16.617C44.9392 7.4398 30.06 7.43981 20.8827 16.617C11.7055 25.7943 11.7055 40.6735 20.8827 49.8507C30.06 59.028 44.9392 59.028 54.1164 49.8507Z" fill="#F7F5F1"/>
            <path d="M44 54.7334L41.83 41.7334H45V25.7334H3V41.7334H6.17L4 54.7334H1V72.7334H4L6 69.7334H42L44 72.7334H47V54.7334H44Z" fill="white"/>
            <path d="M1 54.7334V72.7334H4L6 69.7334H42L44 72.7334H47V54.7334H1Z" fill="<?= $colorPagina;?>" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3 41.7334V25.7334H24H45V41.7334" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11 36.7334H7L4 54.7334" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M44 54.7334L41 36.7334H37" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M24 38.7334C24 39.8334 23.1 40.7334 22 40.7334H13C11.9 40.7334 11 39.8334 11 38.7334V35.7334C11 34.6334 11.9 33.7334 13 33.7334H22C23.1 33.7334 24 34.6334 24 35.7334V38.7334Z" fill="#929497" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M37 38.7334C37 39.8334 36.1 40.7334 35 40.7334H26C24.9 40.7334 24 39.8334 24 38.7334V35.7334C24 34.6334 24.9 33.7334 26 33.7334H35C36.1 33.7334 37 34.6334 37 35.7334V38.7334Z" fill="#929497" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M37 11.7334H42V12.7334L38 16.7334V17.7334H43" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M46 14.7334H51V15.7334L47 19.7334V20.7334H52" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
            <path d="M54 18.7334H59V19.7334L55 23.7334V24.7334H60" stroke="#C8C8C8" stroke-width="2" stroke-miterlimit="10"/>
          </svg>
          <h3 class="card-draft__flontante-title text-center"><?= $dormitorios?></h3>
        </div>
        <div class="card-draft__flontante-item bg-white-100 text-center">
          <svg class="h-72 sm-h-50 contain mx-auto" width="67" height="66" viewBox="0 0 67 66" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M46.2651 32.1953C49.6018 21.0879 43.3025 9.37867 32.1951 6.04193C21.0877 2.70519 9.37844 9.00455 6.0417 20.1119C2.70496 31.2193 9.00432 42.9286 20.1117 46.2653C31.2191 49.6021 42.9284 43.3027 46.2651 32.1953Z" fill="#F7F5F1"/>
            <path d="M17.1597 27.1631V21.1631C14.1597 21.1631 12.1597 23.5831 12.1597 26.1631V59.1831V59.1631C12.1597 61.8631 14.4097 64.1531 17.1797 64.1531H65.1597V27.1531H17.1597V27.1631Z" fill="white"/>
            <path d="M12.1597 59.1831C12.1597 56.6031 14.1597 54.1631 17.1597 54.1631V21.1631C14.1597 21.1631 12.1597 23.5831 12.1597 26.1631V59.1831Z" fill="<?= $colorPagina;?>"/>
            <path d="M17.1597 27.1631H39.1597" stroke="#2A5082" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.1597 59.1831C12.1597 56.6031 14.1597 54.1631 17.1597 54.1631V21.1631C14.1597 21.1631 12.1597 23.5831 12.1597 26.1631V59.1831Z" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M57.1597 27.1631H65.1597V64.1631H17.1797C14.4097 64.1631 12.1597 61.8631 12.1597 59.1631" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M27.1597 62.1631V44.1631H19.1597" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
            <path d="M19.1597 39.1631H27.1597V29.1631" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
            <path d="M32.1597 29.1631V48.1631H63.1597" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
            <path d="M32.1597 62.1631V53.1631H63.1597" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
            <path d="M48.1597 15.1631C43.1897 15.1631 39.1597 19.0931 39.1597 23.9431C39.1597 26.0431 39.4797 27.4931 40.6997 29.4031C41.9197 31.3131 48.1597 40.1631 48.1597 40.1631C48.1597 40.1631 54.3997 31.3131 55.6197 29.4031C56.8397 27.4931 57.1597 26.0431 57.1597 23.9431C57.1597 19.0931 53.1297 15.1631 48.1597 15.1631ZM48.1697 27.1631H48.1397C46.4897 27.1631 45.1497 25.8831 45.1497 24.1631C45.1497 22.4331 46.4897 21.1631 48.1497 21.1631H48.1597C49.8097 21.1631 51.1497 22.4331 51.1597 24.1631C51.1597 25.8831 49.8297 27.1631 48.1697 27.1631Z" fill="#929497" stroke="#4A4F55" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <h3 class="card-draft__flontante-direction text-center"><?= $direccion2?></h3>
        </div>
      </div>
  </div>
</section>

<?php
  $tituloGaleria = get_field("titulo_galeria");
?>

<section class="pt-82 pb-78 sm-px-28 pt-142 sm-pt-37">
  <h3 class="title-gallery color-black-200 mb-18 mxw-1288 mx-auto px-260px sm-px-0"><?= $tituloGaleria;?></h3>
  <?php if( have_rows('galeria_de_fotos') ): ?>
      <div class="slider-imagenes-1">
        <?php while( have_rows('galeria_de_fotos') ): the_row(); 
            $foto = get_sub_field('foto');
            $palabraClave = get_sub_field('palabra_clave');
            $area = get_sub_field('area');
            ?>
            <div>
                <div class="relative mx-33">
                    <a href="<?= $foto['url'];?>" data-fancybox>
                      <img class="lazyload w-full h-582 sm-h-434 cover" data-src="<?= $foto['url'];?>" alt="<?= $foto['alt'] ? $foto['alt'] : $foto['title'];?>">
                    </a>
                    <div class="card-gallery__floating-draft bg-gray-100 sm-bg-white-100 ani-slider-benefits">
                        <h3 class="card-gallery__floating-draft-area mb-0"><?= get_row_index();?><span class="card-gallery__floating-line bg-black-100 inline-block"></span><?= $area;?></h3>
                        <h3 class="card-gallery__floating-draft-title mb-0"><?= $palabraClave;?></h3>
                    </div>
                    <div class="card-gallery__floating-draft-btn bg-gray-600 ani-slider-benefits">
                        <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 7H1M19 7L13 1M19 7L13 13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="h-78 sm-h-0"></div>
                </div>
            </div>
        <?php endwhile; ?>
      </div>
  <?php endif; ?>
</section>

<?php
  $imagenLateral = get_field('imagen_lateral');
  $distrito = get_field('distrito');
  $textoSombraDistrito = get_field('texto_sombra_distrito');
  $brochure = get_field('brochure');
  $datosDelProyecto= get_field('datos_del_proyecto');
  if($brochure) $brochure = $brochure["url"];
?>

<section class="grid-100 bg-brown-200 pt-36 sm-pt-0 pb-36 sm-pb-46 px-0 flex wrap o-hidden">
    <div class="grid-20 tablet-grid-20 mobile-grid-100 px-0 line-0 only-desk">
      <img class="lazyload w-full h-570" data-src="<?= $imagenLateral['url'];?>" alt="<?= $imagenLateral['alt'] ? $imagenLateral['alt'] : $imagenLateral['title'];?>">
    </div>
    <div class="grid-50 tablet-grid-50 mobile-grid-100 pl-69 relative sm-text-center">
      <h2 class="title-draft color-title-page text-right inline-block mt-63 sm-mt-48 z-10 relative"><?= $distrito?></h2>
      <h3 class="text-shadow-distrito sm-mxw-275"><?= $textoSombraDistrito?></h3>
      <?php if( have_rows('datos_del_proyecto') ): ?>
        <div class="grid-100 sm-mx-auto sm-mxw-275 sm-px-0">
          <?php while( have_rows('datos_del_proyecto') ): the_row(); 
              $icono = get_sub_field('icono');
              $descripcion = get_sub_field('descripcion');
              ?>
              <div class="grid-50 tablet-grid-50 mobile-grid-100 px-0 grid-mb-115 sm-px-0">
                  <div class="flex">
                      <img class="lazyload w-full contain h-78 w-83 sm-h-74 sm-w-77" data-src="<?= $icono['url'];?>" alt="<?= $icono['alt'] ? $icono['alt'] : $icono['title'];?>">
                      <div class="">
                        <div class="text-description color-black-200 text-left mb-0"><?= $descripcion;?></div>
                      </div>
                  </div>
              </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="grid-30 tablet-grid-30 mobile-grid-100 px-0 column flex-center sm-mt-42">
      <?php if($brochure):?>
        <a class="inline-block btn text-center btn-outline bg-white-100" href="<?= $brochure;?>" target="_blank">DESCARGAR BROCHURE</a>
      <?php endif;?>
      <a class="color-white-100 bg-page inline-block mt-29 sm-mt-12 btn text-center" href="#cotizar">QUIERO COTIZAR</a>
    </div>
</section>

<?php
  $tituloCotizar = get_field('titulo_cotizar');
  $formularioCotizar = get_field('formulario_cotizar');
?>

<section id="cotizar" class="grid-100 pt-82 pb-87 bg-white-100 cotizar sm-px-28">
  <div class="grid-50 tablet-grid-50 mobile-grid-100 sm-px-0 sm-text-center">
    <div class="only-mov">
      <h3 class="title-draft color-title-page text-right inline-block mb-39 text-mb-0"><?= $tituloCotizar;?></h3>
    </div>
    <?php if( have_rows('slider_cotizar') ): ?>
      <div class="tabs-list mxw-570 mx-auto mb-29 mt-132 text-left">
        <?php while( have_rows('slider_cotizar') ): the_row(); 
            $nombreGrupo = get_sub_field('nombre_grupo');
            ?>
            <button class="tabs-button color-black-200 <?= get_row_index() === 1 ? "active": "";?>" data-id="tabs-panel-<?= get_row_index();?>" onClick="handleTab(event);"><?= $nombreGrupo;?></button>
        <?php endwhile; ?>
      </div>
      <?php $count = -1;?>
      <?php while( have_rows('slider_cotizar') ): the_row(); 
          $detalles = get_sub_field('detalle'); 
          ?>
          <div class="tabs-panel <?= get_row_index() === 1 ? "active": "";?>" id="tabs-panel-<?= get_row_index();?>">
            <?php if( $detalles ): ?>
              <div class="slider-cotizar-1 mxw-570 mx-auto">
                <?php foreach( $detalles as $detalle ):
                  $imagen = $detalle['imagen'];
                  $tipo = $detalle['tipo'];
                  $area = $detalle['area'];
                  $nroDormitorios = $detalle['nro_dormitorios'];
                  $nroBanos = $detalle['nro_banos'];
                ?>
                  <div>
                    <a href="<?= $imagen["url"];?>" data-fancybox>
                      <img class="lazyload w-full" data-src="<?= $imagen["url"];?>" alt="">
                    </a>
                    <div class="flex justify-between mt-44">
                      <div class="color-black-200 text-img-slider-cotizar--bold"><?= $tipo;?></div>
                      <div class="flex">
                        <div class="inline-flex align-center mr-23">
                          <svg class="mr-11 sm-mr-4 h-17 sm-h-17" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.6583 0H0.341589C0.152946 0 0 0.152946 0 0.341589V16.6584C0 16.847 0.152946 17 0.341589 17H10.2932C10.4818 17 10.6347 16.847 10.6347 16.6584C10.6347 16.4698 10.4818 16.3168 10.2932 16.3168H0.683178V8.35534H5.44765V11.63C5.44765 11.8187 5.6006 11.9716 5.78924 11.9716C5.97789 11.9716 6.13083 11.8187 6.13083 11.63V4.47785C6.13083 4.28921 5.97789 4.13626 5.78924 4.13626C5.6006 4.13626 5.44765 4.28921 5.44765 4.47785V7.67216H0.683178V0.683178H9.95164V4.96021C9.95164 5.14885 10.1045 5.3018 10.2932 5.3018H13.9056C14.0942 5.3018 14.2471 5.14885 14.2471 4.96021C14.2471 4.77157 14.0942 4.61862 13.9056 4.61862H10.6347V0.683178H16.3167V11.2885H10.2932C10.1045 11.2885 9.95164 11.4414 9.95164 11.6301C9.95164 11.8187 10.1045 11.9717 10.2932 11.9717H16.3167V16.317H13.9056C13.717 16.317 13.5641 16.4699 13.5641 16.6586C13.5641 16.8472 13.717 17.0001 13.9056 17.0001H16.6583C16.8469 17.0001 16.9998 16.8472 16.9998 16.6586V0.341589C16.9998 0.152946 16.847 0 16.6583 0Z" fill="black"/>
                          </svg>
                          <span class="text-img-slider-cotizar color-black-200"><?= $area;?></span>
                        </div>
                        <div class="inline-flex align-center mr-23">
                          <svg class="mr-11 sm-mr-4 h-17 sm-h-17" width="20" height="14" viewBox="0 0 20 14" fill="none">
                            <path d="M19.0625 10.3125H18.75V7.8125C18.7496 7.48111 18.6177 7.16342 18.3834 6.9291C18.1491 6.69477 17.8314 6.56293 17.5 6.5625V1.25C17.4996 0.918613 17.3677 0.600922 17.1334 0.366596C16.8991 0.13227 16.5814 0.000434092 16.25 0H3.125C2.79361 0.000434092 2.47592 0.13227 2.2416 0.366596C2.00727 0.600922 1.87543 0.918613 1.875 1.25V6.5625C1.54361 6.56293 1.22592 6.69477 0.991596 6.9291C0.75727 7.16342 0.625434 7.48111 0.625 7.8125V10.3125H0.3125C0.22962 10.3125 0.150134 10.3454 0.0915291 10.404C0.032924 10.4626 0 10.5421 0 10.625V11.875C0 11.9579 0.032924 12.0374 0.0915291 12.096C0.150134 12.1546 0.22962 12.1875 0.3125 12.1875H0.625V13.4375C0.625 13.5204 0.657924 13.5999 0.716529 13.6585C0.775134 13.7171 0.85462 13.75 0.9375 13.75H1.875C1.94723 13.75 2.01723 13.725 2.07307 13.6792C2.12892 13.6334 2.16715 13.5697 2.18125 13.4988L2.44375 12.1875H16.9312L17.1938 13.4988C17.2079 13.5697 17.2461 13.6334 17.3019 13.6792C17.3578 13.725 17.4278 13.75 17.5 13.75H18.4375C18.5204 13.75 18.5999 13.7171 18.6585 13.6585C18.7171 13.5999 18.75 13.5204 18.75 13.4375V12.1875H19.0625C19.1454 12.1875 19.2249 12.1546 19.2835 12.096C19.3421 12.0374 19.375 11.9579 19.375 11.875V10.625C19.375 10.5421 19.3421 10.4626 19.2835 10.404C19.2249 10.3454 19.1454 10.3125 19.0625 10.3125ZM2.5 1.25C2.50022 1.08431 2.56613 0.925461 2.6833 0.808298C2.80046 0.691135 2.95931 0.625217 3.125 0.625H16.25C16.4157 0.625217 16.5745 0.691135 16.6917 0.808298C16.8089 0.925461 16.8748 1.08431 16.875 1.25V6.5625H16.25V5.3125C16.2496 4.98111 16.1177 4.66342 15.8834 4.4291C15.6491 4.19477 15.3314 4.06293 15 4.0625H11.25C10.9186 4.06293 10.6009 4.19477 10.3666 4.4291C10.1323 4.66342 10.0004 4.98111 10 5.3125V6.5625H9.375V5.3125C9.37457 4.98111 9.24273 4.66342 9.0084 4.4291C8.77408 4.19477 8.45639 4.06293 8.125 4.0625H4.375C4.04361 4.06293 3.72592 4.19477 3.4916 4.4291C3.25727 4.66342 3.12543 4.98111 3.125 5.3125V6.5625H2.5V1.25ZM15.625 5.3125V6.5625H10.625V5.3125C10.6252 5.14681 10.6911 4.98796 10.8083 4.8708C10.9255 4.75363 11.0843 4.68772 11.25 4.6875H15C15.1657 4.68772 15.3245 4.75363 15.4417 4.8708C15.5589 4.98796 15.6248 5.14681 15.625 5.3125ZM8.75 5.3125V6.5625H3.75V5.3125C3.75022 5.14681 3.81613 4.98796 3.9333 4.8708C4.05046 4.75363 4.20931 4.68772 4.375 4.6875H8.125C8.29069 4.68772 8.44954 4.75363 8.5667 4.8708C8.68387 4.98796 8.74978 5.14681 8.75 5.3125ZM1.25 7.8125C1.25022 7.64681 1.31613 7.48796 1.4333 7.3708C1.55046 7.25363 1.70931 7.18772 1.875 7.1875H17.5C17.6657 7.18772 17.8245 7.25363 17.9417 7.3708C18.0589 7.48796 18.1248 7.64681 18.125 7.8125V10.3125H1.25V7.8125ZM1.61875 13.125H1.25V12.1875H1.80625L1.61875 13.125ZM18.125 13.125H17.7563L17.5688 12.1875H18.125V13.125ZM18.75 11.5625H0.625V10.9375H18.75V11.5625Z" fill="#000000"/>
                          </svg>
                          <span class="text-img-slider-cotizar color-black-200"><?= $nroDormitorios;?></span>
                        </div>
                        <div class="inline-flex align-center">
                          <svg class="mr-11 sm-mr-4 h-17 sm-h-17" width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.78333 7.93333H8.5V7.36667H8.78333C9.25278 7.36667 9.63334 6.98611 9.63334 6.51667V1.64787C10.0751 1.49228 10.3071 1.00803 10.1514 0.566279C10.0317 0.22642 9.71033 -0.000671368 9.35 1.54839e-06H0.85C0.38165 -0.000883868 0.00127506 0.378074 0.00038964 0.846424C-0.000318694 1.20675 0.226808 1.52816 0.566667 1.64787V6.51667C0.566667 6.98611 0.947219 7.36667 1.41667 7.36667H1.7V7.93333H1.41667C0.634667 7.93425 0.000920834 8.568 0 9.35C0 9.50647 0.126863 9.63333 0.283333 9.63333C0.277773 11.5267 1.38833 13.2455 3.11667 14.0185V16.7167C3.11667 16.8731 3.24353 17 3.4 17H6.8C6.95647 17 7.08333 16.8731 7.08333 16.7167V14.0185C8.81142 13.2452 9.92188 11.5266 9.91667 9.63333C10.0731 9.63333 10.2 9.50647 10.2 9.35C10.1991 8.568 9.56534 7.93425 8.78333 7.93333ZM0.566667 0.850001C0.566667 0.693531 0.693529 0.566668 0.85 0.566668H9.35C9.50647 0.566668 9.63334 0.693531 9.63334 0.850001C9.63334 1.00647 9.50647 1.13333 9.35 1.13333H0.85C0.693529 1.13333 0.566667 1.00647 0.566667 0.850001ZM1.41667 6.8C1.2602 6.8 1.13333 6.67314 1.13333 6.51667V1.7H9.06667V6.51667C9.06667 6.67314 8.93981 6.8 8.78333 6.8H1.41667ZM7.93333 7.36667V7.93333H2.26667V7.36667H7.93333ZM3.68333 16.4333V14.2381L3.70968 14.2451C3.73802 14.2536 3.76635 14.2602 3.79468 14.2681C3.89838 14.2976 4.00311 14.3235 4.1089 14.3457C4.15962 14.3565 4.21062 14.3653 4.26162 14.3741C4.34917 14.3894 4.43728 14.4024 4.52597 14.4123C4.5798 14.4188 4.63307 14.4256 4.68747 14.4302C4.80289 14.4398 4.91856 14.4453 5.03455 14.4466C5.05608 14.4466 5.07705 14.4497 5.09858 14.4497C5.12012 14.4497 5.14137 14.4469 5.1629 14.4466C5.27889 14.4453 5.39449 14.4398 5.5097 14.4302C5.5641 14.4256 5.61793 14.4185 5.67205 14.4123C5.75988 14.4018 5.84715 14.3894 5.93413 14.3743C5.98598 14.3653 6.03783 14.3559 6.0894 14.346C6.19253 14.3248 6.29425 14.299 6.39512 14.2706C6.42657 14.2619 6.45858 14.2548 6.49003 14.2454C6.49825 14.2429 6.50703 14.2412 6.51525 14.2386L6.51667 16.4333H3.68333ZM6.69233 13.5731C5.92971 13.8806 5.09444 13.9611 4.28712 13.8048C4.01965 13.7534 3.75799 13.6755 3.50597 13.5722C1.89709 12.9276 0.844475 11.3665 0.85 9.63333H9.35C9.35538 11.3672 8.30202 12.9287 6.69233 13.5731ZM0.615117 9.06667C0.73564 8.7273 1.05655 8.50042 1.41667 8.5H8.78333C9.14345 8.50042 9.46436 8.7273 9.58488 9.06667H0.615117Z" fill="black"/>
                          </svg>
                          <span class="text-img-slider-cotizar color-black-200"><?= $nroBanos;?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach;?>
              </div>
            <?php endif;?>
          </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="grid-50 tablet-grid-50 mobile-grid-100 pr-103 pl-90 sm-px-0">
    <div class="only-desk">
      <h3 class="title-draft color-title-page text-right inline-block mb-39 text-mb-0"><?= $tituloCotizar;?></h3>
    </div>
    <?php if($formularioCotizar):?>
      <div class="form sm-mt-47 form--label-bold form--label-black form--border-black">
          <?php echo do_shortcode($formularioCotizar);?>
      </div>
    <?php endif;?>
  </div>
</section>

<?php
  $tituloUbicacion = get_field('titulo_ubicacion');
  $introUbicacion = get_field('intro_ubicacion');
  $direccionUbicacion = get_field('direccion_ubicacion');
  $telefono = get_field('telefono');
  $mapa = get_field('mapa');
  $colorFondoUbicacion = get_field('color_de_fondo_ubicacion');
  $imagenFondoUbicacion = get_field('imagen_fondo_ubicacion');
  $posicionFondo = get_field('posicion_fondo');
?>

<section class="grid-100 pt-152 pb-152 sm-px-0 sm-pb-0 relative o-hidden" style="background-color: <?= $colorFondoUbicacion;?>">
  <div class="grid-40 tablet-grid-40 mobile-grid-100 pl-134 sm-px-28 sm-text-center">
    <h3 class="title-draft text-right inline-block color-white-100 mt-58"><?= $tituloUbicacion;?></h3>
    <div class="color-white-100 text-location sm-br-none text-left"><?= $introUbicacion;?></div>
    <div class="flex">
      <svg class="h-43 w-43 sm-h-43 sm-w-43" width="46" height="45" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M31.2412 21.7404C33.4943 14.24 29.2406 6.33313 21.7402 4.07995C14.2398 1.82677 6.33292 6.0805 4.07974 13.5809C1.82656 21.0813 6.08029 28.9882 13.5807 31.2414C21.0811 33.4945 28.988 29.2408 31.2412 21.7404Z" fill="#F6F4F1"/>
        <path d="M12.5873 18.3421V14.2905C10.5615 14.2905 9.21094 15.9247 9.21094 17.6668V39.9641V39.9506C9.21094 41.7738 10.7303 43.3201 12.6008 43.3201H44.9999V18.3354H12.5873V18.3421Z" fill="white"/>
        <path d="M9.21094 39.9641C9.21094 38.2219 10.5615 36.5742 12.5873 36.5742V14.2905C10.5615 14.2905 9.21094 15.9247 9.21094 17.6668V39.9641Z" fill="<?= $colorPagina;?>"/>
        <path d="M12.5873 18.3418H27.4431" stroke="#676567" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.21094 39.9641C9.21094 38.2219 10.5615 36.5742 12.5873 36.5742V14.2905C10.5615 14.2905 9.21094 15.9247 9.21094 17.6668V39.9641Z" stroke="#676567" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M39.5978 18.3418H44.9999V43.3266H12.6008C10.7303 43.3266 9.21094 41.7735 9.21094 39.9502" stroke="#676567" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M19.34 41.976V29.8213H13.9379" stroke="#676567" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
        <path d="M13.9379 26.445H19.34V19.6924" stroke="#676567" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
        <path d="M22.7163 19.6924V32.5224H43.6495" stroke="#676567" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
        <path d="M22.7163 41.9763V35.8989H43.6495" stroke="#676567" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
        <path d="M33.5205 10.2388C30.1644 10.2388 27.4431 12.8926 27.4431 16.1676C27.4431 17.5856 27.6592 18.5648 28.483 19.8545C29.3068 21.1443 33.5205 27.1204 33.5205 27.1204C33.5205 27.1204 37.7341 21.1443 38.558 19.8545C39.3818 18.5648 39.5979 17.5856 39.5979 16.1676C39.5979 12.8926 36.8766 10.2388 33.5205 10.2388ZM33.5272 18.3419H33.507C32.3928 18.3419 31.488 17.4776 31.488 16.3161C31.488 15.1479 32.3928 14.2904 33.5137 14.2904H33.5205C34.6347 14.2904 35.5395 15.1479 35.5463 16.3161C35.5463 17.4776 34.6482 18.3419 33.5272 18.3419Z" fill="<?= $colorPagina;?>" stroke="#676567" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <div class="color-white-100 text-location-contact ml-15 pt-5 sm-ml-14 text-left"><?= $direccionUbicacion;?></div>
    </div>
    <div class="flex">
      <svg class="h-43 w-43 sm-h-43 sm-w-43" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M21.8265 27.1477C26.3711 25.4491 28.6859 20.3674 26.9968 15.7972C25.3078 11.2271 20.2544 8.89927 15.7099 10.5978C11.1653 12.2964 8.85046 17.3782 10.5395 21.9483C12.2286 26.5184 17.2819 28.8463 21.8265 27.1477Z" fill="#F6F4F1"/>
        <path d="M27.5947 24.591C26.0335 23.1912 23.3561 22.1698 21.2807 22.195C20.66 22.6616 19.431 23.9794 18.9921 24.6163C17.8196 24.2127 16.5405 22.9264 15.4119 21.5392C14.2833 20.1583 13.2738 18.6451 13.1045 17.4092C13.813 17.1002 15.3367 16.1418 15.9135 15.6185C16.3399 13.5755 15.8571 10.7381 14.7974 8.92215C13.5685 8.71407 10.5964 8.77712 8.45205 9.75446C7.57424 12.3838 7.27954 18.3172 12.1828 24.5532C17.3243 30.6001 23.2433 30.5874 25.9771 30.228C27.3377 28.3049 27.5571 25.8458 27.5947 24.591Z" fill="<?= $colorPagina;?>" stroke="#676567" stroke-width="2" stroke-miterlimit="10"/>
        <path d="M6.38293 5.39095C13.6375 -1.3369 24.9488 -0.876605 31.639 6.41873C31.9211 6.72769 32.1908 7.04926 32.4478 7.37084" stroke="#F6F4F1" stroke-width="2" stroke-miterlimit="10"/>
        <path d="M1.84964 12.0684C-0.551821 18.2666 0.576802 25.5682 5.36091 30.789C7.56799 33.1977 10.2767 34.856 13.1798 35.764" stroke="#F6F4F1" stroke-width="2" stroke-miterlimit="10"/>
        <path d="M21.1992 36.3754C24.6039 35.8584 27.8957 34.3451 30.6169 31.8166C35.4826 27.3083 37.2821 20.7128 35.934 14.6597" stroke="#F6F4F1" stroke-width="2" stroke-miterlimit="10"/>
        <path d="M19.2429 3.94092C27.2687 4.2688 33.5137 11.0786 33.1877 19.1432C33.1751 19.4837 33.1438 19.8242 33.1062 20.1584" stroke="#F6F4F1" stroke-width="2" stroke-miterlimit="10"/>
      </svg>
      <a class="color-white-100 text-location-contact ml-15 pt-5 sm-ml-14 text-left" href="tel:051<?= $telefono;?>"><?= $telefono;?></a>
    </div>
  </div>
  <div class="grid-60 tablet-grid-60 mobile-grid-100 pr-75 map-draft sm-mt-40 sm-px-0 relative z-10">
    <?php if($mapa):?>
        <?php echo do_shortcode($mapa);?>
      <?php endif;?>
  </div>
  <img class="lazyload imagen-<?= $posicionFondo;?>" data-src="<?= $imagenFondoUbicacion["url"];?>" alt="Imagen fondo ubicacion">
</section>
