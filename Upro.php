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
if(!isset($_SESSION['id']))
{
    header("location:imup.php");
}
else
{
    header("location:EditUplod.php");
}
// switch ($_SESSION['PORD'])
// {
//     case "Healthy":
//         $E="INSERT INTO healthy (crop, dt, cropstage, st, part, device, season) VALUES ('".$_SESSION['CROP']."', '".$_SESSION['date']."', '".$_SESSION['cs']."', '".$_SESSION['state']."', '".$_SESSION['part']."', '".$_SESSION['device']."', '".$_SESSION['season']."')";
//         $conn->query($E);
//         $C = "SELECT * FROM healthy";
//         if ($result = $conn->query($C)) 
//         {
//         while ($row = $result->fetch_assoc()) 
//             {
//                 echo $row['crop'].$row['dt'].$row['cropstage'].$row['st'].$row['st'].$row['part'].$row['device'].$row['season'].$row['ID']."<br>";
//             }
//         }
//        
//         break;
//     case "pest":
//         break;
//     case "disease":
//         break;
//     case "NE":
//         break;
// }

// ?>

<!-- header("location:imup.php"); -->
