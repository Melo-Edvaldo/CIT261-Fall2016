<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Loops</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Loops</h1>
        <p>Loops can execute a block of code a number of times.</p>
        <p>JavaScript loops are used to repeatedly run a block of code until a 
            certain condition is met. When developers talk about iteration or 
            iterating over, say, an array, it is the same as looping. JavaScript 
            offers several options to repeatedly run a block of code, including 
            while, do while, for and for-in.</p>
        <p id="example"></p>

        <script type="text/javascript">
            var text = ""; //var text is empty.
            var i; //I could use any letter for this variable. Letter "i" is more used.
            for (i = 1; i < 11; i++) {
                text += "The number is " + i + "." + "<br>";
            }

            document.getElementById("example").innerHTML = text;
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>