// ハンバガーメニュー開閉
$("#hamburger-block").click(function() {
    $("#js-drawer").toggleClass("active");
    $(".c-hamburger").toggleClass("active");
});
// ドロワークリック時にメニューに戻る
$(".c-drawer-menu__list a").click(function() {
    $("#js-drawer").removeClass("active");
    $(".c-hamburger").removeClass("active");
});

// スワイパーを初期化
const swiper = new Swiper(".js-voices-swiper", {
    loop: true,
    speed: 600,
    navigation: {
        nextEl: ".p-voices__next",
        prevEl: ".p-voices__prev",
    },
    // SP1枚、PC3枚
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 35,
            centeredSlides: false,
        },
    },

});

// アコーディオンメニュー
$(function() {
    $('.p-accordion__answer').hide();
    $('.p-accordion__item').on('click', function() {
      $(this).find('.p-accordion__answer').slideToggle(400);
      $(this).toggleClass('is-open');
    });
  });




$(function () {

  // ① 使う要素・変数をまとめる
  const $pageTop    = $("#js-page-top");
  const $contactBtn = $("#js-contact-btn");
  const $fv         = $("#fv");
  const $footer     = $(".c-footer");

  // お問い合わせボタンがないページはbodyにクラスを付与
  if ($contactBtn.length === 0) {
    $("body").addClass("no-contact-btn");
  }
  // ② スムーススクロール（iOS対応）
  $pageTop.on("click", function (e) {
    e.preventDefault();
    smoothScrollToTop();
  });

  function smoothScrollToTop() {
    const startY    = window.scrollY;
    const duration  = 500;
    let startTime   = null;

    // なめらかな動きにするための計算式（加速と減速）
    function easeInOut(t) {
      return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
    }

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      const progress = Math.min((timestamp - startTime) / duration, 1);
      window.scrollTo(0, startY * (1 - easeInOut(progress)));
      if (progress < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }


  // ③ ボタンの表示・非表示
  function updateButtonVisibility(scrollPos) {
    const threshold = $fv.length ? $fv.outerHeight() : 550;
    const isShow    = scrollPos > threshold;

    $pageTop.toggleClass("is-show", isShow);
    $contactBtn.toggleClass("is-show", isShow);
  }

  // ④ フッター手前で止める

  function updateButtonPosition(scrollPos) {
    const winHeight    = window.visualViewport
                         ? window.visualViewport.height
                         : window.innerHeight;
    const docHeight    = document.documentElement.scrollHeight;
    const footerHeight = $footer.outerHeight() || 0;

    const scrollBottom = scrollPos + winHeight;
    const footerTop    = docHeight - footerHeight;
    const overlap      = Math.max(0, scrollBottom - footerTop);

    $pageTop.css("transform", `translateY(-${overlap}px)`);
    $contactBtn.css("transform", `translateY(-${overlap}px)`);
  }

  // ⑤ ③と④をまとめて呼ぶ関数
  function onUpdate() {
    const scrollPos = $(window).scrollTop();
    updateButtonVisibility(scrollPos);
    updateButtonPosition(scrollPos);
  }

  // ⑥ イベント登録（スクロール・リサイズ・iPhone下バー対策）
  let rafId = 0;

  function requestUpdate() {
    if (rafId) return;
    rafId = requestAnimationFrame(() => {
      rafId = 0;
      onUpdate();
    });
  }

  $(window).on("scroll resize", requestUpdate);

  if (window.visualViewport) {
    window.visualViewport.addEventListener("resize", requestUpdate);
    window.visualViewport.addEventListener("scroll", requestUpdate);
  }

  // ページを開いた瞬間にも実行
  onUpdate();

});




// スクロールバー
$(function() {
    const $wrap = $(".p-plan-table__scroll-area");
    const $track = $(".p-plan-table__scrollbar-track");
    const $thumb = $(".p-plan-table__scrollbar-thumb");

    if (!$wrap.length || !$track.length || !$thumb.length) return;

    function updateThumb() {
        const cw = $wrap[0].clientWidth;
        const sw = $wrap[0].scrollWidth;
        const trackW = $track.width();
        const thumbW = $thumb.outerWidth();
        const maxThumbX = Math.max(0, trackW - thumbW);
        const maxScroll = sw - cw;
        const x = (maxScroll <= 0 || maxThumbX === 0)
        ? 0 
        : ($wrap.scrollLeft() / maxScroll) * maxThumbX;

        $thumb.css("left", Math.max(0, Math.min(maxThumbX, x)) + "px");
    }
    $wrap.on("scroll", updateThumb);
    $(window).on("resize", updateThumb);

    let dragging = false;
    let startX = 0;
    let startLeft =0;

    $thumb.on("mousedown touchstart", function(e) {
        dragging = true;
        const pageX = e.pageX ?? e.originalEvent.touches?.[0]?.pageX ?? 0;
        startX = pageX;
        startLeft = parseFloat($thumb.css("left")) || 0;

        e.preventDefault();
    });

    $(document).on("mousemove touchmove", function(e) {
        if(!dragging) return;
        const pageX = e.pageX ?? e.originalEvent.touches?.[0]?.pageX ?? 0;
        const trackW = $track.width();
        const thumbW = $thumb.outerWidth();
        const maxThumbX = Math.max(0, trackW - thumbW);

        const dx = pageX - startX;
        const newLeft = Math.max(0, Math.min(maxThumbX, startLeft + dx));
        $thumb.css("left", newLeft + "px");

        const maxScroll = $wrap[0].scrollWidth - $wrap[0].clientWidth;
        if (maxThumbX > 0 && maxScroll > 0) {
            $wrap.scrollLeft((newLeft / maxThumbX) * maxScroll);
        }
    });

    $(document).on("mouseup touchend touchcancel", function() {
        dragging = false;
    });

    updateThumb();
});