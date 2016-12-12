<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>createElement</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>createElement</h1>
        <p>Click the button below to make a <b>BUTTON</b> element with text.</p>

        <button onclick="myFunction()">Try it</button>

        <script type="text/javascript">
            function myFunction() {
                var button = document.createElement("Button");
                var text = document.createTextNode("Click Me");
                button.appendChild(text);
                document.body.appendChild(button);
            }
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>