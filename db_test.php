<?php
  $link = mysqli_connect('localhost', 'root', '');
  if (!$link) {
    die('�ڑ����s�I<br>'.mysqli_connect_error());
  } else {
    echo '�ڑ������I';
  }
?>
