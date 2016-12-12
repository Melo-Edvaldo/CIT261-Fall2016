<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>appendChild</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>appendChild</h1>
        <ul id="myList">
            <li>Juice</li>
            <li>Milk</li>
        </ul>

        <p>Click the button below to append an item to the end of the list.</p>

        <button onclick="myFunction()">Try it</button>

        <script>
            function myFunction() {
                var node = document.createElement("LI");
                var textnode = document.createTextNode("Water");
                node.appendChild(textnode);
                document.getElementById("myList").appendChild(node);
            }
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>