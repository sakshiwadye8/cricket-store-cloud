<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Change SITEURL later after Render deploy
define('SITEURL', '/');

// 🔥 TiDB Cloud Details
define('LOCALHOST', 'gateway01.ap-southeast-1.prod.aws.tidbcloud.com');   // example: gateway01.ap-south-1.prod.aws.tidbcloud.com
define('DB_USERNAME', '364KHio1KorJLBB.root'); // example: abc.root
define('DB_PASSWORD', 'RybDDsupDv7oUNi3');
define('DB_NAME', 'cricket_store');

// IMPORTANT: Port 4000 for TiDB
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME, 4000);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>
