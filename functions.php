<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

function agregar_style_header()
{
    $my_css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'dist/css/mystyles.css' ));
    wp_enqueue_style( 'mis-estilos', get_stylesheet_directory_uri().'/dist/css/mystyles.css', [], $my_css_ver);
}
add_action('generate_after_header', 'agregar_style_header');

//  AGREGAR STYLOS AL FOOTER

function agregar_script_footer()
{
    $my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'dist/js/myscripts.js' ));
    wp_enqueue_script('mis-scripts',  get_stylesheet_directory_uri().'/dist/js/myscripts.js', [], $my_js_ver);
}
add_action('generate_after_footer', 'agregar_script_footer');


add_shortcode('redes_sociales', 'redes_sociales');

function redes_sociales($atts) {
    
    $linkFacebook = get_field("link_facebook",354);
    $linkInstagram = get_field("link_instagram",354);
    $linkLinkedin = get_field("link_linkedin",354);
    $nroCelular = get_field("nro_celular",354);

    $html = '
    <div class="only-mov"><a class="redes-sociales__link--tel" href="tel:051'.$nroCelular.'"><img class="redes-sociales__imagen--tel lazyload" data-src="https://tectonica.com.pe/wp-content/uploads/2021/05/Vector.png" alt="Telefono">'.$nroCelular.'</a></div>
    <h2 class="widget-title only-desk">Social</h2>
    <div class="redes-sociales">
    <a class="inline-block redes-sociales__link" href="'.$linkFacebook.'" target="_blank"><img class="lazyload redes-sociales__imagen" data-src="https://tectonica.com.pe/wp-content/uploads/2021/05/facebook.png" alt="Facebook"></a>
    <a class="inline-block redes-sociales__link" href="'.$linkInstagram.'" target="_blank"><img class="lazyload redes-sociales__imagen" data-src="https://tectonica.com.pe/wp-content/uploads/2021/05/instagram.png" alt="Instagram"></a>
    <a class="inline-block redes-sociales__link" href="'.$linkLinkedin.'" target="_blank"><img class="lazyload redes-sociales__imagen" data-src="https://tectonica.com.pe/wp-content/uploads/2021/05/linkedin.png" alt="Linkedin"></a>
    </div>
    <h2 class="widget-title mt-32 only-desk">Contáctanos</h2>
    <div class="only-desk"><a class="redes-sociales__link--tel" href="tel:051'.$nroCelular.'">'.$nroCelular.'</a></div>
    ';
    return $html;
}

add_shortcode('redes_sociales_menu', 'redes_sociales_menu');

function redes_sociales_menu($atts) {
    
    $linkFacebook = get_field("link_facebook",354);
    $linkInstagram = get_field("link_instagram",354);
    $linkLinkedin = get_field("link_linkedin",354);

    $html = '
    <div class="redes-sociales">
        <a class="inline-block redes-sociales__link" href="'.$linkFacebook.'" target="_blank"><img class="lazyload redes-sociales__imagen" data-src="https://tectonica.com.pe/wp-content/uploads/2021/05/facebook.png" alt="Facebook"></a>
        <a class="inline-block redes-sociales__link" href="'.$linkInstagram.'" target="_blank"><img class="lazyload redes-sociales__imagen" data-src="https://tectonica.com.pe/wp-content/uploads/2021/05/instagram.png" alt="Instagram"></a>
        <a class="inline-block redes-sociales__link" href="'.$linkLinkedin.'" target="_blank"><img class="lazyload redes-sociales__imagen" data-src="https://tectonica.com.pe/wp-content/uploads/2021/05/linkedin.png" alt="Linkedin"></a>
    </div>
    ';
    return $html;
}