<?php
class __database__ {
  private $__info__;
  public $__conn__;

  public function __construct() {
    $file = file_get_contents("__database__/__json__/__ghs__.json");
    $this->info = json_decode($file, true);
    $this->__conn__ = mysqli_connect($this->info['__host__'], $this->info['__user__'], $this->info['__password__'],
      $this->info['__db__']);
    return true;
  }
  public function __cheak__() {
    if ($this->__conn__) {
      echo "<center><br><br><br><br><h2 style='color:#009801'>MYSQL Connected Successfully !</h2></center>";
    } else {
      echo "<center><br><br><br><h2 style='color:#f00'>MYSQL Connected Failed !</h2></center>";
    }
  }
  public function __SELECT__($sql = null) {
    if ($sql) {
      $query = mysqli_query($this->__conn__, $sql);
      return mysqli_fetch_all($query, true);
    } else {
      echo "Please Insert SQL Query!";
    }
  }
}

?>