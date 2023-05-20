<?php
include_once('../__database__/__DB__.php');
$db = new __database__();
$sql = "SELECT * FROM users";

$data = $db->__SELECT__($sql);
for ($i = 0; $i < count($data); $i++) {
  // code...
  echo $data[$i]['user_name']."<br><br>";
}

?>