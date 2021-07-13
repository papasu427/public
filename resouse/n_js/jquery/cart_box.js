$(function () {

  $(".cart-box").mouseover(function () {
    if ($(".cart-item-list").children().length > 0) {
      $(".cart-item-list").addClass("active");
      $(".cart-contnet").addClass("active_cart");
    } else {
      $(".cart-item-list").addClass("popo");
      $(".cart-contnet").addClass("popo");
    }
  }).mouseout(function () {
    if ($(".cart-item-list").children().length > 0) {
      $(".cart-item-list").removeClass("active");
      $(".cart-contnet").removeClass("active_cart");
    } else {
      $(".cart-item-list").removeClass("popo");
      $(".cart-contnet").removeClass("popo");
    }
  });

　//クリックした要素削除
  $('.cart-item-close').click(function() {
    $(this).parent('li').remove();
  });
  
  // 監視ターゲットの取得
  const target = document.getElementById('cart-item-list');
  // オブザーバーの作成
  const observer = new MutationObserver(records => {
    // 変化が発生したときの処理を記述
      if(!($('.cart-item').length)){
        $(".cart-item-list").removeClass("active");
        $(".cart-contnet").removeClass("active_cart");
      }
  })

  // 監視の開始
  observer.observe(target, {
    childList: true
  })
});
