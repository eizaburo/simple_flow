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
    <form id="form">
        <div>
            <label>氏名</label>
            <span><?php echo $name; ?></span>
            <input type="hidden" name="name" value="<?php echo $name; ?>">
        </div>
        <div>
            <label>性別</label>
            <span><?php echo $gender; ?></span>
            <input type="hidden" name="gender" value="<?php echo $gender; ?>">
        </div>
        <div>
            <button id="back">戻る</button>
            <button id="next">登録する</button>
        </div>
    </form>
    <script>
        const form = document.getElementById("form");
        const back = document.getElementById("back");
        const next = document.getElementById("next");

        //back
        back.addEventListener("click", (e) => {
            e.preventDefault();
            form.method = "post";
            form.action = "index.php";
            form.submit();
        });

        //next
        next.addEventListener("click", (e) => {
            e.preventDefault();

            if (checkComplete()) {
                alert("既に登録済みです。");
                return false;
            }

            form.method = "post";
            form.action = "thankyou.php";
            form.submit();

        });

        //ボタンが押されているかチェックする関数
        const checkComplete =  () => {

            //cookie全体を取得
            const cookies = document.cookie;

            //もしcookieがあれば
            if (cookies) {
                //;でsplit
                const cookiesArray = cookies.split(";");
                for (let i = 0; cookiesArray.length; i++) {
                    //key=valueを=でsplit
                    const cookieArray = cookiesArray[i].split("=");
                    if (cookieArray[0] === "complete") {
                        return cookieArray[1];
                    }
                }
            }
            //何もなければfalse
            return false;

        }
    </script>
</body>

</html>