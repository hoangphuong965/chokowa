// スクロール
$(window).on('load', function () {
  const speed = 500;
  const headerH = $('.l-header').height();
  const hash = window.location.hash;

  if (!hash == '' || !hash == undefined) {
    let target = $(hash);
    target = target.length ? target : $('[name=' + hash.slice(1) + ']');
    let position = target.offset().top - headerH;
    if (target.length) {
      $('html,body').stop().animate({ scrollTop: position }, 'swing');
    }
  }

  $('[data-pagetop]').on('click', function (e) {
    $('html, body').animate({ scrollTop: 0 }, speed, 'swing');
    e.preventDefault();
  });

  $('[data-scroll-link]').on('click', function (e) {
    let position;
    let href = $(this).attr('href');
    let target = $(href == '#' || href == '' ? 'html' : href);
    position = target.offset().top - headerH;
    $('html, body').animate({ scrollTop: position }, speed, 'swing');
    e.preventDefault();
  });

  // アニメーションの発火
  if ($('.js-animation').length) {
    scrollAnimation();
  }
  function scrollAnimation() {
    $(window).scroll(function () {
      $(".js-animation").each(function () {
        let position = $(this).offset().top,
          scroll = $(window).scrollTop(),
          windowHeight = $(window).height();
        if (scroll > position - windowHeight + 100) {
          $(this).addClass('is-show');
        }
      });
    });
  }
  $(window).trigger('scroll');

  // IE終了表示
  var url = $(location).attr('href');
  $('.for-ie-redirect').attr('href', 'microsoft-edge:' + url);
  var userAgent = window.navigator.userAgent.toLowerCase();
  if (userAgent.indexOf('msie') != -1 || userAgent.indexOf('trident') != -1) {
    $('.for-ie').show();
  }
  $('.js-ieClose').click(function () {
    $('.for-ie').hide();
  })

  var $tgnav = $(".sec-gnav__btn");

  $tgnav.on("click", function () {
    var tgopen = $(".sec-gnav");

    $(this).toggleClass("is-menuopen");

    if ($(this).hasClass("is-menuopen")) {
      tgopen.addClass("is-showmenu");
      $("body").addClass("is-fix");
      $(".l-header__logo").addClass("is-showlogo");
    } else {
      tgopen.removeClass("is-showmenu");
      $("body").removeClass("is-fix");
      $(".l-header__logo").removeClass("is-showlogo");
    }
  });

  $('.m-arrbtn').on('click', function () {
    var tgl = $(this).siblings('.m-parent02');
    $(this).toggleClass('m-arrbtn-op');

    if ($(this).hasClass('m-arrbtn-op')) {
      tgl.slideDown();
    }
    else {
      tgl.slideUp();
    }
  });


  $('.m-boxdropdow').on('click', function () {
    var mdropdow = $(this).siblings('.m-dropdow');
    $(this).toggleClass('m-dropdow-op');

    if ($(this).hasClass('m-dropdow-op')) {
      mdropdow.slideDown();
    }
    else {
      mdropdow.slideUp();
    }
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        var previewImage = $(input).parents('.avatar-upload').find('.imagePreview')
        $(previewImage).css('background-image', 'url(' + e.target.result + ')');
        $(previewImage).hide();
        $(previewImage).fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  var elements = ['#imageUpload', '#imageUpload01', '#imageUpload02', '#imageUpload03', '#imageUpload04', '#imageUpload05', '#imageUpload06', '#imageUpload07'];
  $.each(elements, function (index, elm) {
    $(elm).change(function () {
      readURL(this);
    });
  });

});//end close

