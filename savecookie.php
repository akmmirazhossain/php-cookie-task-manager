<?php


$tname = $_POST['tname'];
$tdetail = $_POST['tdetail'];


setcookie($tname,$tdetail, time() + (86400 * 30), "https://dev-akm-wp.pantheonsite.io/test/");

//header('Location: index.php');

?>