<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Objects</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Objects</h1>
        <p>A JavaScript object is a collection of properties where each property 
            has a name and a value, similar to Hash, Map, or Dictionary in other 
            languages. The name of a property can be any string, including an 
            empty string. The value can be any value, such as a string, Boolean, 
            number, and null, but it cannot be undefined. The object's properties 
            can be defined even after you start using the object. But first, let's 
            look at how we create objects in JavaScript.</p>

        <script type="text/javascript">
            var rect = {width: 20, height: 10}; // add new object
            rect.color = {red: 0, green: 255, blue: 128}; // add new method
            rect.getArea = function () {
                return this.width * this.height;
            };
            alert("The first code color for this rectangle is " + rect.color.red + ".");
            alert("The second code color for this rectangle is " + rect.color.green + ".");
            alert("The third code color for this rectangle is " + rect.color.blue + ".");
            alert("The area for this rectangle is " + rect.getArea() + ".");
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>