<?php
include 'conectDB.php';
include 'verification.php';

$niu = $_POST['niu'];
$mois = $_POST['mois'];
$b1 = $_POST['b13'];
$p1 = $_POST['p13'];
$p2 = $_POST['p23'];
$p3 = $_POST['p33'];
$p4 = $_POST['p43'];
$c1 = $_POST['c13'];
$pen1 = $_POST['pen13'];
$t1 = $p1+$c1+$pen1;
 $req = "INSERT INTO acompteareverser VALUES( NULL,'$niu','$mois','$b1','$p1','$p2','$p3','$p4','$c1','$pen1','$t1')";
$test = mysqli_query($link,"$req");
if($test==true){
	header("location:acompteareverser.php");
}else{
	echo "Error.Please try again.";
}


