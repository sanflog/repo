<!DOCTYPE html>
<html>
    <head>
        <title>Documents</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" value="ja-JP" />
        <meta name="viewport" content="width=device-width, initial-scale-1.0" />
        <link rel="stylesheet" type="text/css" href="./main.css" />
        <link rel="shortcut icon" href="./favicon.ico" />
    </head>
    <body>
        <div class="detail">

<?php
    $url = "http";
    //$url .= $_SERVER['HTTPS'] . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url .= "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $db = "documents_database";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

    $result = $conn->query("select * from philosophy where id={$params['id']};");
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $row = $rows[0];

    echo "<h3>{$row['title']}</h3>";    
    echo "<p>{$row['published_date']} #{$row['category']}</p>";
    echo "{$row['body']}";
    echo "<br />";

    $conn->close();
?>
            <br />
            <a href="index.html">back</a>
        </div>
    </body>
</html>
