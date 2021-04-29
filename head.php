<?php
    ob_start();
    $title = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/education-209/64/book-note-paper-school-512.png"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title><?php echo strtoupper($title == 'index' ? 'home' : $title); ?> | JGoz Recipe Book</title>
</head>
<body>
    <header>

        <!-- Navigation Menu -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="main-dish.php">Main Dish</a></li>
                <li><a href="side-dish.php">Side Dish</a></li>
            </ul>
        </nav>
