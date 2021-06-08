<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirm.php</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">index.php</a></li>
                <li><a href="confirm.php">confirm.php</a></li>
                <li><a href="complete.php">complete.php</a></li>
            </ul>
        </nav>
    </header>
    <form method="post">
        <label for="name">名前:<?php echo escape($name); ?></label>
        <input type="hidden" name="name" id="name" value="<?php echo $name ?>">
        <label for="text">年齢:<?php echo escape($age); ?></label>
        <input type="hidden" name="age" id="age" value="<?php echo $age ?>">
        <button type="submit" name="btn" value="complete">送信</button>
    </form>
    <form method="post">
        <input type="hidden" name="name" id="name" value="<?php echo $name ?>">
        <input type="hidden" name="age" id="age" value="<?php echo $age ?>">
        <button type="submit" name="btn" value="back">戻る</button>
    </form>
</body>

</html>