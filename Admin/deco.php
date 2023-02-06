<?php
session_start();

if (isset($_SESSION['SITD1234'])){

    $_SESSION['SITD123'] = array();

    session_destroy();

  echo "<script> window.location.href='log.php'</script>";
}

?>