<?php
session_start();

require_once("../config/config.php");
require_once("../model/Board.php");

try {
    $trouble = new Board($host, $dbname, $user, $pass);
    $trouble->connectDb();

    //ログアウト処理
    if(isset($_GET['logout'])){
      //セッション情報を破棄
      $_SESSION = array();
    }

    if(!isset($_SESSION['User'])) {
      header('location: login.php');
      exit;
    } else {
      $troSarch = $trouble->troSarch($_GET['body']);
    }
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja" >
<link rel="stylesheet" href="../css/trouble_top.css?<?php echo date("YmdHis"); ?>">
<link rel="stylesheet" href="../css/base2.css?<?php echo date("YmdHis"); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title>プログラミング相談室　悩み投稿トップ</title>
<body>
<div class="footerFixed">
<?php require ("header2.php"); ?>

<div id="wrapper">

  <div class="content">
    <div class="trouble_all">
      <img src="../img/sarch.png?<?php echo date("YmdHis"); ?>" class="sarch_img" alt="検索結果">
      <?php if(!$troSarch):?>
        <p class="not_post">検索条件に一致する投稿が見つかりませんでした。</p>
      <?php endif ?>
      <?php foreach($troSarch as $row) { ?>
        <li>
          <a href="trouble_detail.php?detail=<?= ($row['id']);?>"><span><?php print(htmlspecialchars($row['title'],ENT_QUOTES)) ?></span></a>
          <p class="time"><?php print(htmlspecialchars($row['created_at'],ENT_QUOTES)) ?></p>
        </li>
      <?php } ?>
  </div>
</div>


<?php require ("footer.php"); ?>
</div>
</body>
</html>
