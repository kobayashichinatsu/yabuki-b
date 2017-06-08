<?php
require_once 'database_conf.php';
require_once 'h.php';

//データベースへの接続
$db = new PDO($dsn, $dbUser, $dbPass);
//検索実行
$sql = 'SELECT * FROM tweets';
$prepare = $db->prepare($sql);
$prepare->execute();
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);
//結果の出力
foreach ($result as $person) {
  echo $person['id'];
  echo ' ';
  echo $person['body'];//手抜き
  echo "<br/>";
}
?>