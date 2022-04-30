<!DOCTYPE html>
<html>
    <head>
        <title>Form | Documents admin site</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" value="ja-JP" />
        <meta name="viewport" content="width=device-width, initial-scale-1.0" />
        <link rel="stylesheet" type="text/css" href="./main.css" />
        <link rel="shortcut icon" href="./favicon.ico" />
    </head>
    <body>
        <div class="contents">
            <h2>Create contents.</h2>
            <form action="./test.php" method="POST">
                <table style="text-align: left;">
                    <tr>
                        <th>title</th>
                        <th><input type="text" name="title" /></th>
                    </tr>
                    <tr>
                        <th>published date</th>
                        <th><input type="date" name="published_date" /></th>
                    </tr>
                    <tr>
                        <th>author</th>
                        <th><input type="text" name="author" /></th>
                    </tr>
                    <tr>
                        <th>category</th>
                        <th><input type="text" name="category" /></th>
                    </tr>
                    <tr>
                        <th>body</th>
                        <th><textarea rows="10" cols="60" name="body"></textarea></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><input type="submit" value="submit" /></th>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
