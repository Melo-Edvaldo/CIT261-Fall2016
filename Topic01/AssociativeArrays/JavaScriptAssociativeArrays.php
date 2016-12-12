<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Associative Arrays</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Associative Arrays</h1>
        <p>Associative Arrays are a breed of their own. It is a side effect of 
            the weak typing in JavaScript.</p>

        <p id="example"></p>
        
        <script type="text/javascript">
            var person = [];
            person[0] = "Edvaldo";
            person[1] = "Melo";
            person[2] = 41;
            document.getElementById("example").innerHTML = person[0] + " " + person.length;
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>