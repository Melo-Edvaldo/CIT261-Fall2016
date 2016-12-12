<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>insertBefore</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>insertBefore</h1>
        <ul id="myList">
            <li>Juice</li>
            <li>Milk</li>
        </ul>

        <p>Click the button to insert an item to the list.</p>

        <button onclick="myFunction()">Try it</button>

        <script>
            function myFunction() {
                var newItem = document.createElement("LI");
                var textnode = document.createTextNode("Water");
                newItem.appendChild(textnode);

                var list = document.getElementById("myList");
                list.insertBefore(newItem, list.childNodes[0]);
            }
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>