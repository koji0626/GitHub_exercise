<?php
  $link = mysqli_connect('localhost', 'root', '');
  if (!$link) {
    die('Ú‘±Ž¸”sI<br>'.mysqli_connect_error());
  } else {
	  echo 'Ú‘±¬Œ÷I';
	  mysqli_set_chaeset($link, "utf8");
  }
?>
