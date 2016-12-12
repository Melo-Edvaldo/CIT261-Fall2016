<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Inheritance</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="author" content="Edvaldo de Oliveira Melo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header><?php include_once("includes/header.php"); ?></header>

        <h1>JavaScript Inheritance</h1>
        <p>JavaScript is a class-free, object-oriented language, and as such, it 
            uses prototypal inheritance instead of classical inheritance. 
            JavaScript's prototypal inheritance has more expressive power than 
            classical inheritance.</p>

        <script>
            function Mammal(name) {
                this.name = name;
                this.offspring = [];
            }
            Mammal.prototype.haveABaby = function () {
                var newBaby = new Mammal("Baby " + this.name);
                this.offspring.push(newBaby);
                return newBaby;
            }
            Mammal.prototype.toString = function () {
                return 'Mammal "' + this.name + '"';
            }


            Cat.prototype = new Mammal(); // Here's where the inheritance occurs 
            Cat.prototype.constructor = Cat; // Otherwise instances of Cat would have a constructor of Mammal 
            function Cat(name) {
                this.name = name;
            }
            Cat.prototype.toString = function () {
                return 'Cat "' + this.name + '"';
            }


            var someAnimal = new Mammal("Mr. Melo");
            var myPet = new Cat("Felix");
            alert("Some animals are " + someAnimal); 
            alert("My pet's name is "  + myPet); 

            myPet.haveABaby(); // Calls a method inherited from Mammal 
            alert(myPet.offspring.length); // Shows that the cat has one baby now 
            alert(myPet.offspring[0]);
        </script>
        <footer><hr><?php include_once("includes/footer.php"); ?></footer>
    </body>
</html>