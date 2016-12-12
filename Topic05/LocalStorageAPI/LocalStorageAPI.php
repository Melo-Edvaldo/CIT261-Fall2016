<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Local Storage API</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>Local Storage API</h1>
        <p>Local storage is per origin (per domain and protocol). All pages, 
            from one origin, can store and access the same data.</p>

        <div id="result"></div>

        <p>Click the button to see the counter increase.</p>
        <p>Close the browser tab (or window), and try again, and the counter will continue to count (is not reset).</p>

        <script>
            function clickCounter() {
                if (typeof (Storage) !== "undefined") {
                    if (localStorage.clickcount) {
                        localStorage.clickcount = Number(localStorage.clickcount) + 1;
                    } else {
                        localStorage.clickcount = 1;
                    }
                    document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
                } else {
                    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                }
            }
        </script>
        
        <p><button onclick="clickCounter()" type="button">Click me!</button></p>
        
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>