<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Conditional Statements</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Conditional Statements</h1>
        <p>Statement executes a block of code if the conditional expression 
            inside a pair of parentheses evaluates to true. The conditions 
            typically involve comparison of variables for equality or inequality.</p>
        
        <script type="text/javascript">
            {
                var n = prompt("Enter a number between 1 and 100!");
                var entered = "You entered a number between";

                if (n >= 1 && n < 10)
                {
                    alert(entered + " 0 and 10.")
                } else if (n >= 10 && n < 20)
                {
                    alert(entered + " 9 and 20.")
                } else if (n >= 20 && n < 30)
                {
                    alert(entered + " 19 and 30.")
                } else if (n >= 30 && n < 40)
                {
                    alert(entered + " 29 and 40.")
                } else if (n >= 40 && n <= 100)
                {
                    alert(entered + " 39 and 100.")
                } else if (n < 1 || n > 100)
                {
                    alert("You entered a number less than 1 or greater than 100.")
                } else
                {
                    alert("You did not enter a number!")
                }
            }
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>

