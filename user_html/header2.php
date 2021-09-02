<link rel="stylesheet" href="../css/header2.css?<?php echo date("YmdHis"); ?>">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/validate3.js"></script>
<script>


  $(function(){
    $("#humburger_menu").on("click",function(){
      $("#menu_hidden").slideToggle();
    });
  });

  $(function() {

  //マウスを乗せたら発動
  $('.header_navi li').hover(function() {

    //マウスを乗せたら色が変わる
    $(this).css('background', 'rgb(157, 235, 176)');

  //ここにはマウスを離したときの動作を記述
  }, function() {

    //色指定を空欄にすれば元の色に戻る
    $(this).css('background', '');

  });
});
</script>

<div id="header">
  <div class="header_logo">
    <a href="mypage.php">
      <img src="../img/logo.png" alt="ロゴ">
    </a>
  </div>
  <div id="humburger_menu">
    <img src="../img/humburger_menu.png" alt="メニュー">
  </div>
  <ul id="menu_hidden">
    <li>
      <a href="trouble_top.php">悩み相談</a>
    </li>
    <li>
      <a href="favorites.php">お気に入りユーザー</a>
    </li>
    <li>
    <a href="?logout=1" onClick="if(!confirm('ログアウトしますか？')) return false;">ログアウト</a/a>
    </li>
  </ul>

  <ul class="header_navi">
    <a href="trouble_top.php"><li>悩み相談</li></a>
    <a href="favorites.php"><li>お気に入りユーザー</li></a>
    <a href="?logout=1" onClick="if(!confirm('ログアウトしますか？')) return false;"><li class="border_right">ログアウト</li></a>
      <form class="trouble_sarch" action="sarch.php" method="GET">
        <input class="sarch" type="text" name="body" placeholder="悩みを検索する　例：HTML、CSSetc...">
        <input class="sarch_button" type="submit" name="" value="検索">
      </form>
  </ul>
</div>
