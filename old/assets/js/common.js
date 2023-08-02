/*------------------------------------------------------------------
ヘッダー制御
/*------------------------------------------------------------------*/
$(function() {
    let target = $('.l-footer'); // 追従要素
    let targetPoint = target.offset().top; // 追従要素の初期位置
    $(window).on('load scroll', function() {
        let windowScrolltop = $(window).scrollTop() + 50;
        if (windowScrolltop >= targetPoint) {
            $('.l-body.pc').addClass('reversal');
        } else {
            $('.l-body.pc').removeClass('reversal');
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
        TweenMax.fromTo(
            $('.p-header__nav-container'),
            0.4,
            {'right': '-200px'},
            {
                'right': '0',
                delay: 0,
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav'),
            0,
            {},
            {
                opacity: '1',
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-list.nav-list01'),
            0,
            {opacity: '0',},
            {
                opacity: '1',
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-item01'),
            1,
            {opacity: '0',},
            {
                opacity: '1',
                delay: 0.2,
                ease: Power2.easeOut,
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-item02'),
            1,
            {opacity: '0',},
            {
                opacity: '1',
                delay: 0.25,
                ease: Power2.easeOut,
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-item03'),
            1,
            {opacity: '0',},
            {
                opacity: '1',
                delay: 0.3,
                ease: Power2.easeOut,
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-item04'),
            1,
            {opacity: '0',},
            {
                opacity: '1',
                delay: 0.35,
                ease: Power2.easeOut,
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-item05'),
            1,
            {opacity: '0',},
            {
                opacity: '1',
                delay: 0.4,
                ease: Power2.easeOut,
            }
        );
        TweenMax.fromTo(
            $('.p-header__nav-list.nav-list02 a'),
            0.6,
            { opacity: '0' },
            {
                opacity: '1',
                delay: 0.3,
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
    } else if (bl == 'hiden') {
        modalopen = false;
        $('.l-body').removeClass('open');
        TweenMax.fromTo(
            $('.p-header__nav-container'),
            0.4,
            {},
            {
                'right': '-200px',
                ease: Power2.easeOut,
                onComplete: function () {
                },
            }
        );
    }
}

/*------------------------------------------------------------------
リサイズ処理
/*------------------------------------------------------------------*/
const mediaQueryList = window.matchMedia('(min-width: 768px)');
const listener = (event) => {
    if (event.matches) {
        // 960px以上
        //console.log('PC用ブレークポイント用処理');
        $('.l-body').removeClass('open');
        $('.l-body').removeClass('sp');
        $('.l-body').addClass('pc');

        const headerScroll = () => {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            let windowWidth = window.innerWidth;
            let element = document.getElementsByClassName('scroll');
            if ( scrollTop <= 130) {
                $('.p-header__nav-container').css('right','-200px');
                $('.p-header__nav-list.nav-list01').css('opacity','0');
            }
            if (scrollTop <= 150) {
                $('.l-body').removeClass('scroll');
                $('.l-body').removeClass('open');
                modalopen = false;
                $('.p-header__nav-list.nav-list01').css('opacity','1');
                $('.p-header__nav-list.nav-list02 a').css('opacity','1');
            } else if (scrollTop > 150) {
                $('.l-body').addClass('scroll');
                //if( element.classList.contains('scroll') == false ){
                //     $('.p-header__nav-list.nav-list01').css('opacity','0');
                //     $('.p-header__nav-list.nav-list02 a').css('opacity','0');
                // }
            }
        };
        window.addEventListener('scroll', function () {
            headerScroll();
        });

    } else {
        // 960px未満
        //console.log('SP用ブレークポイント用処理');
        $('.l-body').removeClass('open');
        $('.l-body').addClass('sp');
        $('.l-body').removeClass('pc');
        $('.l-body').removeClass('reversal');
    }
};
mediaQueryList.addEventListener('change', listener);
// 初期化処理
listener(mediaQueryList);



