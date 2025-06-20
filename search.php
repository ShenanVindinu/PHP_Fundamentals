<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        $usersearch = $_POST["usersearch"];

        try {
            require_once "includes/dbh.inc.php";

            $query = "SELECT * FROM comments WHERE username = :usersearch;";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":usersearch", $usersearch);
    
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $pdo = null;
            $stmt = null;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }

    } else {
        header("Location: ../index.php");
    }

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DOC</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/searchresults.css">
</head>

<body>

    <section>
        <h3> Search results:</h3>

            <?php 
                
            if (empty($results)) {
                echo "<div>";
                echo "<p>There were no results!</p>";
                echo "</div>";
            } else {
                foreach($results as $row) {
                    echo "<div>";
                    echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
                    echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
                    echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
                    echo "</div>";
                }
            }

            ?>

    </section>

    

</body>
</html>