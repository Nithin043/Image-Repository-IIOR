<?php
session_start();
require 'DBinfo.php';

if (!isset($_SESSION['UN'])) {
    header("location:index.php");
    exit;
}

// Logout functionality
if (isset($_POST['logout'])) {
    session_destroy();
    header("location:manipulate.php");
    exit;
}

// Query to fetch the images
$sql = "SELECT IName, IMAGE FROM permdb";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Image Display</title>
    <link rel="stylesheet" type="text/css" href="gallery.css">
</head>

<body>
    <div class='heading'>
        <button onclick="window.location.href = 'manipulate.php';">&larr; Go Back</button>
        <center>
            <h1>Image Upload</h1>
        </center>
        <button onclick="window.location.href = 'logout.php';">Logout</button>
    </div>
    </div>

    <div class="image-gallery">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="image-card">
                    <img src="data:image/jpeg;base64,<?= base64_encode($row['IMAGE']) ?>">
                    <p>
                        <?= $row['IName'] ?>
                    </p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No images found.</p>
        <?php endif; ?>
    </div>

</body>

</html>

<?php
// Close the database connection
$conn->close();
?>