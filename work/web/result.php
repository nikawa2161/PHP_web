<?php

require ('../app/functions.php');

$messages = filter_input(INPUT_GET, 'messages', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
$messages = empty($messages) ? "何も選択されていません" : implode(',　', $messages);



include ('../app/_parts/_header.php');

?>

<p><?= h($messages); ?></p>
<p><a href="index.php">戻る</a></p>


<?php
 include ('../app/_parts/_footer.php');
