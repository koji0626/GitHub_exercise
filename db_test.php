<?php
  $link = mysql_connect('localhost', 'root', '');
  if (!$link) {
    die('�ڑ����s�I<br>'.mysql_error());
  } else {
    echo '�ڑ������I';
  }
?>
