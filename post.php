<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>感謝コメント入力フォーム</title>
  <script src="js/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="wrapper">
        <div class="header"><h3>感謝コメント入力フォーム</h3></div>
        <div class="container">
            <div class="left">
                <p>ゲスト：</p>
                <p>Jackie Chan 様</P>
            </div>
            <div class="middle">>>></div>
            <div class="right">
                <p>ボランティア：Ken 様</p>
                <img src="img/gazo.jpg" alt="KEN様の画像" width="50px">
            </div>
        </div>
        <div class="form">
            <form action="write.php" method="post">
            <input type="hidden" name="g_name" value="Jackie Chan">
            <input type="hidden" name="v_name" value="Ken">
            <textarea id="comment" name="comment" rows="4" cols="35" placeholder="ここに感謝コメントを入力してください。" required></textarea>
            <div class="evaluation">
                <input id="star1" type="radio" name="star" value="5" required />
                <label for="star1"><span class="text">最高</span>★</label>
                <input id="star2" type="radio" name="star" value="4" required />
                <label for="star2"><span class="text">良い</span>★</label>
                <input id="star3" type="radio" name="star" value="3" required />
                <label for="star3"><span class="text">普通</span>★</label>
                <input id="star4" type="radio" name="star" value="2" required />
                <label for="star4"><span class="text">悪い</span>★</label>
                <input id="star5" type="radio" name="star" value="1" required />
                <label for="star5"><span class="text">最悪</span>★</label>
            </div>
            <input id="send" type="submit" value="送信"> <input type="reset" value="リセット">
            </form>
        </div>
  </body>

</html>
