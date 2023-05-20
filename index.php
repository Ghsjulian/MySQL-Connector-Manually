<?php
if (file_exists("__database__/__json__/__ghs__.json")) {
  include_once('__database__/__DB__.php');
  $db = new __database__();
  $sql = "SELECT * FROM users";
  $data = $db->__cheak__();
} else {
  //echo "File Doesn't Exist";
  include_once('__server__/__setup__.php');
}
?>