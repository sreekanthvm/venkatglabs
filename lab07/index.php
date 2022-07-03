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

else
{
    $error = "The <strong> $action</strong> action was not handled in the code.";
    $matches = getAllMatches();
    $pageTitle='Code Error';
    include 'view/match_list.php';
}