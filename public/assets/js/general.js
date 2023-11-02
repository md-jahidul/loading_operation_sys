//ハンバーガーメニュー
// $(function() {
//     $('.hamburger').click(function() {
//         $(this).toggleClass('active');

//         if ($(this).hasClass('active')) {
//             $('.globalMenuSp').addClass('active');
//         } else {
//             $('.globalMenuSp').removeClass('active');
//         }
//     });
// });
//End-ハンバーガーメニュー

//プラスマイナスアイコンのアコーディオン
// window.onload = function () {
//     $('.btn_accordion_open').click(function () {
//       $(this).toggleClass('vanish');
//       $(this).next('div').slideToggle();
//       $(this).find(".btn_accordion_close").toggleClass('show');
//     });
//   };
// window.onload = function () {
//       $('a.close_btn').click(function () {
//       //クリックされたa.close_btnの親要素.accordion_innerを閉じる。
//       $(this).parents('.accordion_inner').slideUp();
//       //クリックされたa.close_btnの親要素.accordion_innerの前要素にクラスopenがなければ追加し、あれば削除する。
//       $(this).parents('.accordion_inner').prev().toggleClass("open");
//     });
//   };
window.onload = function () {
  $(".student_msg_wrap").hide();
  $('.btn_accordion').click(function () {
    $('.btn_accordion').prev().slideToggle();
    $(this).toggleClass("closed");
  });
};
//End-プラスマイナスアイコンのアコーディオン

//----swiper----
const swiper = new Swiper(".swiper", {
  // ページネーションが必要なら追加
  pagination: {
    el: ".swiper-pagination"
  },
  // ナビボタンが必要なら追加
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  responsive: [
    {
      breakpoint: 768, // 399px以下のサイズに適用
      settings: {
        slidesToShow: 1,
        slidesToShow: 1,
      },
    },
  ],
});
//----End--//swiper----

//----アコーディオンメニュー----
$(function () {
  $('.details__summary').click(function () {
    $(this).toggleClass('active');
    $(this).next('.details__content').toggleClass('active');
  });
});
//----End--//----

//--TOP-Pick-UP-
$(function () {
  $(".slider").slick({
    arrows: false,
    autoplay: true,
    adaptiveHeight: true,
    variableWidth: true,
    centerMode: true,
    // centerPadding: "84.2%",
    dots: true,
    infinite: true,
  });
});
//--END--TOP-Pick-UP-


//-基本のアコーディオンメニュー
$(function () {
  //クリックで動く
  $('.nav-open').click(function () {
    $(this).toggleClass('active');
    $(this).next('nav').slideToggle();
  });
});
//-END-基本のアコーディオンメニュー

//jquery slick slider{TOP_PC_Pick-UP}
$(function () {
  $(".PC_slider").slick({
    arrows: false,
    autoplay: true,
    adaptiveHeight: true,
    centerMode: true,
    centerPadding: "30%",
    dots: true,
    infinite: true,
  });
});
//-END-基本はシンプルでカスタマイズも出来る

//-スムーススクロール_Header_click-btn
$(function () {
  $('a[href^=#]').click(function () {
    const speed = 500;
    const href = $(this).attr("href");
    const target = $(href == "#" || href == "" ? 'html' : href);
    const position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});
//-END__スムーススクロール_Header_click-btn

//-Servise-Open_contents
function inputClick(ID) {
  var position = jQuery(ID).offset().top;
  jQuery("html,body").animate({
    scrollTop: position - 10 //スクロール位置調整
  }, {
    queue: false
  });
};
//-END__Servise-Open_contents

//SP_servise_box
$(function () {
  $('.button').prevAll().hide();
  $('.button').click(function () {
    if ($(this).prevAll().is(':hidden')) {
      $(this).prevAll().slideDown();
      $(this).text('閉じる').addClass('close');
    } else {
      $(this).prevAll().slideUp();
      $(this).text('もっと見る').removeClass('close');
    }
  });
});
//-END--------------------------


//TOP_new_slide
$(function () {
  $(".new_slider").slick({
    autoplay: false,
    variableWidth: true,
    adaptiveHeight: true,
    slidesToScroll: 1,
    slidesToShow: 3,
    centerMode: true,
    // centerPadding: "62%",
    dots: true,
    infinite: true,
    responsive: [
      {
        breakpoint: 768, // 以下のサイズに適用
        settings: {
          slidesToScroll: 1,
          slidesToShow: 1,
        },
      },
    ],


    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>'
  });
});
//-END--------------------------


//--Servise_Pul_Down-------------------------
$(function () {
  $('.toggle_btn').click(function () {
    $(this).toggleClass('selected');
    $($(this).parent().attr('data-content')).slideToggle();
  });
});
//-END--------------------------

//--フェードイン、フェードアウトして切り替わるスライド----
const $slide = $(".top_slide")
  .slick({
    fade: true,
    speed: 1500,
    autoplaySpeed: 3000,
    arrows: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
  });
//--END__フェードイン、フェードアウトして切り替わるスライド----


// ===========  スクロールで背景が横移動  =============
$(window).on('scroll', function () {

  const scrollTop = $(window).scrollTop();
  const bgPosition = scrollTop / 2; //スクロール後のポジションを指定（値を大きくすると移動距離が小さくなる）

  if (bgPosition) {
    $('#scroll_slide').css('background-position', 'center left -' + bgPosition + 'px');
  }//bg要素のあるid=scroll_slideを設定してください
});

// ==========  スクロールで消えて出てくるヘッダー  ==========
// ※headerが2種類使用可能


$(function ($) {
  const fh = document.getElementById('fixed-header');
  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 500) { //　topから(数値)pxで消えて出現
      fh.classList.add('is-show');
    } else {
      fh.classList.remove('is-show');
    }
  });
}());

// html
// <header></header>
// <div id="fixed_header"></div>

// css
// #fixed-header {
//   position: fixed;
//   top: -70px;
//   width: 100%;
//   height: 70px;
//   line-height: 70px;
//   font-size: 2em;
//   text-align: center;
//   color: #fff;
//   background: black;
//   box-sizing: border-box;
//   transition:all .5s ease-in;
// }
//   &.is-show {
//      top: 0;
//    }
// }


// ========= loading animation =======
const loadingAnimation = () => {
  const form = document.forms[0];
  const button = form.querySelectorAll('button');
  const loader = document.querySelector('#loader');

  button.addEventListener('click', (e) => {

      loader.style.display = 'block';

      e.preventDefault();

      //ここから非同期処理
      form.submit();
  }, false);
};
loadingAnimation();