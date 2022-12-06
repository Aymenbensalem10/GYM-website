<?php
$user="root";
$mdp="";
$db="azerty";
$server="localhost";


$conn=mysqli_connect($server,$user,$mdp,$db);
if(!$conn)
{
    die('there is problem connection ..' .mysqli_connect_error());
}

?>