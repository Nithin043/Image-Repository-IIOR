<?php
session_start ();

if (!isset($_SESSION['UN']))
{
    header("location:index.php");
    exit;
}
// Connect to the database
require('DBinfo.php');

$id=$_POST['id'];
$sql = "INSERT INTO permdb (User ,CROP, MONTH, YEAR, `CROP STAGE`, `PARTS-AFFECTED`, `DEVICE/SHOT`, SEASON, STATE, PORD, AREA, BACKGROUND, PORDNAME, IMGCONTAINS, STAGE, IMAGE)
SELECT User, CROP, MONTH, YEAR, `CROP STAGE`, `PARTS-AFFECTED`, `DEVICE/SHOT`, SEASON, STATE, PORD, AREA, BACKGROUND, PORDNAME, IMGCONTAINS, STAGE, IMAGE FROM tempdb WHERE IName =". $id;
$result = $conn->query($sql);
$sql = "DELETE FROM tempdb WHERE IName =" . $id;
$result = $conn->query($sql);
// if ($conn->affected_rows > 0) {
//     echo "Record deleted successfully" . $sql;
// } else {
//     echo "Error deleting record: " . $sql . $conn->error;
// }
echo  "
<html>
    <style>
    html
    {
        background-color:cornsilk;
    }
    h1
    {
        margin-top:25%;
    }
    </style>
    <body>
        <center>
            <h1>
                Success
            </h1>
        </center>
    </body>
</html>
";
header('Refresh:1;URL=display.php');
?>