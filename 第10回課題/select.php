<?php


session_start();


include "funcs.php";
chkSsid();
$pdo = db_con();


$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();


$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';
        $view .= '<a href = "delete.php?id='.$result["id"].'">';
        $view .= "[☓]";
        $view .= '</a>';

        $view .= '<a href = "detail.php?id='.$result["id"].'">';
        $view .= $result["name"] . "," . $result["url"] . "<br>";
        $view .= '</a>';
        $view .= '</p>';
    }
}


?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブックマーク</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">


<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">

      <? if($_SESSION["kanri_flg"]=="1"){ ?>
      <a class="navbar-brand" href="index.php">データ登録</a>
      <? } ?>

      <a class="navbar-brand" href="logout.php">ログアウト</a>
      <?= $_SESSION["name"] ?>さん、こんにちは
      </div>
    </div>
  </nav>
</header>


<div>
    <div class="container jumbotron"><?=$view?></div>
</div>


</body>
</html>
