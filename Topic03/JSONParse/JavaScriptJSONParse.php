<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>JSON Parse</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript JSON Parse</h1>
        <p>JSON is a format for storing and transporting data. It is often used 
            when data is sent from a server to a web page.</p>
        <p>The JSON.parse() transforms a JSON-formatted data into a JavaScript
            object. Parsing JSON-formatted data is very fast because it is done 
            by the JavaScript engine itself.</p>

        <script type="text/javascript">
            var json = '{"firstName": "Edvaldo", "lastName": "de Oliveira Melo", "studentCode": "48-820-8109"}';
            var student = JSON.parse(json);
            alert("My name is " + student.firstName + " " + student.lastName + " and my student code is " + student.studentCode + ".");
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>