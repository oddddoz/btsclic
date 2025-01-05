<?php
    function check_auth() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php");
            exit;
        }
    }

    function connect_db() {
        // Database configuration
        $host = 'localhost';
        $user = 'user';
        $password = 'password';
        $dbname = 'testdb';

        $conn = new mysqli($host, $user, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
?>