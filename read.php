<?php
//1.  DB接続します
try {
  //ID MAMP ='root'
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db_2;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_ov_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $str = $stmt->fetch(PDO::FETCH_ASSOC)){
      if($str['star'] == 1){
        $view .= '<tr>';
        $view .= '<td>'. $str['comment']. '</td>';
        $view .= '<td>'. '★' . '</td>';
        $view .= '<td>'. $str['g_name']. '</td>';
        $view .= '</tr>';
      } elseif($str['star'] == 2) {
        $view .= '<tr>';
        $view .= '<td>'. $str['comment']. '</td>';
        $view .= '<td>'. '★★' . '</td>';
        $view .= '<td>'. $str['g_name']. '</td>';
        $view .= '</tr>';
      } elseif($str['star'] == 3) {
        $view .= '<tr>';
        $view .= '<td>'. $str['comment']. '</td>';
        $view .= '<td>'. '★★★' . '</td>';
        $view .= '<td>'. $str['g_name']. '</td>';
        $view .= '</tr>';
      } elseif($str['star'] == 4) {
        $view .= '<tr>';
        $view .= '<td>'. $str['comment']. '</td>';
        $view .= '<td>'. '★★★★' . '</td>';
        $view .= '<td>'. $str['g_name']. '</td>';
        $view .= '</tr>';
      } elseif($str['star'] == 5) {
        $view .= '<tr>';
        $view .= '<td>'. $str['comment']. '</td>';
        $view .= '<td>'. '★★★★★' . '</td>';
        $view .= '<td>'. $str['g_name']. '</td>';
        $view .= '</tr>';
      } else {
        $view .= '<tr>';
        $view .= '<td>'. $str['comment']. '</td>';
        $view .= '<td>'. '' . '</td>';
        $view .= '<td>'. $str['g_name']. '</td>';
        $view .= '</tr>';
      }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>おりぼら！マイページ</title>
  <script src="js/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style3.css">
</head>
<body>
<div class="wrapper">
    <div class="header"><h3>おりぼら！マイページ</h3></div>
    <div class="container">
        <div class="left">
           <img src="img/gazo.jpg" alt="KEN様の画像" width="80px">
        </div>
        <div class="right">
           <p>Hi, My name is Ken.</p>
           <P>Welcome to</P>
           <P>Tokyo Olympics!!</P>
        </div>
    </div>
    <div class="evaluation">
    <table border="1" style="border-collapse: collapse">
        <tr>
            <th width="50%">感謝コメント</th>
            <th width="25%">星の数</th>
            <th width="25%">ゲスト様</th>
        </tr>

<!-- Main[Start] -->
      <?= $view ?>
<!-- Main[End] -->

</div>
</body>
</html>

