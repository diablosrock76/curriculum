<?php
$my_name = $_POST['my_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="answer.php" method="post">
<p>お疲れ様です<?php echo $my_name; ?>さん</p><br>
<h2>①ネットワークのポート番号は何番？</h2><br>
    <input type="radio" name="number" value="80">80
    <input type="radio" name="number" value="22">22
    <input type="radio" name="number" value="20">20
    <input type="radio" name="number" value="21">21
<h2>②Webページを作成するための言語は？</h2><br>
    <input type="radio" name="Language" value="php">PHP
    <input type="radio" name="Language" value="python">Python
    <input type="radio" name="Language" value="java">JAVA
    <input type="radio" name="Language" value="html">HTML
<h2>③MySQLで情報を取得するためのコマンドは？</h2><br>
    <input type="radio" name="command" value="join">join
    <input type="radio" name="command" value="select">select
    <input type="radio" name="command" value="insert">insert
    <input type="radio" name="command" value="update">update<br>
<input type="submit" value="回答する" />
</body>
</html>