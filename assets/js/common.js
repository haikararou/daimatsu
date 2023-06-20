//const headerShadow = document.querySelector(".p-header__shadow");
const headerLogo = document.querySelector(".p-header__logo");
const headerNav = document.querySelector(".p-header__nav-container");
const body = document.querySelector(".l-body");
const header = document.querySelector(".p-header");
const menuButton = document.querySelector(".p-header__menu-button");
const menuDesign = document.querySelector(".p-header__menu-design");
//const menuContainer = document.querySelector(".p-header__menu-container");
//const menuOuter = document.querySelector(".p-header__menu-outer");

//const vr = 1280; //タブレット表示に切り替える画面幅
const tabl = 960;
let logoHeight = headerLogo.clientHeight;
let headerNavCoordinate = headerNav.getBoundingClientRect();
let headerTop = headerNavCoordinate.top;
let tempTop = 0;
let tempHeight = 0;
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
//     //headerShadow.style.height = tempHeight + "px";
//   } else if (scrollTop > headerTop && tempTop != 0) {
//     if (windowWidth >= tabl) {
//       //tempHeight = 100;
//       tempTop = 0;
//     } else {
//       //tempHeight = 60;
//       tempTop = 0;
//     }
//     //headerShadow.style.height = tempHeight + "px";
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
$('.p-header__menu-button').click(function (e) {
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
        $('.p-header').addClass('active');
        $('.p-header__menu-design').addClass('active');
        TweenMax.fromTo(
            $('.p-header__nav-container'),
            0.8,
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
            { 'padding-top': '40px' },
            {
                'padding-top': '20px',
                opacity: '1',
                display: 'block',
                delay: 0.6,
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
    } else if (bl == 'hiden') {
        modalopen = false;
        TweenMax.fromTo(
            $('.p-header__nav'),
            0.3,
            { 'padding-top': '20px' },
            {
                'padding-top': '40px',
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
                opacity: '0',
                delay: 0.2,
                ease: Power2.easeOut,
                onComplete: function () {
                    $('.p-header').removeClass('active');
                    $('.p-header__menu-design').removeClass('active');
                },
            }
        );
    }
}

/*------------------------------------------------------------------
リサイズ処理
/*------------------------------------------------------------------*/
var $win = $(window);
$win.on('load resize', function() {
    if (window.matchMedia('(max-width:960px)').matches) {
        // SPの処理
    } else {
        // PCの処理
        $(function() {
            $(body).addClass('pc');
            $(body).removeClass('sp');
            $('.p-header__nav').css({'padding-top':'0px','opacity':'1','display':'flex'});
            $('.p-header__nav-container').css({'opacity':'1'});
            $('.p-header').removeClass('active');
            $('.p-header__menu-design').removeClass('active');
        });
    }
});
