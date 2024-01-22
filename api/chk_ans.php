<?php
session_start();

echo ($_SESSION['ans'] == $_GET['ans']) ? 1 : 0;

// 上為下方簡寫
// if($_SESSION['ans']==$_GET['ans']){
//   echo 1;
// }else{
//   echo 0;
// }
