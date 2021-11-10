<?php

$dbhost = "localhost";
$dbuser = "group12read_only";
$dbpass = "SynPaR";
$dbname = "group12";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}
