<?php
    include 'helper.php';

    $conn = connect_db();

    // Start session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/main.css">
    <title>btsclic</title>
</head>
<body>
    <div class="sidebar">
        <h2>btsclic</h2>
        <ul>
            <li><a href="index.php">dashboard</a></li>
            <li><a href="bets.php">bets</a></li>
            <li><a href="users.php">users</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Bets</h2>
        <p>Welcome to btsclic</p>    
    </div>
</body>
</html>