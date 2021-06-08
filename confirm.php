<?php

// 何も押されてない = $_POSTデータ初期値
if ($_POST === []) {
    header('Location:index.php');
    exit;
}
// 戻るボタン押した時 = $_POSTデータ back
elseif ($_POST['btn'] === 'back') {
    header('Location:index.php', true, 307);
    exit;
}
// 登録ボタン押された = $_POSTデータ entry
elseif ($_POST !== []) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    // 完了ボタン押された = $_POSTデータ complete
    if ($_POST['btn'] === 'complete') {
        require_once('model/controller.php');
        // DBに接続
        $link = sql_connect('config/local.php');
        // SQL escape 処理
        $name = sql_escape($link, $name);
        $age = sql_escape($link, $age);
        // 登録処理
        $sql = "INSERT INTO sample(name,age)VALUES('" . $name . "'," . $age . ")";
        // クエリ実行
        $msg = sql_query($link, $sql, 'insert');

        header('Location:complete.php?db_state=' . $msg . '', true, 307);
        exit;
    }
}
require_once 'model/view.php';
require_once 'tpl/confirm.php';
