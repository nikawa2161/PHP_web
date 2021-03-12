<?php

require ('../app/functions.php');

include ('../app/_parts/_header.php');

?>

<form action="result.php" method="get">
  <select name="messages[]" multiple >
    <option value="hello">こんにちは</option>
    <option value="good nigjt">おやすみなさい</option>
    <option value="mazika!!">まじか！！！</option>
  </select>
  <button>ボタン</button>
</form>

<?php
 include ('../app/_parts/_footer.php');
