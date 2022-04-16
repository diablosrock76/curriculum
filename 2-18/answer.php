<?php 
$my_name = $_POST['my_name'];

$question1 = $_POST['question1']; 
$answer1 = $_POST['answer1'];   

$question2 = $_POST['question2']; 
$answer2 = $_POST['answer2'];   

$question3 = $_POST['question3']; 
$answer3 = $_POST['answer3'];   

function judgeAnswer($qes, $ans){
  if($qes == $ans){
  echo 正解！;
  }else{
  echo 不正解･･･;
  }
  }
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
<p><?php echo $my_name;?>さんの結果は・・・？</p>
<p>①の答え</p>
<?php judgeAnswer($question1,$answer1); ?>
<p>②の答え</p>
<?php judgeAnswer($question2,$answer2); ?>
<p>③の答え</p>
<?php judgeAnswer($question3,$answer3); ?>
</body>
</html>