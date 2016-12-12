<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Instantiation</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Instantiation</h1>
        <p>Instantiation in JavaScript involves defining all of the properties 
            of the object within the object itself, including all methods.</p>

        <script>
            function species(name, latinName, status)
            {
                this.name = name;
                this.latinName = latinName;
                this.status = status;
            }
            
            var animal = new species ("Bonobo", "Pan panisous", "endangered")
            document.write("Common name is " + animal.name + ".");
            document.write("<br />");
            document.write("Scientific name is " + animal.latinName + ".");
            document.write("<br />");
            document.write("It status is: " + animal.status + ".");
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>