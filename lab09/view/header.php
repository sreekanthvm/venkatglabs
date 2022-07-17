<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ganga-Lab7 <?php if (!empty($pageTitle)) echo ' - ' . $pageTitle; ?></title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
<div class="container">
    <header>
    <?php
        if (!empty($_SESSION['log'])) {
            $lastElement = end ($_SESSION['log']);
            if ($lastElement['displayed'] === false ){
                if ($lastElement['color'] === 'red') {
                    echo "<div class = 'alert alert-danger text-center'>\n";
                } 
                else {
                    echo "<div class = 'alert alert-success text-center'>\n";
                }
                echo "<p>" .$lastElement['message'] . "</p>\n";
                echo "</div>\n";
                $_SESSION['log'][count($_SESSION['log']) -1]['displayed'] = true;
            }
        }
        ?>
        <p class="text-center"><strong> Session ID:</strong> <?php echo session_id(); ?> <br>
        <a href=".?action=empty-log"> Empty Event Log</a> <br>
        <a href=".?action=end-session"> End Session and Delete Cookie</a>
        </p>
        <?php
        if (count($_SESSION['log']) > 0 ){
            echo "<ul>\n";
            foreach ($_SESSION['log'] as $key => $value){
                $logMessage = $value['message'];
                echo "<li> SESSION['log'][$key] &rarr; $logMessage</li>\n";
            }
            echo "</ul>\n";
        }
        ?>
    </header>
    <main>
