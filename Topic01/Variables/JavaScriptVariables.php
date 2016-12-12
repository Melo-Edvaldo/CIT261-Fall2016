<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Variables</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Variables</h1>
        <p>Variables are containers for storing data values.</p>

        <script type="text/javascript">
            /* Input: a temperature in Celsius
             * Processing: convert the temperature from Celsius to Fahrenheit
             * Output: the temperature converted to Fahrenheit
             */
            function celsToFahr()
            {
                // Read a Celsius temperature from the user.
                var text = document.getElementById('celsiusInputBox').value;

                // Convert what the user typed from text into a number.
                var c = parseFloat(text);

                // Convert the Celsius temperature into Fahrenheit.
                var f = c * 9 / 5 + 32;

                // Display the Fahrenheit temperature to the user.
                document.getElementById('fahrenheitDiv').innerHTML = "Temperature in Fahrenheit is " + f + " °F.";
            }
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>

        Enter a temperature in Celsius: <input type="text" id="celsiusInputBox" size="1">
        <p>
            <button type="button" onclick="celsToFahr()">Convert</button>
        </p>
        <div id="fahrenheitDiv"/>                     
    </body>            
</html>