<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>JSON Stringify</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript JSON Stringify</h1>
        <p>JSON is a format for storing and transporting data. It is often used 
            when data is sent from a server to a web page.</p>
        <p>The JSON.stringify() converts a JavaScript object into a 
            JSON-formatted string. The optional replacer argument to 
            JSON.stringify() is a function filters and transform the way a value 
            is stringified. It accepts two arguments, key and value.</p>

        <script type="text/javascript">
            var scores = {"Java": 70, "JavaScript": 80, "C#": 30};
            var passed = JSON.stringify(scores, function (key, value) {
                if (value < 40) {
                    return undefined;
                } else {
                    return value;
                }
            });
            alert(passed);
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>