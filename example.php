<?php
    session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP example DOC</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>

<body>

    <!-- our session rememmbers index pages session variable 
     so this works as well-->
    <?php
        echo $_SESSION["username"];
    ?>

</body>
</html>