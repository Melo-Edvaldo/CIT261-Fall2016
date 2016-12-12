<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Parameters</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Parameters</h1>
        <p>Parameters are the names listed in the function definition.</p>

        <p>Finding the largest number between 1 and 10.</p>
        <p id="example"></p>

        <script type="text/javascript">
            function findMax()
            {
                var i;
                var max = -Infinity;
                for (i = 0; i < arguments.length; i++)
                {
                    if (arguments[i] > max)
                    {
                        max = arguments[i];
                    }
                }
                return max;
            }
            document.getElementById("example").innerHTML = findMax(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>