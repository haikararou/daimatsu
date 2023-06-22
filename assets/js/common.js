// const headerShadow = document.querySelector(".p-header__shadow");
// const headerLogo = document.querySelector(".p-header__logo");
// const headerNav = document.querySelector(".p-header__nav-container");
// const body = document.querySelector(".l-body");
// const header = document.querySelector(".p-header");
// const menuButton = document.querySelector(".p-header__menu-button");
// const menuDesign = document.querySelector(".p-header__burger---design");
// const menuContainer = document.querySelector(".p-header__menu-container");
// const menuOuter = document.querySelector(".p-header__menu-outer");

//const vr = 1280; //タブレット表示に切り替える画面幅
const tabl = 960;
// let logoHeight = headerLogo.clientHeight;
// let headerNavCoordinate = headerNav.getBoundingClientRect();
// let headerTop = headerNavCoordinate.top;
// let tempTop = 0;
// let tempHeight = 0;
/*------------------------------------------------------------------
ヘッダー制御
/*------------------------------------------------------------------*/
// const headerScroll = () => {
//   let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//   let windowWidth = window.innerWidth;
//   tempHeight = logoHeight - scrollTop;
//   tempTop = headerTop - scrollTop;
//   if (scrollTop <= headerTop) {
//     header.style.height = tempHeight + "px";
//     headerLogo.style.height = tempHeight + "px";
//     headerNav.style.top = tempTop + "px";
//     headerShadow.style.height = tempHeight + "px";
//   } else if (scrollTop > headerTop && tempTop != 0) {
//     if (windowWidth >= tabl) {
//       tempHeight = 30;
//       tempTop = 0;
//     } else {
//       tempHeight = 12;
//       tempTop = 0;
//     }
//     headerShadow.style.height = tempHeight + "px";
//     headerLogo.style.height = tempHeight + "px";
//     headerNav.style.top = tempTop + "px";
//   }
// };

// window.addEventListener("scroll", function () {
//   headerScroll();
// });

/*------------------------------------------------------------------
メニュー開閉
/*------------------------------------------------------------------*/
// menuButton.addEventListener("click", () => {
//   header.classList.toggle("active");
//   menuButton.classList.toggle("active");
//   menuDesign.classList.toggle("active");
//   menuContainer.classList.toggle("active");
//   menuOuter.classList.toggle("active");
//   body.classList.toggle("active");
//   let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//   document.querySelector(".p-header__foundation").style.top = scrollTop + "px";
// });

/*------------------------------------------------------------------
読み込み時処理
/*------------------------------------------------------------------*/
// window.onload = function () {
//   headerScroll();
//   let windowWidth = window.innerWidth;
//   if (windowWidth < tabl) {
//     headerShadow.classList.remove("active");
//   }
// };
$(function() {
    let windowWidth = window.innerWidth;
    $(window).on('load', function(){
    if (window.matchMedia('(max-width:960px)').matches) {
    //if (windowWidth < tabl) {
        // $('.l-body').addClass('sp');
        // $('.l-body').removeClass('pc');
    } else {
        // $('.l-body').removeClass('sp');
        // $('.l-body').addClass('pc');
    }
    });
    //var topBtn = $('#page-top');
    //topBtn.hide();
    //スクロールが120に達したらボタン表示
    $(window).on('load scroll', function(){
    //$(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            //topBtn.fadeIn();
            $('.l-body').addClass('scroll');
            $('.p-header__nav-list.nav-list01').css('opacity','0');
            $('.p-header__nav-list.nav-list02 a').css('opacity','0');
        } else {
            //topBtn.fadeOut();
            $('.l-body').removeClass('scroll');
            $('.l-body').removeClass('open');
            modalopen = false;
            $('.p-header__nav-list.nav-list01').css('opacity','1');
            $('.p-header__nav-list.nav-list02 a').css('opacity','1');
        }
    });
});

/*------------------------------------------------------------------
リサイズ処理
/*------------------------------------------------------------------*/
// const resizeEvent = () => {
//     let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//     let windowWidth = window.innerWidth;
//     headerScroll();
//     if (windowWidth >= tabl) {
//     headerTop = 60;
//     logoHeight = 160;
//     //メニューを開いていたら閉じる
//     //headerShadow.classList.add("active");
//     // menuOuter.classList.remove("active");
//     // header.classList.remove("active");
//     // menuButton.classList.remove("active");
//     // menuDesign.classList.remove("active");
//     //menuContainer.classList.remove("active");
//     //body.classList.remove("active");

