<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Functions</h1>
        <p>A JavaScript function is a block of code designed to perform a 
            particular task. It is executed when "something" invokes it (calls it).</p>
        
        <script type="text/javascript">
            function sayHello()
            {
                document.write("Congratulations! You called the function!");
            }
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>

        <p>Click the button below to call the function</p>

        <form>
            <input type="button" onclick="sayHello()" value="Say Hello">
        </form>
    </body>
</html>