<?php
include 'conectDB.php';
include 'verification.php';

$niu = $_POST['niu'];
$mois = $_POST['mois'];
$b1 = $_POST['b12'];
$p1 = $_POST['p12'];
$c1 = $_POST['c12'];
$pen1 = $_POST['pen12'];


$p2 = $_POST['p22'];
$c2 = $_POST['c22'];
$pen2 = $_POST['pen22'];

$p3 = $_POST['p32'];
$c3 = $_POST['c32'];
$pen3 = $_POST['pen32'];

$p4 = $_POST['p42'];
$pen4 = $_POST['pen42'];

$p5 = $_POST['p52'];
$pen5 = $_POST['pen52'];

$req = "INSERT INTO acomptes VALUES( NULL,'$niu','$mois','$b1','$p1','$p2','$p3','$p4','$p5','$c1','$c2','$c3','$pen1','$pen2','$pen3','$pen4','$pen5')";
$test = mysqli_query($link,"$req");
if($test==true){
	header("location:acomptes.php");
}else{
	echo "Error.Please try again.";
}

//N:B the numbers 1-6,represent the various parts of the data table from the form respectively.i.e b1,for the first base,p1 for first principal etc.