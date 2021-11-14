<?php

include '../config/connect.php';

try {
    $sql = 'SELECT * FROM directors ORDER BY last_name ASC';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $directors = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($directors);
} catch (PDOException $e) {
    error_log("Error retrieving directors.", 0);
    error_log($e->getMessage(), 0);
    error_log($e->getTraceAsString(), 0);

    header('HTTP/1.0 500 Retrieving Directors Failed');
}


