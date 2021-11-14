<?php

include '../config/connect.php';

$directorId = $_POST['directorId'];

try {
    $sql = "DELETE FROM directors WHERE `id` = ?";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute([$directorId]);

    /*
     * Need to also delete rows in `directors_movies` that have same director id 
     * in `directors_id` column.
     */
    $sql = "DELETE FROM directors_movies WHERE `directors_id` = ?";
    $stmt = $pdo->prepare($sql);
    $result2 = $stmt->execute([$directorId]);

    echo $result;
} catch (PDOException $e) {
    error_log("Error deleting director.", 0);
    error_log($e->getMessage(), 0);
    error_log($e->getTraceAsString(), 0);

    header('HTTP/1.0 500 Director Deletion Failed');
}