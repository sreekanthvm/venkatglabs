<?php
require 'model/database.php';
require 'model/match_db.php';
if (!empty($_POST))
{
    $_POST = array_map('trim', $_POST);
}
if (isset($_POST['action']))
{
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}
elseif (isset ($_GET['action']))
{
    $action=filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}
else{$action= 'list-matches';
}
if ($action === 'list-matches')
{
    $matches = getAllMatches();
    $pageTitle = 'List Matches';
    include 'view/match_list.php';
}




elseif ($action==='view-add-match')
    {   $pageTitle= 'Add Match';
        include 'view/match_add.php';
    }
    elseif ($action==='add-match') {
        $name = filter_input(INPUT_POST, 'match-name', FILTER_SANITIZE_STRING);
        $matchType = filter_input(INPUT_POST, 'match-type');
        $matchYear = filter_input(INPUT_POST, 'match-year', FILTER_SANITIZE_NUMBER_INT);
        $matchPlace = filter_input(INPUT_POST, 'match-place', FILTER_SANITIZE_STRING);
        $score = filter_input(INPUT_POST, 'score', FILTER_SANITIZE_NUMBER_INT);
        if (!strlen($name) || !strlen($matchYear) || !strlen($matchPlace) || !strlen($score)) {
            $error = 'All fields in the Add form must contain data. Please ensure all form elements contain appropriate values.';
            $pageTitle = 'Add Match';
            include 'view/match_add.php';
        } else {
            addMatch($name, $matchType, $matchYear, $matchPlace, $score);
            $matches = getAllMatches();
            $pageTitle = 'List Matches';
            include 'view/match_list.php';
        }}
        elseif  ($action === 'view-update-match'){
        $id=filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
        $match=getMatchinfo($id);
        $pageTitle='Update Match';
            include "view/match_update.php";
    }
    elseif ($action === 'update-match'){
        $id = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
        $name = filter_input(INPUT_POST, 'match-name', FILTER_SANITIZE_STRING);
        $matchType = filter_input(INPUT_POST, 'match-type');
        $matchYear = filter_input(INPUT_POST, 'match-year', FILTER_SANITIZE_NUMBER_INT);
        $matchPlace = filter_input(INPUT_POST, 'match-place', FILTER_SANITIZE_STRING);
        $score = filter_input(INPUT_POST, 'score', FILTER_SANITIZE_NUMBER_INT);
        if (!strlen($name) || !strlen($matchYear) || !strlen($matchPlace) || !strlen($score)) {
            $error = 'All fields in the Update form must contain data. Please ensure all form elements contain appropriate values.';
            $match = getMatchinfo($id);
            $pageTitle = 'Update Match';
            include 'view/match_update.php';
        } else{
            updateMatch($id, $name, $matchType, $matchYear, $matchPlace, $score);
            $matches=getAllMatches();
            $pageTitle= 'List Matches';
            include 'view/match_list.php';
        }
    }
    elseif ($action === 'delete-match'){
   $id = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
    $match = getMatchinfo($id);
    $matches = getAllMatches();
    $pageTitle = 'List Match to Delete';
    include 'view/match_delete.php';}
    elseif ($action === 'delete-match') {
        $id = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_NUMBER_INT);
        $match= getMatchinfo($id);
        $name = $match['Name'];
        deleteMatch($id, $name);
        $matches = getAllMatches();
        $pageTitle = 'List Matches';
        include 'view/match_list.php';}

    elseif ($action === 'clear-message'){
        header('Location:.');
    }


else
{
    $error = "The <strong> $action</strong> action was not handled in the code.";
    $matches = getAllMatches();
    $pageTitle='Code Error';
    include 'view/match_list.php';
}