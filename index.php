<?php
    session_start();

    $_SESSION["username"] = "Shenan"; 

    session_unset();
    session_destroy();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DOC</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>

<body>

    <?php
        echo $_SESSION["username"];
    ?>

</body>
</html>