<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Properties</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Properties</h1>
        <p>There are two different ways to access an object property:</p>
        <p>You can use <b>.property</b> or <b>["property"]</b>.</p>

        <p id="example"></p>

        <script type="text/javascript">
            var person =
                    {
                        firstname: "John",
                        lastname: "Doe",
                        age: 50,
                        eyecolor: "blue"
                    };

            document.getElementById("example").innerHTML =
                    person.firstname + " " + person.lastname + " is " + person.age + " years old " + "and his eyes are " + person.eyecolor + ".";
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>