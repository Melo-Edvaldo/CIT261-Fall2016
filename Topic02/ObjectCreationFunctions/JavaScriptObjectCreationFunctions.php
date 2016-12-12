<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Object Creation Functions</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Object Creation Functions</h1>
        <p>A JavaScript object is a collection of properties where each property 
            has a name and a value, similar to Hash, Map, or Dictionary in other 
            languages. The name of a property can be any string, including an 
            empty string. The value can be any value, such as a string, Boolean, 
            number, and null, but it cannot be undefined. The object's properties 
            can be defined even after you start using the object. But first, let's 
            look at how we create objects in JavaScript.</p>

        <script type="text/javascript">
            var newObject = Object.create(null, {
                size: {
                    value: "large",
                    enumerable: true
                },
                shape: {
                    value: "round",
                    enumerable: true
                }
            });

            document.write("Size's object is " + newObject.size + "." + "<br/>");
            document.write("Shape's object is " + newObject.shape + "." + "<br/>");
            document.write("New object is " + Object.getPrototypeOf(newObject) + ".");
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>