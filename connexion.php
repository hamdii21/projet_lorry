<?php

$usename="root";
$mdp="";
$db="were-app";
$server="localhost";


$link=mysqli_connect($server,$usename,$mdp,$db);

if( $link){
    //echo"connexion etablie";
}else{
    die(mysqli_connect_error());
}














?>
