<?php

require ('../app/functions.php');

$name = '文字列を表示しています<script>alert(1234);</script>';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <p>Hello, PHP!</p>
  <!-- 今日の日時と曜日を表示 -->
  <p>Today: <?= h($name); ?></p>
</body>
</html>