<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Web Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!--Bootstrap and CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="#" class="logo">Logo</a>
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>
    <section>
        <img src="img/Python%20Images/bg_behind.jpg" id="forest_back">
        <h2 id="text">Python</h2>
        <a href="#" class="btn">Explore</a>
        <img src="img/Python%20Images/bg_front.jpg" id="forest_front">
    </section>
    <div class="sec">
        <h2 style="text-align:center">LECTURE 8: Operators</h2>
        <p>Operators are used to perform operations on variables and values.</p>
        <p>In the example below, we use the <span style="color: red">+</span> operator to add together two values:</p>
        <h3>Example</h3>
        <div class="card" style="width: 25rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black">
                    <span style="color: blue">print</span>(<span style="color:red">10</span> + <span style="color: red">5</span>)
                </p>
            </div>
        </div>
        <br>
        <p>Python divides the operators in the following groups:</p>
        <ul>
            <li>Arithmetic operators</li>
            <li>Assignment operators</li>
            <li>Comparison operators</li>
            <li>Logical operators</li>
            <li>Identity operators</li>
            <li>Membership operators</li>
            <li>Bitwise operators</li>
        </ul>
        <hr>
        <br>
        <h2>Python Arithmetic Operators</h2>
        <p>Arithmetic operators are used with numeric values to perform common mathematical operations:</p>
        <img src="img/Python%20Images/Lecture%20Images/arithmetic.png">
        <br>
        <hr>
        <h2>Python Assignment Operators</h2>
        <p>Assignment operators are used to assign values to variables:</p>
        <img src="img/Python%20Images/Lecture%20Images/assignment.png">
        <br>
        <hr>
        <h2>Python Comparison Operators</h2>
        <p>Comparison operators are used to compare two values:</p>
        <img src="img/Python%20Images/Lecture%20Images/comparison.png">
        <br>
        <hr>
        <h2>Python Logical Operators</h2>
        <p>Logical operators are used to combine conditional statements:</p>
        <img src="img/Python%20Images/Lecture%20Images/logical.png">
        <br>
        <hr>
        <h2>Python Identity Operators</h2>
        <p>Identity operators are used to compare the objects, not if they are equal, but if they are actually the same object, with the same memory location:</p>
        <img src="img/Python%20Images/Lecture%20Images/identity.png">
        <br>
        <hr>
        <h2>Python Membership Operators</h2>
        <p>Membership operators are used to test if a sequence is presented in an object:</p>
        <img src="img/Python%20Images/Lecture%20Images/membership.png">
        <br>
        <hr>
        <h2>Python Bitwise Operators</h2>
        <p>Bitwise operators are used to compare (binary) numbers:</p>
        <img src="img/Python%20Images/Lecture%20Images/bitwise.png">
        <hr>
        <h2 style="text-align:center">Exercise</h2>
        <hr>
        <p>Use the correct syntax to print the first item in the <b class="marking">fruits</b> tuple.</p>
        <!--Correct Answer: (fruits[0])-->
        <p>
            fruits = ("apple", "banana", "cherry", "cheese")
            <br>print(<input type="text" style="width: 70px">)
        </p>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <hr>
        <p>Use the correct syntax to print the number of items in the <b class="marking">fruits</b> tuple.</p>
        <!--Correct Answer: (len(fruits)-->
        <p>
            fruits = ("apple", "banana", "cherry")
            <br>print(<input type="text" style="width: 80px">)
        </p>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <hr>
        <p>Use negative indexing to print the last item in the tuple.</p>
        <!--Correct Answer: (fruits[-1])-->
        <p>
            fruits = ("apple", "banana", "cherry") print(
            <br>(<input type="text" style="width: 70px">)
        </p>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <hr>
        <p>Use a range of indexes to print the third, fourth, and fifth item in the tuple.</p>
        <!--Correct Answer: (2:5)-->
        <p>
            fruits = ("apple", "banana", "cherry", "orange", "kiwi", "melon", "mango") print(fruits[
            <input type="text" style="width: 50px">])
        </p>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
    </div>
</body>

</html>