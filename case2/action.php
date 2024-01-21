<?php
    include('sqlconnect.php');
    $name = $_GET['uname'];
    $mail = $_GET['mail'];
    $message = $_GET['message'];

    $result = $db->query("INSERT INTO messages VALUES (2, '$name', '$mail', '$message')");
    

?>