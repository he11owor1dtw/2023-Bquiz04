<?php
include_once 'db.php';

$table=$_POST['table'];
$db = new DB($_POST['table']);
unset($_POST['table']);
$chk = $db->count($_POST);

if ($chk) {
  echo $chk;
  $_SESSION[$table]=$POST['acc'];
} else {
  echo $chk;
}
