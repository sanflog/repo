<!DOCTYPE html>
<html>
    <head>
        <title>Submited | documents admin site</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" value="ja-jp" />
        <meta name="viewport" content="width=device-width, initial-scale-1.0" />
        <link rel="stylesheet" type="text/css" href="./main.css" />
        <link rel="shortcut icon" href="./favicon.ico" />
    </head>
    <body>
        <div class="contents">

<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $db = "documents_database";

    $title = $_POST["title"];
    $published_date = $_POST["published_date"];
    $category = $_POST["category"];
    $body = $_POST["body"];

    $sqlquery = "INSERT INTO philosophy VALUES (null, '$title', '$published_date', '$category', '$body');";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
    if($result = $conn->query($sqlquery)){
        echo "<strong>done.</strong><br>";
    }else{
        echo "<strong>False.</strong><br>";
    }

    echo "<br />";
    echo "<a href='./admin.php'>back</a><br />";
    echo "<br />";
    echo "====================<br />";
    echo "<br />";
    echo $title . "<br />";
    echo "<br />";
    echo "published date: " . $published_date . "<br />";
    echo "<br />";
    echo "category: " . $category . "<br />";
    echo "<br />";
    echo $body . "<br />";
    echo "<br />";
    echo "====================<br />";

    $conn->close();

?>
        </div>
    </body>
</html>
