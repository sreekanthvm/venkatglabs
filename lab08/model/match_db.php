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
function addMatch($name, $matchType, $matchYear, $matchPlace, $score){
    global $db;
    global $error, $successMessage;
    $query = 'INSERT INTO matches (Name, MatchType, MatchYear, MatchPlace, Score)
            VALUES
            (:Name, :MatchType, :MatchYear, :MatchPlace, :Score)';
    $statement = $db->prepare($query);
    $statement->bindValue(':Name', $name);
    $statement->bindValue(':MatchType', $matchType);
    $statement->bindValue(':MatchYear', $matchYear);
    $statement->bindValue(':MatchPlace', $matchPlace);
    $statement->bindValue(':Score', $score);
    $success = $statement->execute();
    $statement->closeCursor();
    if ($statement->errorCode() !== 0 && $success === false) {
        $sqlError = $statement->errorInfo();
        $error = 'INSERT error &rarr; The Match <strong>' . $name . '</strong> was not added because:' . $sqlError[2];
    } else {
        $successMessage = 'The Macth <strong>' . $name . '</strong> was successfully added to the database.';
    }
}
function getMatchinfo($id){
    global $db;
    global $error;
    $query='SELECT * FROM
                matches WHERE ID = :Match_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(':Match_id', $id, PDO::PARAM_INT);
    $statement -> execute();
    $match = $statement -> fetch();
    $statement -> closeCursor();
    if($statement->errorCode() !==0 && empty($match)){
        $sqlError= $statement->errorInfo();
        $error='SELECT error &rarr; The Match with the ID <strong>' . $id . '</strong> was not retrieved because:' .$sqlError[2];
    }
    return $match;
}
function updateMatch($id, $name, $matchType, $matchYear, $matchPlace, $score)
{
    global $db;
    global $error, $successMessage;
    $query = 'UPDATE matches
                SET ID = :Match_id,
                Name = :Name,
                MatchType = :MatchType,
                MatchYear = :MatchYear,
                MatchPlace= :MatchPlace,
                Score = :Score
            WHERE ID = :Match_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':Match_id', $id, PDO::PARAM_INT);
    $statement->bindValue(':Name', $name);
    $statement->bindValue(':MatchType', $matchType);
    $statement->bindValue(':MatchYear', $matchYear);
    $statement->bindValue(':MatchPlace', $matchPlace);
    $statement->bindValue(':Score', $score);
    $success = $statement->execute();
    $statement->closeCursor();
    if ($statement->errorCode() !== 0 && $success === false) {
        $sqlError = $statement->errorInfo();
        $error = 'UPDATE error &rarr; The Match <strong>' . $name . '</strong> was not updated because:' . $sqlError[2];
    } else {
        $successMessage = 'The Match <strong>' . $name . '</strong> was successfully updated.';
    }
}
function deleteMatch($id, $name) {
    global $db;
    global $error, $successMessage;
    $query = 'DELETE FROM matches WHERE ID = :Match_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':Match_id', $id, PDO:: PARAM_INT);
    $success = $statement->execute();
    $statement->closeCursor();
    if ($statement->errorCode() !== 0 && $success === false) {
        $sqlError = $statement->errorInfo();
        $error = 'DELETE error → The Match <strong>' . $name . '</strong> was not deleted because: ' . $sqlError [2]; }
    else {
        $successMessage = 'The Match <strong>' . $name . ' </strong> was successfully deleted.';
    }}