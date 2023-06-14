/*------------------------------------------------------------------
カードスライド
/*------------------------------------------------------------------*/
const swiper = new Swiper('.card-slider', {
  loop: true,
  speed: 6000,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  breakpoints: {//ブレークポイント
    340: {
      slidesPerView: 1.6,
    },
    460: {
      slidesPerView: 1.6,
    },
    540: {
      slidesPerView: 2,
    },
    640: {
      slidesPerView: 2.4,
    },
    800: {
      slidesPerView: 3,
    },
    1080: {
      slidesPerView: 4,
    },
    1340: {
      slidesPerView: 5,
    },
    1600: {
      slidesPerView: 6,
    }
  },
})

/*------------------------------------------------------------------
メインスライダー
/*------------------------------------------------------------------*/
const swiper2 = new Swiper('.main-slide01', {
  loop: true,
  speed: 5000,
  //direction: 'vertical',
  mousewheel: true,
  slidesPerView: 5,
  spaceBetween: 64,
  allowTouchMove: true,
  parallax: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  breakpoints: {//ブレークポイント
    340: {
      slidesPerView: 3.4,
      spaceBetween: 32,
    },
    540: {
      slidesPerView: 4,
      spaceBetween: 36,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    900: {
      slidesPerView: 4,
      spaceBetween: 44,
    },
    1025: {
      slidesPerView: 5,
      spaceBetween: 48,
    },
    1201: {
      slidesPerView: 5,
      spaceBetween: 52,
    },
    1280: {
      slidesPerView: 5,
      spaceBetween: 56,
    },
    1568: {
      slidesPerView: 5,
      spaceBetween: 60,
    },
    1700: {
      slidesPerView: 5,
      spaceBetween: 64,
    },
  },
})
const swiper3 = new Swiper('.main-slide02', {
  loop: true,
  speed: 5000,
  //direction: 'vertical',
  slidesPerView: 5,
  spaceBetween: 64,
  allowTouchMove: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
    reverseDirection: true,
  },
  breakpoints: {//ブレークポイント
    340: {
      slidesPerView: 3.4,
      spaceBetween: 32,
    },
    540: {
      slidesPerView: 4,
      spaceBetween: 36,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    900: {
      slidesPerView: 4,
      spaceBetween: 44,
    },
    1025: {
      slidesPerView: 5,
      spaceBetween: 48,
    },
    1201: {
      slidesPerView: 5,
      spaceBetween: 52,
    },
    1280: {
      slidesPerView: 5,
      spaceBetween: 56,
    },
    1568: {
      slidesPerView: 5,
      spaceBetween: 60,
    },
    1700: {
      slidesPerView: 5,
      spaceBetween: 64,
    },
  },
})
const swiper4 = new Swiper('.main-slide03', {
  loop: true,
  speed: 5000,
  //direction: 'vertical',
  slidesPerView: 5,
  spaceBetween: 64,
  allowTouchMove: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  breakpoints: {//ブレークポイント
    340: {
      slidesPerView: 3.4,
      spaceBetween: 32,
    },
    540: {
      slidesPerView: 4,
      spaceBetween: 36,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    900: {
      slidesPerView: 4,
      spaceBetween: 44,
    },
    1025: {
      slidesPerView: 5,
      spaceBetween: 48,
    },
    1201: {
      slidesPerView: 5,
      spaceBetween: 52,
    },
    1280: {
      slidesPerView: 5,
      spaceBetween: 56,
    },
    1568: {
      slidesPerView: 5,
      spaceBetween: 60,
    },
    1700: {
      slidesPerView: 5,
      spaceBetween: 64,
    },
  },
})

/*------------------------------------------------------------------
メインスライダー　表示エフェクト
/*------------------------------------------------------------------*/
jQuery(function () {
  $(document).ready(function () {
    $(".main-slide-b.no01 div").delay(0).animate({opacity: 1});
    $(".main-slide-b.no02 div").delay(0).animate({opacity: 1});
    $(".main-slide-b.no03 div").delay(0).animate({opacity: 1});

    $(".main-slide-b.no01 div img").delay(1400).animate({width: '100%', height: '100%'}, 1200, "easeInOutBack");
    $(".main-slide-b.no02 div img").delay(1600).animate({width: '100%', height: '100%'}, 1200, "easeInOutBack");
    $(".main-slide-b.no03 div img").delay(1800).animate({width: '100%', height: '100%'}, 1200, "easeInOutBack");

    $(".main-slide-p.no01 div img").delay(2600).animate({width: '100%', height: '100%'}, 800, "easeOutBack");
    $(".main-slide-p.no02 div img").delay(2400).animate({width: '100%', height: '100%'}, 800, "easeOutBack");
    $(".main-slide-p.no03 div img").delay(2200).animate({width: '100%', height: '100%'}, 800, "easeOutBack");

    setTimeout(function(){
      $(".p-home--main h1").css({'opacity':'1','padding-top':'0'});
    }, 600);
    setTimeout(function(){
      $(".p-home--main p").css({'opacity':'1','padding-top':'0'});
    }, 650);
    setTimeout(function(){
      $(".p-home--main-list.list01 .p-home--main-list-item.-white").css({'opacity':'1','margin-top':'0'});
    }, 3000);
    setTimeout(function(){
      $(".p-home--main-list.list01 .p-home--main-list-item.-yellow").css({'opacity':'1'});
    }, 3100);
  });
});


/*------------------------------------------------------------------
人を知る
/*------------------------------------------------------------------*/
$(function() {
  $('.intro_02').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_01 figure').addClass('on');
    }else{
      $('.intro_01 figure').removeClass('on');
    }
  });
  $('.intro_03').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_02 figure').addClass('on');
    }else{
      $('.intro_02 figure').removeClass('on');
    }
  });
  $('.intro_04').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_03 figure').addClass('on');
    }else{
      $('.intro_03 figure').removeClass('on');
    }
  });
  $('.intro_05').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_04 figure').addClass('on');
    }else{
      $('.intro_04 figure').removeClass('on');
    }
  });
  $('.intro_06').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_05 figure').addClass('on');
    }else{
      $('.intro_05 figure').removeClass('on');
    }
  });
});






