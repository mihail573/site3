<?php
$articul="'".$_POST['articul']."'";
$goodsname="'".$_POST['goodsname']."'";
$description="'".$_POST['description']."'";
$weight="'".$_POST['weight']."'";
$cost=$_POST['cost'];
$salecost=$_POST['salecost'];
$amount=$_POST['amount'];
$img="'".$_POST['img']."'";
$catpowder="'".$_POST['catpowder']."'";
$catshampoo="'".$_POST['catshampoo']."'";
$catbaby="'".$_POST['catbaby']."'";
// echo $articul.$goodsname.$description.$weight.$cost.$salecost.$amount.$img;
// print_r ($_POST);
	require_once('config.php');
	require_once('afunction.php');
	dbConnect($host, $user, $password, $databasename);
	addToDb($dbtable, $articul,$goodsname,$description,$weight,$cost,$salecost,$amount,$img,$catpowder,$catshampoo,$catbaby);

?>
