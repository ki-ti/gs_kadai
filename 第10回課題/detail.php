<?php


$id = $_GET["id"];
include "funcs.php";
$pdo = db_con();


$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();


$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    $row = $stmt->fetch();
}


?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>


<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">ブックマーク一覧</a></div>
    </div>
  </nav>
</header>


<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新：ブックマーク</legend>
     <label>本の名前：<input type="text" name="name" value='<?= $row["name"] ?>'></label><br>
     <label>本のURL：<input type="text" name="url" value='<?= $row["url"] ?>'></label><br>
     <label><textArea name="comment" rows="4" cols="40"><?= $row["comment"] ?></textArea></label><br>
     <label><input type="hidden" name="id" value='<?= $id ?>'></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>


</body>
</html>