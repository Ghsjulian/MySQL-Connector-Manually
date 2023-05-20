<?php
if (isset($_POST['host_name'])) {
  $info = array(
    '__host__' => trim($_POST['host_name']),
    '__user__' => trim($_POST['db_user']),
    '__password__' => trim($_POST['db_pass']),
    '__db__' => trim($_POST['db_name']),
    '__description__' => trim($_POST['description']),
    '__developer__' => "Ghs Julian",
  );
  fileExist($info);
}

function fileExist($info) {
  $json = json_encode($info);
  $myfile = fopen("../__database__/__json__/__ghs__.json", "a");
  fwrite($myfile, $json);
  fclose($myfile);
  echo "Your Information Has Saved!";
}
?>