//     if (scrollTop < 60) {
//         headerNav.style.top = 60 + "px";
//     }
//     } else if (windowWidth < tabl) {
//         logoHeight = 60;
//         //headerShadow.classList.remove("active");
//         headerNav.style.top = 0 + "px";
//     }
// };
// window.addEventListener("resize", resizeEvent);




/*ドロワーメニュー --------------------------------------------------------------------------------------------*/
var modalopen = false;
$('.p-header__burger').click(function (e) {
    if (modalopen == false) {
        drowerChange('view');
    } else if (modalopen == true) {
        drowerChange('hiden');
    }
    e.stopPropagation();
});

/*ドロワーメニューの出し入れ --------------------------------------------------------------------------------------------*/
function drowerChange(bl) {
    if (bl == 'view') {
        modalopen = true;
        $('.l-body').addClass('open');
        TweenMax.fromTo(
            $('.p-header__nav-container'),
            0.4,
            {},
            {
                opacity: '1',
                delay: 0,
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav'),
            0.8,
            { 'padding-top': '0px' },
            {
                'padding-top': '0px',
                opacity: '1',
                display: 'block',
                delay: 0.6,
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-list.nav-list01'),
            0.6,
            {},
            {
                opacity: '1',
                //display: 'block',
                delay: 0.3,
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-list.nav-list02 a'),
            0.6,
            { opacity: '0' },
            {
                opacity: '1',
                //display: 'block',
                delay: 0.3,
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );

        background: rgba(17,67,40,1);

    } else if (bl == 'hiden') {
        modalopen = false;
        //$('.l-body').removeClass('open');
        TweenMax.fromTo(
            $('.p-header__nav-list.nav-list02 a'),
            0.6,
            { opacity: '1' },
            {
                opacity: '0',
                delay: 0,
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-list.nav-list01'),
            0.2,
            { opacity: '0' },
            {
                //opacity: '0',
                delay: 0.2,
                ease: Power2.easeOut,
                // onComplete: function () {
                //     $('.l-body').removeClass('open');
                // },
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav'),
            0.3,
            { 'padding-top': '0px' },
            {
                'padding-top': '0px',
                opacity: '0',
                display: 'none',
                delay: 0,
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-container'),
            0.4,
            { opacity: '1' },
            {
                opacity: '1',
                delay: 0.2,
                ease: Power2.easeOut,
                onComplete: function () {
                    $('.l-body').removeClass('open');
                },
            }
        );
    }
}

/*------------------------------------------------------------------
リサイズ処理
/*------------------------------------------------------------------*/
//var $win = $(window);
// $win.on('load resize', function() {
//     if (window.matchMedia('(max-width:960px)').matches) {
//         // SPの処理
//         $(function() {
//             $('.l-body').removeClass('open');
//         });
//     } else {
//         // PCの処理
//         $(function() {
//             $('.l-body').removeClass('open');
//             //$(body).addClass('pc');
//             // $(body).addClass('pc');
//             // $(body).removeClass('sp');
//             // $('.p-header__nav').css({'padding-top':'0px','opacity':'1','display':'flex'});
//             // $('.p-header__nav-container').css({'opacity':'1'});
//             // $('.p-header').removeClass('active');
//             // $('.p-header__burger---design').removeClass('active');
//         });
//     }
// });

const mediaQueryList = window.matchMedia('(min-width: 960px)');
const listener = (event) => {
    if (event.matches) {
        // 768px以上
        console.log('PC用ブレークポイント用処理');
        $('.l-body').removeClass('open');
        $('.l-body').removeClass('sp');
        $('.l-body').addClass('pc');
    } else {
        // 768px未満
        console.log('SP用ブレークポイント用処理');
        $('.l-body').removeClass('open');
        $('.l-body').addClass('sp');
        $('.l-body').removeClass('pc');
    }
};
mediaQueryList.addEventListener("change", listener);
// 初期化処理
listener(mediaQueryList);


