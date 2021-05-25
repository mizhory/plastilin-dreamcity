$(function () {
  $("input[type='tel']").inputmask('+7 (999) 999 - 99 - 99', {
    clearIncomplete: true,
    showMaskOnHover: false
  })
  $("#docNumber").inputmask('Договор возмездного оказания услуг № 99-99-99/9 от 99.99.99 года', {
    showMaskOnHover: false
  })

  // breadcrumbs max width
  if ($(window).width() > 768) {
    let parentWidth = $('.breadcrumbs').parent().width()
    $('.breadcrumbs').css('maxWidth', parentWidth)
  }


  // catalog main hovers
  if ($(window).width() > 992) {
    $('.catalogMain__item__link-left').on('mouseenter', function () {
      $(this).parent().find('.catalogMain__item__abs-left').addClass('active')
      $(this).parent().find('.catalogMain__item__decore-left').addClass('active')
      $(this).parent().find('.catalogMain__item__abs-right').css('opacity', '0')
      $(this).parent().find('.catalogMain__item__link-right').css('display', 'none')
    })
    $('.catalogMain__item__link-left').on('mouseleave', function () {
      $(this).parent().find('.catalogMain__item__abs-left').removeClass('active')
      $(this).parent().find('.catalogMain__item__decore-left').removeClass('active')
      setTimeout(() => {
        $(this).parent().find('.catalogMain__item__abs-right').css('opacity', '1')
      }, 150)
      $(this).parent().find('.catalogMain__item__link-right').css('display', 'block')
    })

    $('.catalogMain__item__link-right').on('mouseenter', function () {
      $(this).parent().find('.catalogMain__item__abs-right').addClass('active')
      $(this).parent().find('.catalogMain__item__decore-right').addClass('active')
      $(this).parent().find('.catalogMain__item__abs-left').css('opacity', '0')
      $(this).parent().find('.catalogMain__item__link-left').css('display', 'none')
    })
    $('.catalogMain__item__link-right').on('mouseleave', function () {
      $(this).parent().find('.catalogMain__item__abs-right').removeClass('active')
      $(this).parent().find('.catalogMain__item__decore-right').removeClass('active')
      setTimeout(() => {
        $(this).parent().find('.catalogMain__item__abs-left').css('opacity', '1')
      }, 150)
      $(this).parent().find('.catalogMain__item__link-left').css('display', 'block')
    })
  }


  // promo list toggle
  function checkPromoBlockHeight() {
    let block = $('.promo__block')
    if (block.outerHeight() == 940) {
      $('.siteSection-promo').addClass('contentFull')
    } else {
      $('.siteSection-promo').removeClass('contentFull')
    }
  }
  $('.promo__block__show').on('click', function () {
    if ($(this).hasClass('clicked')) {
      $(this).removeClass('clicked').find('span').text('Показать все')
      $(this).parent().find('ul').removeClass('visible')
    } else {
      $(this).addClass('clicked').find('span').text('Скрыть')
      $(this).parent().find('ul').addClass('visible')
    }
    checkPromoBlockHeight()
    checkPlaceListHeight()
  })

  // promo about mobile
  $('.promo__about__show').on('click', function () {
    if ($(this).hasClass('clicked')) {
      $(this).removeClass('clicked').find('span').text('Читать полностью')
      $(this).parent().find('.promo__about__text').addClass('hidden')
    } else {
      $(this).addClass('clicked').find('span').text('Скрыть')
      $(this).parent().find('.promo__about__text').removeClass('hidden')
    }
  })


  //--------------- catalog 2nd btn hover  ------------------
  if ($(window).width() > 992) {
    $('.catalogRow__item__bottom .customBtn').on('mouseover', function () {
      $(this).prev().addClass('hidden')
      $(this).find('span').text('Оставить заявку')
    })
    $('.catalogRow__item__bottom .customBtn').on('mouseleave', function () {
      setTimeout(() => {
        $(this).prev().removeClass('hidden')
      }, 200)
      $(this).find('span').text('Снять')
    })
  }

  // place list toggle
  function checkPlaceListHeight() {
    let block = $('.promo__block')
    if (block.outerHeight() == 850) {
      $('.siteSection-placeList').addClass('contentFull')
    } else {
      $('.siteSection-placeList').removeClass('contentFull')
    }
  }

  // seo block content toggle
  const ellipsisText = (e, etc) => {
    const wordArray = e.innerHTML.split(" ");
    while (e.scrollHeight > e.offsetHeight) {
      wordArray.pop();
      e.innerHTML = wordArray.join(" ") + (etc || "...");
    }
  };
  if ($(window).width() <= 500) {
    $(".seoBlock__content").each(function () {
      let _this = this
      let fullText = _this.innerHTML
      let btn = $(_this).parent().find(".seoBlock__showMore")
      ellipsisText(_this);
      let smallText = _this.innerHTML

      btn.on('click', function () {
        if ($(this).hasClass('clicked')) {
          $(this).removeClass('clicked').find('span').text('Читать полностью')
          $(_this).addClass('hidden').html(smallText)
          let scrollValue = $(_this).offset().top - 200
          $('html, body').scrollTop(scrollValue)
        } else {
          $(this).addClass('clicked').find('span').text('Скрыть')
          $(_this).removeClass('hidden').html(fullText)
        }
      })
    })
  }

  // $('.seoBlock__showMore').on('click', function () {
  //   let seoText = $(this).parent().find(".seoBlock__content")
  //   if ($(this).hasClass('clicked')) {
  //     $(this).removeClass('clicked').find('span').text('Читать полностью')
  //     seoText.addClass('hidden');
  //   } else {
  //     $(this).addClass('clicked').find('span').text('Скрыть')
  //     seoText.removeClass('hidden');
  //   }
  // })

  // catalog card sliders
  $('.catalogCard__nav_slider').slick({
    infinite: true,
    slidesToShow: 3,
    speed: 1000,
    autoplay: false,
    arrows: false,
    dots: false,
    asNavFor: '.catalogCard__main_slider',
    vertical: true,
    verticalSwiping: true,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 450,
        settings: {
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 3,
        },
      },
    ]
  })
  $('.catalogCard__arrow-prev').on('click', function () {
    $('.catalogCard__nav_slider').slick('slickPrev')
  })
  $('.catalogCard__arrow-next').on('click', function () {
    $('.catalogCard__nav_slider').slick('slickNext')
  })

  $('.catalogCard__main_slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 1000,
    autoplay: true,
    arrows: false,
    dots: true,
    asNavFor: '.catalogCard__nav_slider',
    fade: true,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          arrows: true,
          dots: false,
        }
      }
    ]
  })

  $('.catalogCard__main_slider, .handleContent__media__content').magnificPopup({
    delegate: 'a',
    type: 'image',
    tClose: 'Закрыть',
    gallery: {
      enabled: true,
      preload: [0, 2],
      navigateByImgClick: true,
      arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
      tPrev: 'Предыдущий слайд',
      tNext: 'Следующий слайд',
      tCounter: '<span class="mfp-counter">%curr% из %total%</span>'
    }
  });
  $('.catalogCard__loupe').on('click', function () {
    $(this).parent().parent().find('.catalogCard__main_slider').magnificPopup('open');
  });
  if ($(window).width() <= 768) {
    $('.catalogCard__main_slider').on('setPosition', function () {
      $(this).find('.catalogCard__main_slider__item').height('auto');
      var slickTrack = $(this).find('.slick-track');
      var slickTrackHeight = $(slickTrack).height();
      $(this).find('.catalogCard__main_slider__item').css('height', slickTrackHeight + 'px');
    });
  }


  // catalog card info slider
  $('.cardInfo__slider').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1
    $('.currentSlide-cardInfo').html('0' + i)
    $('.allSlide-cardInfo').html('0' + slick.slideCount)
  })
  $('.cardInfo__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 1000,
    autoplay: true,
    arrows: false,
    dots: false,
  })
  $('.slider__arrows-cardInfo .slider__arrow-prev').on('click', function () {
    $('.cardInfo__slider').slick('slickPrev')
  })
  $('.slider__arrows-cardInfo .slider__arrow-next').on('click', function () {
    $('.cardInfo__slider').slick('slickNext')
  })


  // similar slider
  $('.similarSlider').each(function () {
    let _this = $(this)
    _this.on('init', function (event, slick, currentSlide) {
      var i = (currentSlide ? currentSlide : 0) + 1
      $('.currentSlide-similar').html('0' + i)
      $('.allSlide-similar').html('0' + slick.slideCount)
      // console.log(slick, currentSlide, slick.slideCount)
    })
    _this.slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      speed: 1000,
      autoplay: false,
      arrows: false,
      dots: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            autoplay: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            autoplay: false
          }
        }
      ]
    })
    _this.on('afterChange', function (event, slick, currentSlide) {
      var i = (currentSlide ? currentSlide : 0) + 1
      $('.currentSlide-similar').html('0' + i)
      $('.allSlide-similar').html('0' + slick.slideCount)
    })
    $('.slider__arrows-similar .slider__arrow-prev').on('click', function () {
      _this.slick('slickPrev')
    })
    $('.slider__arrows-similar .slider__arrow-next').on('click', function () {
      _this.slick('slickNext')
    })
  })
  $('.similarSlider').on('setPosition', function () {
    $(this).find('.catalogRow__item').height('auto');
    var slickTrack = $(this).find('.slick-track');
    var slickTrackHeight = $(slickTrack).height();
    $(this).find('.catalogRow__item').css('height', slickTrackHeight + 'px');
  });
  if ($(window).width() <= 500) {
    let appendPar = $('.slider__nav-similar').parent().parent()
    $('.slider__nav-similar').appendTo(appendPar)
  }




  //--------------- catalog 2nd lvl slider  ------------------
  $('.catalogRow__slider').each(function () {
    let _this = $(this)
    let sliderDraggable = true
    if ($(this).hasClass('draggableFalse')) {
      sliderDraggable = false
    }
    _this.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 1000,
      autoplay: true,
      dots: true,
      arrows: true,
      draggable: sliderDraggable,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            autoplay: false,
            dots: false,
            arrows: true
          }
        }
      ]
    });
    _this.magnificPopup({
      delegate: 'a',
      type: 'image',
      tClose: 'Закрыть',
      gallery: {
        enabled: true,
        preload: [0, 2],
        navigateByImgClick: true,
        arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
        tPrev: 'Предыдущий слайд',
        tNext: 'Следующий слайд',
        tCounter: '<span class="mfp-counter">%curr% из %total%</span>'
      }
    });

    $('.catalogRow__control__item-loupe').on('click', function () {
      $(this).parent().parent().find('.catalogRow__slider').magnificPopup('open');
    });
  })
  if ($(window).width() > 992) {
    function slickPause() {
      $('.catalogRow__slider').slick('slickPause');
    }
    slickPause();
    $('.catalogRow__item').on('mouseover', function () {
      $(this).find('.catalogRow__slider').slick('slickPlay')
      $(this).find('.dotAnim').addClass('active')
    });
    $('.catalogRow__item').on('mouseleave', function () {
      $(this).find('.dotAnim').removeClass('active')
      slickPause();
    });
  }

  let svgCircle = '<svg width="100%" height="100%" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="transparent" stroke="#fff" stroke-width="3"></circle><circle class="dotAnim" cx="12" cy="12" r="10" fill="transparent" stroke="#44b7b4" stroke-width="3" stroke-dasharray="0 57" stroke-dashoffset="0"></circle></svg>'
  $('.slick-dots li').each(function () {
    $(this).append(svgCircle)
  })

  // cardInfo open map
  $('.cardInfo__openMap').on('click', function () {
    $('.cardInfo__map-wrapper').addClass('active')
  })
  $('.cardInfo__closeMap').on('click', function () {
    $('.cardInfo__map-wrapper').removeClass('active')
  })


  // adapt map search
  if ($(window).width() <= 768) {
    $('.mainBanner__right.mainBanner__right-map').appendTo('.screenBox')
  }

  // vacancy spoilers
  $('.vacancy__head').on('click', function () {
    $(this).parent().toggleClass('active')
  })


  // resume upload
  $('#file-upload').on('change', function () {
    var i = $(this).prev('label').clone();
    var file = $('#file-upload')[0].files[0].name;
    $(this).parent().find('label .ut').text(file);
  });


  // news excerpt
  $('.news__excerpt').each(function () {
    let newsLink = $(this).parents('.catalogRow__item').find('.news__title').attr('href')
    $(this).append('<div class="news__more"><span class="news__more__dots">....</span><a class="news__more__link" href="' + newsLink + '">Читать подробнее</a></div>')
  })


  // news single nav
  function changeStickyHeight() {
    let decorNav = $('.singleNews__aside-decor')
    if ($('.singleNews__aside-decor').length && $(window).width() > 992) {
      let navHeight = decorNav.find('.singleNews__aside__sticky__nav').height()
      let contentHeight = decorNav.parent().parent().find('.handleContent').height()
      let finalHeight = contentHeight - navHeight - 50
      decorNav.css('height', finalHeight)
    } else {
      decorNav.css('height', 'auto')
    }
  }
  changeStickyHeight()

  $(window).on('resize', function () {
    changeStickyHeight()
  })

  $('.singleNews__aside__link').on('click', function () {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;
    var destinationgo = destination - 110;
    $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destinationgo }, 600);
    return false;
  })

  if ($('.singleNews__aside__sticky__nav').length && $(window).width() > 992) {
    var $window = $(window);
    var $sidebar = $(".singleNews__aside__sticky");
    var $sidebarTop = $sidebar.position().top;
    var $sidebarHeight = $sidebar.height();
    var $mainContent = $('.singleNews');
    var asideWidth = parseInt($(".singleNews__aside").css("width"));
    var $mainContentHeight = $mainContent.height();
    var $mainContentTop = $mainContent.position().top;
    $window.on('scroll', function (event) {
      $sidebar.addClass("fixed-aside");
      $(".fixed-aside").css({ "width": asideWidth });
      var $scrollTop = $window.scrollTop();
      var $topPosition = Math.max(120, $sidebarTop - $scrollTop);

      if ($scrollTop + $sidebarHeight + 120 > $mainContentHeight + $mainContentTop) {
        var $topPosition = Math.min($topPosition, $mainContentHeight
          + $mainContentTop - $scrollTop - $sidebarHeight);
      }
      $sidebar.css("top", $topPosition);

      $('.singleNews__aside__link').each(function () {
        let link = $(this).attr('href')
        let linkTarget = $('.singleNews').find(link)
        let linkTargetOffset = linkTarget.offset().top - 150
        if ($(window).scrollTop() > linkTargetOffset) {
          $('.singleNews__article__block').removeClass('active')
          linkTarget.addClass('active')
          $('.singleNews__aside__link').removeClass('active')
          $(this).addClass('active')
        }
      })
    });


  } else if ($('.singleNews__aside__sticky__nav').length && $(window).width() <= 992) {
    $('.singleNews__article__block').removeClass('active')
    $('.singleNews__article__block__body').addClass('hidden')

    $('.singleNews__article__block__head').on('click', function () {
      let parentBlock = $(this).parent()
      if (parentBlock.hasClass('active')) {
        parentBlock.removeClass('active')
        parentBlock.find('.singleNews__article__block__body').addClass('hidden')
      } else {
        $('.singleNews__article__block').removeClass('active')
        $('.singleNews__article__block__body').addClass('hidden')
        let scrollValue = $(parentBlock).offset().top - 200
        $("html,body").animate({ scrollTop: scrollValue }, 500)
        setTimeout(() => {
          parentBlock.addClass('active')
          parentBlock.find('.singleNews__article__block__body').removeClass('hidden')
        }, 150);

      }
    })
  }

  // more filters fixed bottom
  if ($(window).width() <= 1200) {
    $('.footerItem__name').each(function () {
      let newPath = $(this).parent().parent().find('.footerItem__menu')
      $(this).appendTo(newPath)
    })
  }

  // breadcrumbs adapt
  if ($(window).width() <= 768) {
    $('.breadcrumbs-adapt').prependTo('.mainBanner__info')
  }

  // if ($(window).width() <= 768) {
  //   var viewportHeight = $('.headerPane__menu').outerHeight();
  //   $('.headerPane__menu').css({ height: viewportHeight });
  // }

});
