<?php


$name = $_POST["name"];
$url = $_POST["url"];
$comment = $_POST["comment"];
$id = $_POST["id"];


include "funcs.php";
$pdo = db_con();


$sql = "UPDATE gs_bm_table SET name=:name,url=:url,comment=:comment WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();


if ($status == false) {
    sqlError($stmt);
} else {
    header("Location: select.php");
    exit;
}


?>