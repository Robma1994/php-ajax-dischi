<?php
    require __DIR__ . '/../partials/dataBase.php';
    header('Content-Type: application/json');
    echo json_encode($db);
?>