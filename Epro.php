<?php

session_start ();
if (!isset($_SESSION['UN']))
{
    header("location:index.php");
    exit;
    
}
    require('DBinfo.php');

$_SESSION['CROP'] =  $_POST["Crop"];
$_SESSION['PORD'] = $_POST["pord"];
$_SESSION['month'] = $_POST["month"];
$_SESSION['year'] = $_POST["year"];
$_SESSION['cs'] =  $_POST["cstage"];
$_SESSION['state'] = $_POST["part"];
$_SESSION['part'] = $_POST["state"];
$_SESSION['device'] = $_POST["device"];
$_SESSION['season'] = $_POST["season"];
$_SESSION['Area'] = $_POST["Area"];
?>