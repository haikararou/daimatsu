
/*------------------------------------------------------------------
読み込み時処理
/*------------------------------------------------------------------*/
$(function() {
    $(window).on('load scroll', function(){
        if ($(this).scrollTop() > 150) {
            $('.l-body').addClass('scroll');
            $('.p-header__nav-list.nav-list01').css('opacity','0');
            $('.p-header__nav-list.nav-list02 a').css('opacity','0');
        } else {
            $('.l-body').removeClass('scroll');
            $('.l-body').removeClass('open');
            modalopen = false;
            $('.p-header__nav-list.nav-list01').css('opacity','1');
            $('.p-header__nav-list.nav-list02 a').css('opacity','1');
        }
    });
});

/*------------------------------------------------------------------
メニュー開閉
/*------------------------------------------------------------------*/
/*ドロワーメニュー ----------------------------------------------------*/
var modalopen = false;
$('.p-header__burger').click(function (e) {
    if (modalopen == false) {
        drowerChange('view');
    } else if (modalopen == true) {
        drowerChange('hiden');
    }
    e.stopPropagation();
});

/*ドロワーメニューの出し入れ ---------------------------------------------*/
function drowerChange(bl) {
    if (bl == 'view') {
        modalopen = true;
        $('.l-body').addClass('open');
        // TweenMax.fromTo(
        //     $('.p-header__nav-container'),
        //     0.4,
        //     {},
        //     {
        //         opacity: '1',
        //         delay: 0,
        //         ease: Power2.easeOut,
        //         onComplete: function () {},
        //     }
        // );
        TweenMax.fromTo(
            $('.p-header__nav'),
            0.8,
            { 'padding-top': '0px' },
            {
                'padding-top': '0px',
                opacity: '1',
                //display: 'block',
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
            0.8,
            { 'padding-top': '0px' },
            {
                'padding-top': '0px',
                //opacity: '0',
                //display: 'none',
                delay: 0,
                ease: Power2.easeOut,
                onComplete: function () {
                    $('.l-body').removeClass('open');
                },
            }
        );
        // TweenMax.fromTo(
        //     $('.p-header__nav-container'),
        //     0.4,
        //     { opacity: '1' },
        //     {
        //         opacity: '0',
        //         delay: 0.2,
        //         ease: Power2.easeOut,
        //         onComplete: function () {
        //             $('.l-body').removeClass('open');
        //         },
        //     }
        // );
    }
}

/*------------------------------------------------------------------
リサイズ処理
/*------------------------------------------------------------------*/
const mediaQueryList = window.matchMedia('(min-width: 960px)');
const listener = (event) => {
    if (event.matches) {
        // 960px以上
        console.log('PC用ブレークポイント用処理');
        $('.l-body').removeClass('open');
        $('.l-body').removeClass('sp');
        $('.l-body').addClass('pc');
    } else {
        // 960px未満
        console.log('SP用ブレークポイント用処理');
        $('.l-body').removeClass('open');
        $('.l-body').addClass('sp');
        $('.l-body').removeClass('pc');
    }
};
mediaQueryList.addEventListener("change", listener);
// 初期化処理
listener(mediaQueryList);


