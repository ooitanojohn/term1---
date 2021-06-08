<?php

if ($_POST === []) {
    header('Location:index.php');
    exit;
}
if ($_POST !== []) {
    require_once('model/controller.php');
    $name = $_POST['name'];
    $age = $_POST['age'];
    $msg = $_GET['msg'];

    // DB接続
    $link = sql_connect('config/local.php');
    // SQL escape 処理
    $name = sql_escape($link, $name);
    $age = sql_escape($link, $age);
    // sql文格納 postデータ照合
    $sql =
        "SELECT id as ID , name as 名前 , age as 年齢 
    FROM sample 
    WHERE name = '" . $name . "' and age = '" . $age . "'";
    // sql文実行
    $result = sql_query($link, $sql, 'select');
    $user = $result;
}

require_once 'model/view.php';

require_once 'tpl/complete.php';
