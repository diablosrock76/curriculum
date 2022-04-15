<?php
$my_name = $_POST['my_name'];

$title1 = '①ネットワークのポート番号は何番？';
$question1 = array(); 
$question1 = array('80','22','20','21'); 
$answer1 = $question1[0];
shuffle($question1); 

$title2 = '②Webページを作成するための言語は？';
$question2 = array(); 
$question2 = array('PHP','Python','JAVA','HTML'); 
$answer2 = $question2[0];
shuffle($question2); 

$title3 = '③MySQLで情報を取得するためのコマンドは？';
$question3 = array(); 
$question3 = array('join','select','insert','update'); 
$answer3 = $question3[0];
shuffle($question3); 

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
<p>お疲れ様です<?php echo $my_name; ?>さん</p><br>
<form method="POST" action="answer.php">
    <input type="hidden" name="my_name" value ="<?php echo $my_name ?>">
<h2><?php echo $title1 ?></h2>
<form method="POST" action="answer.php">
    <?php foreach($question1 as $value){ ?>
    <input type="radio" name="question1" value="<?php echo $value; ?>" /> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer1" value="<?php echo $answer1 ?>">

<h2><?php echo $title2 ?></h2>
<form method="POST" action="answer.php">
    <?php foreach($question2 as $value){ ?>
    <input type="radio" name="question2" value="<?php echo $value; ?>" /> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer2" value="<?php echo $answer2 ?>">

<h2><?php echo $title3 ?></h2>
<form method="POST" action="answer.php">
    <?php foreach($question3 as $value){ ?>
    <input type="radio" name="question3" value="<?php echo $value; ?>" /> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer3" value="<?php echo $answer3 ?>"><br>
<input type="submit" value="回答する" />
</body>
</html>