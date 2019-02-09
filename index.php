<!DOCTYPE html>
<!--
Created by: M. Bret Blackford
for: CSCI E-15 Spring 2019
-->
<html>
    <head>
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
        <meta charset="UTF-8">
        <title>P1 Bret</title>
    </head>
    <body>
        <section id="main-section">
            <h2>M. Bret Blackford</h2>
            
            <p>ABOUT ME: I live in St. Louis with my partner and three kids.  I enjoy learning, jogging, and vacationing with the family. </p>
            <img src="images/bret.jpg" alt="Bret portrait">
            <p id="quote">
                <?php
                include 'includes/helpers.php';
                echo getRandomMovieQuote();
                ?>
            </p>
        </section>
    </body>
</html>
