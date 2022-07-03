<?php
function getAllMatches(){
    global $db;
    global $error;
    $query = 'SELECT * FROM matches ORDER BY Name';
    $statement = $db-> prepare($query);
    $statement -> execute();
    $matches = $statement->fetchAll();
    $statement-> closeCursor();
    if ($statement -> errorCode() !==0 && empty($matches)){
        $sqlError= $statement -> errorInfo();
        $error='SELECT error &rarr; The matches were not retrieved because:' .$sqlError[2];
    }
    return $matches;
}