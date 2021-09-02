<?php

session_start();

require_once("../config/config.php");
require_once("../model/User.php");

  //ログアウト処理

  if(isset($_GET['logout'])){
    //セッション情報を破棄
    $_SESSION = array();
  }

  if(!isset($_SESSION['User'])) {
    header('location: login.php');
    exit;
  }
?>  
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="../css/base2.css?<?php echo date("YmdHis"); ?>">
<link rel="stylesheet" href="../css/comp.css?<?php echo date("YmdHis"); ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title>プログラミング相談室　アカウント更新完了</title>
</head>
<body>
  <div class="footerFixed">

<?php require ("header2.php"); ?>

  <div id="wrapper">
    <img class="comp_img" src="../img/user_update.png" alt="アカウント更新完了" style="width: 55%;">
    <br>
    <a href="mypage.php"><img class="to_img" src="../img/to_mypage.png" alt="マイページへ"</a>
  </div>

  <?php require ("footer.php"); ?>
  </div>
</body>
</html>
