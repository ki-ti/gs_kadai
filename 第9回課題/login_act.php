<?php


session_start();
include("funcs.php");
$pdo = db_con();


$sql = "SELECT * FROM gs_user_table WHERE lid=:lid AND lpw=:lpw AND life_flg=0"; 
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $_POST["lid"],PDO::PARAM_STR);
$stmt->bindValue(':lpw', $_POST["lpw"],PDO::PARAM_STR);
$res = $stmt->execute();


if($res==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}


$val = $stmt->fetch();


if($val["id"] != ""){
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  header("Location: select.php");
}else{
  header("Location: login.php");
}
exit();


?>