/*------------------------------------------------------------------
ヘッダードロップシャドウ
/*------------------------------------------------------------------*/
// const headerScrollTop = () => {
//   let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//   let windowWidth = window.innerWidth;

//   if (scrollTop <= 20) {
//     headerShadow.classList.add("hiddenTop");
//   } else if (scrollTop > 20 && windowWidth >= vr) {
//     headerShadow.classList.remove("hiddenTop");
//   }
// };
// window.addEventListener("scroll", function () {
//   headerScrollTop();
// });



/*------------------------------------------------------------------
夢追い人左右ボタン
/*------------------------------------------------------------------*/
// const buttonLeft = document.querySelector(".p-top-ymb__left");
// const buttonRight = document.querySelector(".p-top-ymb__right");
// const ymbContainer = document.querySelector(".p-top-ymb__list");
// const ymbCard = document.querySelector(".p-top-ymb__card");
// let gap = 29;
// let containerWidth = ymbContainer.clientWidth;
// let cardWidth = ymbCard.clientWidth;
// let left = 0;
// let count = 0;

// buttonRight.addEventListener("click", function () {
//   if (count < 7) {
//     left += cardWidth;
//     left += gap;
//     count++;
//   }
//   ymbContainer.style.marginLeft = left * -1 + "px";
// });

// buttonLeft.addEventListener("click", function () {
//   if (count > 0) {
//     left -= cardWidth;
//     left -= gap;
//     count--;
//   }
//   ymbContainer.style.marginLeft = left * -1 + "px";
// });

// window.onload = function () {
//   headerShadow.classList.add("hiddenTop");
// };

// window.addEventListener("scroll", function () {});
