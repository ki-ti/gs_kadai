<?php


function h($a)
{
    return htmlspecialchars($a, ENT_QUOTES);
}


function db_con()
{
    try {
        return new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', '');
    } catch (PDOException $e) {
        exit('DB_CONECTION_ERROR:' . $e->getMessage());
    }
}


function sqlError($stmt)
{
    $error = $stmt->errorInfo();
    exit("SQL_ERROR:" . $error[2]);
}


function chkSsid(){
    if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()){
        exit("LoginError");
    }else{
        session_regenerate_id(true);  //idをリネームする
        $_SESSION["chk_ssid"] = session_id();
    }
}