<?php
include 'conectDB.php';
include "verification.php";

$mois = $_POST['mois'];
$regime = $_POST['regime'];
$email = $_POST['email'];
$bp = $_POST['bp'];
$ir = $_POST['ir'];
$honoraires = $_POST['honoraires'];
$fiscalites = $_POST['fiscalites'];
$location =$_POST['location'];
$activite = $_POST['activite'];
$contact = $_POST['contact'];
$taux = $_POST['taux'];
$niu = $_POST['niu'];
$employes = $_POST['employes'];
$centre = $_POST['centre'];
$authorization = $_POST['authorization'];
   
 

 $req = "INSERT INTO contribuable VALUES( NULL,'mois','$regime','$email','$bp','$ir','$honoraires','$fiscalites','$location','$activite','$contact','$taux','$niu','$employes','$centre','$authorization')";
$test = mysqli_query($link,"$req");
if($test==true){
	header("location:contribuable.php");
}else{
	echo "Error.Please try again.";
}