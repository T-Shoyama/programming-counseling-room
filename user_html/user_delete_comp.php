<?php
session_start();

require_once("../config/config.php");
require_once("../model/User.php");

try {
    // MySQLへの接続
  $user = new User($host, $dbname, $user, $pass);
  $user->connectDb();

  //削除処理
  if(isset($_GET['id'])){
    $user->delete($_GET['id']);
  }

  if(!isset($_SESSION['User'])) {
    header('location: my_PHP/user_html/login.php');
    exit;
  } else {

  }
}catch (PDOException $e) {
  echo "接続失敗: " . $e->getMessage() . "\n";
  exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="../css/base2.css">
<link rel="stylesheet" href="../css/comp.css?v=3.5">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title>プログラミング相談室　アカウント削除完了</title>
</head>
<body>
  <div class="footerFixed">

<?php require ("header1.php"); ?>

  <div id="wrapper">
    <img class="comp_img" src="../img/user_delete2.png" alt="アカウントを削除しました" style="width: 55%;">
    <br>
    <a href="login.php"><img class="to_img" src="../img/to_login.png" alt"ログインページへ"></a>
  </div>

  <?php require ("footer.php"); ?>
  </div>
</body>
</html>
