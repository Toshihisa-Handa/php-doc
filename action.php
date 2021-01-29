<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
こんにちは<?php echo htmlspecialchars($_POST['name']);  ?>さん。
あなたは <?php echo (int)$_POST['age']; ?>さいです。


<?='tes'?>


</body>
</html>