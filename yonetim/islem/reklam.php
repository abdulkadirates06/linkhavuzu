<?php
session_start();
$admin = $_SESSION['admin'];
if($_SESSION['admin']){
$id=$_GET['id'];
require_once("../../dbBaglan.php");
$query=$db->query("DELETE from tblreklam  where reklamId=$id");
if($query){
	echo "Reklam Silindi";
	go("../reklam.php");
}
else{
	echo "Bir Sorun Olu�tu";
	go("../reklam.php");
}
}
else{
	echo "L�tfen Giri� Yap";
}

?> 