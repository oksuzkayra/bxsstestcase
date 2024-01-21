<?php

include('sqlconnect.php');

$messages = $db->query('SELECT * FROM messages')->fetchAll();
foreach($messages as $message) {
    echo $message['message']."\n";
}
?>