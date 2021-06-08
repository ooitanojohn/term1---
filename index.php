<?php

// 何も押されてない = $_POSTデータ初期値 
if ($_POST === []) {
    $err = [];
}
// 戻るボタン押された = $_POSTデータ 'back'
elseif ($_POST['btn'] === 'back') {
    $err = [];
    $name = $_POST['name'];
    $age = $_POST['age'];
}
// 登録ボタン押した = $_POSTデータ 'entry'
elseif ($_POST['btn'] === 'entry') {
    require_once('model/controller.php');

    // 未入力であればエラーメッセージ
    if (null_judge($_POST['name'])) {
        $err['name']['null'] = '名前が未入力です。';
    }
    // 入力してたら名前受け取り
    else {
        $name = $_POST['name'];
    }

    // 未入力であればエラーメッセージ
    if (null_judge($_POST['age'])) :
        $err['age']['null'] = '年齢が未入力です';
    // 数値であれば 年齢受け取り
    elseif (is_numeric($_POST['age'])) :
        $age = $_POST['age'];
    // 数値でなければエラーメッセージ
    else :
        $err['age']['num'] = '数値で入力してください';
    endif;

    // エラーメッセージが初期値のまま
    if ($err === NULL) {
        header('Location:confirm.php', true, 307);
        exit;
    }
}
require_once 'model/view.php';
require_once 'tpl/index.php';
