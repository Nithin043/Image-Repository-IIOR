<!DOCTYPE HTML>
<?php
    session_start();
    if (!isset($_SESSION['UN'])) {
        header("location:index.php");
        exit;
    }?>
<html>
<head>
    <title>Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="manipulate.css">
</head>
<body>
<div class='heading'>
    <i></i>
    <h1 class="ol">ADMIN</h1>
    <button class='Logout'onclick="window.location.href = 'logout.php';">Logout</button>
</div>
    <div class="login">
        <form>
            <button type="submit" formaction="addusers.php" style="--clr:#39FF14"><span>CREATE USERS</span><i></i></button>
            <button type="submit" formaction="manipulatedata.php" style="--clr:#39FF14"><span>MANIPULATE CROP DATA</span><i></i></button>
            <button type="submit" formaction="AdminDisplay.php" style="--clr:#39FF14"><span>VIEW APPROVED ENTRIES</span><i></i></button>
            <button type="submit" formaction="download.php" style="--clr:#39FF14"><span>Download All</span><i></i></button>
        </form>
    </div>
</body>
</html>