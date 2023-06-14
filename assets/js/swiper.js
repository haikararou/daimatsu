
$(window).load(function(){
  var size = $('.swiper-slide').length;
  var mySwiper = new Swiper('.swiper', {
    //centeredSlides: true,
		//initialSlide: 5,
    speed: 800, // スライドが切り替わる時の速さ
    loop: true, // ループさせる
    //loopAdditionalSlides: 0,
    //preventInteractionOnTransition: true,
    //slidesPerView: 5,
    //spaceBetween: 20,
    //initialSlide: size,
    autoplay: { // 自動再生 ON
      delay: 6000, // 次のスライドまでの秒数
      disableOnInteraction: false, //スライダー操作後、自動再生が止まるかどうか
    },

    // breakpoints: { // ブレークポイント
    //   300: { // 画面幅300px以上で適用
    //     //slidesPerView: 1.1,
    //     slidesPerView: 1,
    //     spaceBetween: 0,
    //   },
    //   800: { // 画面幅980px以上で適用
    //     //slidesPerView: 1.25,
    //     spaceBetween: -20,
    //   },
    //   1100: { // 画面幅1400px以上で適用
    //     slidesPerView: 1.25,
    //     spaceBetween: -20,
    //   }
    // },
  })
// });
});