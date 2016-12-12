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

        <h1>JavaScript Arrays</h1>
        <p>Arrays in JavaScript consists of two square brackets that wrap 
            optional array elements separated by a comma. Array elements can be 
            any type, including number, string, Boolean, null, undefined, object, 
            function, regular expression and other arrays.</p>
        
        <script type="text/javascript">
            //We initialize the array using the Array() constructor. 
            //Note that for readability one can spread the argument over several lines.
            var flower_shop = new Array();

            flower_shop["Rose"] = "$5.00";
            flower_shop["Daisy"] = "$4.00";
            flower_shop["Orchid"] = "$2.00";
            flower_shop["Violet"] = "$3.00";

            //Let's print out the headers to our table
            document.write("<table border=\"1\" cellpadding=\"5\">");
            document.write("<tr><th>Flower</th><th>Price</th></tr>");

            //Now we start the for loop using the variable flower to hold our key.
            for (var flower in flower_shop) //print the values into a table cell for each iteration
                document.write("<tr><td>" + flower + "</td><td>" + flower_shop[flower] + "</td></tr>");

            //finally close the table
            document.write("</table>");
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>