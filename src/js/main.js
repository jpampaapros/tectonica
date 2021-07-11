import "./../scss/mystyles.scss";
import $ from 'jquery';
import 'slick-carousel/slick/slick';
import 'lazysizes';
import 'lazysizes/plugins/parent-fit/ls.parent-fit';

$(document).ready(function ($) {

  $("body").animate({ "opacity": 1 });

  var sliderCotizar = $('.slider-cotizar-1').slick({
    arrows: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    dots: false,
    infinite: true,
    speed: 2500,
    autoplay: false,
    autoplaySpeed: 1500,
    nextArrow: `<button class="slick-next slick-arrow" role="button" aria-label="Previous"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.00012 1L8.00012 8L1.00012 15" stroke="#373F41" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>`,
    prevArrow:`<button class="slick-prev slick-arrow" role="button" aria-label="Previous"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M8 1L1 8L8 15" stroke="#373F41" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </svg></button>`,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows: false,
        }
      },
    ]
  });

  $('.slider-cotizar-1 .slick-prev').hide();
  
  sliderCotizar.on('afterChange', function(event, slick, currentSlide) {

    if (currentSlide === 0) {
      $('.slider-cotizar-1 .slick-prev').hide();
      $('.slider-cotizar-1 .slick-next').show();
    }
    else {
    	$('.slider-cotizar-1 .slick-prev').show();
    	$('.slider-cotizar-1 .slick-next').show();
    }
    
    if (slick.slideCount === currentSlide + 1) {
    	$('.slider-cotizar-1 .slick-next').hide();
    }
  });

  /* ---------------------------- SLIDER PROYECTO 1 --------------------------- */

  var sliderProyecto = $('.slick-proyecto-1').slick({
    arrows: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    dots: true,
    infinite: false,
    speed: 2500,
    autoplay: false,
    autoplaySpeed: 1500,
    nextArrow: `<button class="slick-next slick-arrow" role="button" aria-label="Previous"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.00012 1L8.00012 8L1.00012 15" stroke="#373F41" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>`,
    prevArrow:`<button class="slick-prev slick-arrow" role="button" aria-label="Previous"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M8 1L1 8L8 15" stroke="#009A96" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </svg></button>`,
  });

  $('.slick-proyecto-1 .slick-prev').hide();
  
  sliderProyecto.on('afterChange', function(event, slick, currentSlide) {

    if (currentSlide === 0) {
      $('.slick-proyecto-1 .slick-prev').hide();
      $('.slick-proyecto-1 .slick-next').show();
    }
    else {
    	$('.slick-proyecto-1 .slick-prev').show();
    	$('.slick-proyecto-1 .slick-next').show();
    }
    
    if (slick.slideCount === currentSlide + 1) {
    	$('.slick-proyecto-1 .slick-next').hide();
    }
  });

  /* ----------------------------- SLIDER CAROUSEL ---------------------------- */

  $('.slider-carousel-1').slick({
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    dots: false,
    infinite: true,
    speed: 2500,
    autoplay: true,
    autoplaySpeed: 1500,
  });

  /* ---------------------------- SLIDER BENEFICIOS --------------------------- */

  var sliderBeneficios = $('.slider-benefits').slick({
    arrows: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    speed: 1500,
    autoplay: false,
    autoplaySpeed: 1500,
    nextArrow: `<button class="slick-next slick-arrow" role="button" aria-label="Previous"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.00012 1L8.00012 8L1.00012 15" stroke="#373F41" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>`,
    prevArrow:`<button class="slick-prev slick-arrow" role="button" aria-label="Previous"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M8 1L1 8L8 15" stroke="#373F41" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </svg></button>`,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          dots: false,
          swipe: false,
          touchMove: false,
        }
      },
    ]
  });

  $('.slider-benefits .slick-prev').hide();
  
  sliderBeneficios.on('afterChange', function(event, slick, currentSlide) {

    if (currentSlide === 0) {
      $('.slider-benefits .slick-prev').hide();
      $('.slider-benefits .slick-next').show();
    }
    else {
    	$('.slider-benefits .slick-prev').show();
    	$('.slider-benefits .slick-next').show();
    }
    
    if (slick.slideCount === currentSlide + 3) {
    	$('.slider-benefits .slick-next').hide();
    }
  });

  /* ----------------------------- SLIDER IMAGENES ---------------------------- */
  
  var sliderImagenes = $('.slider-imagenes-1').slick({
    centerMode: true,
    centerPadding: '260px',
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    dots: false,
    nextArrow: `<button class="slick-next slick-arrow" role="button" aria-label="Previous"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.00012 1L8.00012 8L1.00012 15" stroke="#373F41" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>`,
    prevArrow:`<button class="slick-prev slick-arrow" role="button" aria-label="Previous"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M8 1L1 8L8 15" stroke="#009A96" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </svg></button>`,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          centerMode: false,
          centerPadding: '0px',
          infinite: false,
        }
      },
    ]
  });

  $('.slider-imagenes-1 .slick-prev').hide();
  
  sliderImagenes.on('afterChange', function(event, slick, currentSlide) {

    if (currentSlide === 0) {
      $('.slider-imagenes-1 .slick-prev').hide();
      $('.slider-imagenes-1 .slick-next').show();
    }
    else {
    	$('.slider-imagenes-1 .slick-prev').show();
    	$('.slider-imagenes-1 .slick-next').show();
    }
    
    if (slick.slideCount === currentSlide + 1) {
    	$('.slider-imagenes-1 .slick-next').hide();
    }
  });

  window.handleTab = function (e){
    let tabsButton = document.querySelectorAll(".tabs-button");
    tabsButton.forEach( (ele) => ele.classList.contains("active") && ele.classList.remove("active"))
    let tabsPanel = document.querySelectorAll(".tabs-panel")
    tabsPanel.forEach((ele) => ele.classList.contains("active") && ele.classList.remove("active"))
    e.target.classList.add("active")
    document.getElementById(e.target.dataset.id).classList.add("active")

    console.log(e.target.dataset.id);

    if( e.target.dataset.id === "tabs-panel-1"){
      $('#tipoDepartamento').removeClass("none");
      $('#tipoDepartamento2').addClass("none");
    } 
    if( e.target.dataset.id === "tabs-panel-2"){
      $('#tipoDepartamento').addClass("none");
      $('#tipoDepartamento2').removeClass("none");
    }

    $('.cotizar .slider-cotizar-1').eq(0).slick('slickGoTo',0);
    $('.cotizar .slider-cotizar-1').eq(1).slick('slickGoTo',0);
    $('#tipoDepartamento').val("");
    $('#tipoDepartamento2').val("");
  }

  $('#tipoDepartamento').change(function() {
    if($(this).val() !=="") $('.cotizar .slider-cotizar-1').eq(0).slick('slickGoTo', $(this)[0].selectedIndex - 1)
  });
  $('#tipoDepartamento2').change(function() {
    if($(this).val() !=="") $('.cotizar .slider-cotizar-1').eq(1).slick('slickGoTo', $(this)[0].selectedIndex - 1)
  });

  $('[href*="#terminos"]').click(function (e) {
    e.preventDefault();
    $("#open-terminos").click();
  });

  $('[href*="#politicas"]').click(function (e) {
    e.preventDefault();
    $("#open-politicas").click();
  });

  jQuery('a[href="#cotizar"]').on('click', function(event) {
    var target = jQuery( jQuery(this).attr('href') );
    if( target.length > 0) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: target.offset().top -60
        }, 2000);
    }
});

});