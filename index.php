<?php

    $name = $_POST['name'];
    $gender = $_POST['gender'];
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
            <label>性別</label>
            男性：<input type="radio" name="gender" value="男性" <?php if($gender == "男性") echo "checked"; ?>>
            女性：<input type="radio" name="gender" value="女性" <?php if($gender == "女性") echo "checked"; ?>>
        </div>
        <div>
            <button>確認へ</button>
        </div>
    </form>
</body>
</html>