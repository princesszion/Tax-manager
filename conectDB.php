<?php
//connection database
 $link = mysqli_connect("localhost","victory","victory");
if(!$link){
 echo "Erreur de connexion à la database";
 exit;
}
// selection de la base de données
 mysqli_select_db($link,"Taxmanager");