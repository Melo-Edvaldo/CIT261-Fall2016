<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Methods</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Methods</h1>
        <p>A method is actually a function definition stored as a property value.</p>

        <p id="example"></p>

        <script>
            var person =
                    {
                        firstName: "John",
                        lastName: "Doe",
                        id: 5566,
                        fullName: function ()
                        {
                            return this.firstName + " " + this.lastName + ".";
                        }
                    };

            document.getElementById("example").innerHTML = person.fullName();
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>