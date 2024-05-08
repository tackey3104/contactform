<?php

mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=xampp&mysql practice; host=localhost;","root","");

$pdo->exec("insert into contactform value('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<h1>お問い合わせフォーム</h1>

<div class="kakunin">
    <p>
        お問い合わせ有難うございました。<br>
        3営業日以内に担当者より連絡差し上げます。
    </p>
</div>
    
</body>
</html>