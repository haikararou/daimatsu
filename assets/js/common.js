const headerShadow = document.querySelector(".p-header__shadow");
const headerLogo = document.querySelector(".p-header__logo");
const headerNav = document.querySelector(".p-header__nav-container");
const body = document.querySelector(".l-body");
const header = document.querySelector(".p-header");
const menuButton = document.querySelector(".p-header__menu-button");
const menuDesign = document.querySelector(".p-header__menu-design");
const menuContainer = document.querySelector(".p-header__menu-container");
const menuOuter = document.querySelector(".p-header__menu-outer");

const vr = 1280; //タブレット表示に切り替える画面幅
let logoHeight = headerLogo.clientHeight;
let headerNavCoordinate = headerNav.getBoundingClientRect();
let headerTop = headerNavCoordinate.top;
let tempTop = 0;
let tempHeight = 0;
/*------------------------------------------------------------------
ヘッダー制御
/*------------------------------------------------------------------*/
const headerScroll = () => {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  let windowWidth = window.innerWidth;
  tempHeight = logoHeight - scrollTop;
  tempTop = headerTop - scrollTop;
  if (scrollTop <= headerTop) {
    header.style.height = tempHeight + "px";
    headerLogo.style.height = tempHeight + "px";
    headerNav.style.top = tempTop + "px";
    headerShadow.style.height = tempHeight + "px";
  } else if (scrollTop > headerTop && tempTop != 0) {
    if (windowWidth >= vr) {
      tempHeight = 100;
      tempTop = 0;
    } else {
      tempHeight = 60;
      tempTop = 0;
    }
    headerShadow.style.height = tempHeight + "px";
    headerLogo.style.height = tempHeight + "px";
    headerNav.style.top = tempTop + "px";
  }
};

window.addEventListener("scroll", function () {
  headerScroll();
});

/*------------------------------------------------------------------
メニュー開閉
/*------------------------------------------------------------------*/

menuButton.addEventListener("click", () => {
  header.classList.toggle("active");
  menuButton.classList.toggle("active");
  menuDesign.classList.toggle("active");
  menuContainer.classList.toggle("active");
  menuOuter.classList.toggle("active");
  body.classList.toggle("active");
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  document.querySelector(".p-header__foundation").style.top = scrollTop + "px";
});

/*------------------------------------------------------------------
読み込み時処理
/*------------------------------------------------------------------*/
window.onload = function () {
  headerScroll();
  let windowWidth = window.innerWidth;
  if (windowWidth < vr) {
    headerShadow.classList.remove("active");
  }
};

/*------------------------------------------------------------------
リサイズ処理
/*------------------------------------------------------------------*/
const resizeEvent = () => {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  let windowWidth = window.innerWidth;
  headerScroll();
  if (windowWidth >= vr) {
    headerTop = 60;
    logoHeight = 160;
    //メニューを開いていたら閉じる
    headerShadow.classList.add("active");
    menuOuter.classList.remove("active");
    header.classList.remove("active");
    menuButton.classList.remove("active");
    menuDesign.classList.remove("active");
    menuContainer.classList.remove("active");
    body.classList.remove("active");

    if (scrollTop < 60) {
      headerNav.style.top = 60 + "px";
    }
  } else if (windowWidth < vr) {
    logoHeight = 60;
    headerShadow.classList.remove("active");
    headerNav.style.top = 0 + "px";
  }
};
window.addEventListener("resize", resizeEvent);
