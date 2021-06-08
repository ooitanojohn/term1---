<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete.php</title>
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
    <h1><?php echo $msg ?></h1>
    <table>
        <?php foreach ($user as $key => $val) { ?>
            <tr>
                <td><?php echo escape($key) . ':' ?></td>
                <td><?php echo escape($val) ?></td>
            </tr>
        <?php } ?>
    </table>
</body>