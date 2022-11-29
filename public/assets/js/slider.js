// スクロール
$(window).on('load', function () {

  //slick slider 

  $('.m-sliderdetail-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.m-sliderdetail-nav'
  });
  $('.m-sliderdetail-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.m-sliderdetail-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    arrows: false,
  });
 
  
});//end close

