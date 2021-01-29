<?php 
$count = 4; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>テスト</h1>


<?php if($count===3){ ?>
<p>カウント３</p>
<?php } else { ?>
    <p>カウントそのほか</p>
<?php } ?>


<form action="action.php" method='post'>
 名前: <input type="text" name="name" />
 年齢: <input type="text" name="age" />
 <input type="submit" />
</form>

<p>表示される</p>
<?php echo 'パースされる' ?>
<p>ブラウザ表示</p>

<?php echo "Some text"; ?>

No newline

<?= "But newline now" ?>


</body>
</html>