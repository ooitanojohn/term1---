<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
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
        <label for=" name">名前:<?php echo $err['name']['null'] ?></label>
        <input type="text" name="name" id="name" value="<?php echo $name ?>">
        <label for="text">数字:<?php echo $err['age']['null'] . $err['age']['num']; ?></label>
        <input type="text" name="age" id="age" value="<?php echo $age ?>">
        <button type="submit" name="btn" value="entry">送信</button>
    </form>
</body>

</html>