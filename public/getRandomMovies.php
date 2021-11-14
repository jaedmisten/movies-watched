<?php

include '../config/connect.php';

try {
    $sql = 'SELECT * FROM movies WHERE `image_uploaded` = 1 GROUP BY title';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $numMovies = count($movies);
    if ( $numMovies >= 3 ) {
        $randomMovieHashes = [];
        if ( $numMovies >= 6 ) {
            $randomKeys = array_rand($movies, 6);
        } else {
            $randomKeys = array_rand($movies, 3);
        }

        // Get first row of movie hashes for home page.
        for ($i = 0; $i <= 2; $i++) {
            $randomMovieHashes[] = $movies[$randomKeys[$i]]['hash'] . '.' . $movies[$randomKeys[$i]]['image_filename_extension'];
        }

        if ( $numMovies >= 6 ) {
            // Get second row of movie hashes for home page.
            for (; $i <= 5; $i++) {
                $randomMovieHashes[] = $movies[$randomKeys[$i]]['hash'] . '.' . $movies[$randomKeys[$i]]['image_filename_extension'];
            }
        }

        echo json_encode($randomMovieHashes);
    }
    
    return false;    
} catch (PDOException $e) {
    error_log("Error retrieving random movies for home page.", 0);
    error_log($e->getMessage(), 0);
    error_log($e->getTraceAsString(), 0);
}