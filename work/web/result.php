<?php

require ('../app/functions.php');

$message = filter_input(INPUT_GET, 'message');



include ('../app/_parts/_header.php');

?>

<p><?= h($message); ?></p>
<p><a href="index.php">戻る</a></p>


<?php
 include ('../app/_parts/_footer.php');
