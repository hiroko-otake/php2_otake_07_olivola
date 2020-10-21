<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>感謝コメント入力完了</title>
  <script src="js/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style2.css">
</head>
<body>

<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ

// POSTを受け取る
$g_name = $_POST['g_name'];
$v_name = $_POST['v_name'];
$comment = $_POST['comment'];
$star = $_POST['star'];


//2. DB接続します
try {
  //ID MAMP ='root'
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db_2;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_ov_table(id, g_name, v_name, comment, star, indate) VALUES(NULL, :g_name, :v_name, :comment, :star, sysdate())");
$stmt->bindValue(':g_name', $g_name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':v_name', $v_name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':star', $star, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMessage:".$error[2]);
}else{

  echo '<div class="wrapper">';
  echo '<div class="header"><h3>感謝コメント入力完了</h3></div>';
  echo '<div class="container">';
  echo '<div class="main_text"><P>感謝コメントのご入力<br>ありがとうございました。</P></div>';
  echo '<div class="pay_link">';
  echo '<p>※ボランティア様へお礼(Tip)の支払いを希望されるゲスト様はお支払い手続きへお進みください。</p>';
  echo '<a href="#"" class="btn">お支払い手続きへ</a>';
  echo '</div>';
  echo '</div>';
  echo '<div class="footer">';
  echo '<a href="read.php">Kenさんのマイページを開く</a>';
  echo '</div>';
}
?>
</body>
</html>