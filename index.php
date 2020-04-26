<?php

    $name = $_POST['name'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <form method="post" action="confirm.php">
        <div>
            <label>氏名</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div>
            <button>確認へ</button>
        </div>
    </form>
</body>
</html>