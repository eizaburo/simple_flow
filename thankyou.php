<?php

    $name = $_POST['name'];

    //処理完了
    setcookie("complete",true);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <form method="post" action="thankyou.php">
        <div>
            <span>ありがとうございました。</span>
        </div>
        <a href="index.php">戻る</a>
    </form>
</body>
</html>