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
        <h2 style="text-align:center">LECTURE 4: Data Types</h2>
        <h2>Built-in Data Types</h2>
        <p>
            In programming, data type is an important concept.
            <br>Variables can store data of different types, and different types can do different things.
            <br>Python has the following data types built-in by default, in these categories:
        </p>
        <ul style="list-style: none;">
            <li>Text Type: <span style="color:red">str</span></li>
            <li>Numeric Types: <span style="color:red">int, float, complex</span></li>
            <li>Sequence Types: <span style="color:red">list, tuple, range</span></li>
            <li>Mapping Type: <span style="color:red">dict</span></li>
            <li>Set Types: <span style="color:red">set, frozenset</span></li>
            <li>Boolean Type: <span style="color:red">bool</span></li>
            <li>Binary Types: <span style="color:red">bytes, bytearray, memoryview</span></li>
        </ul>
        <h2>Getting the Data Type</h2>
        <p>You can get the data type of any object by using the <span style="color:red">type()</span> function:</p>
        <h3>Example</h3>
        <p>Print the data type of the variable x:</p>
        <div class="card" style="width: 15rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color:black">
                    x = <span style="color: red">5</span>
                    <br><span style="color: blue">print</span>(<span style="color:blue">type</span>(x))
                </p>
            </div>
        </div>
        <hr>
        <h2>Setting the Data Type</h2>
        <p>In Python, the data type is set when you assign a value to a variable:</p>
        <img src="img/Python%20Images/Lecture%20Images/data_type.png">
        <hr>
        <h2>Setting the Specific Data Type</h2>
        <p>If you want to specify the data type, you can use the following constructor functions:</p>
        <img src="img/Python%20Images/Lecture%20Images/data_type1.png">
        <hr>
        <h2 style="text-align:center">Exercise</h2>
        <hr>
        <p>The follow code example would print the data type of x, what data type would that be?</p>
        <!--Correct Answer: (int)-->
        <p>x = 5
            <br>print(type(x))
        </p>
        <input type="text" style="width: 60px;">
        <hr>
        <p>The following code example would print the data type of x, what data type would that be?</p>
        <!--Correct Answer: (str)-->
        <p>
            x = "Hello World"
            <br>print(type(x))
        </p>
        <input type="text" style="width: 60px;">
        <br>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">

        <hr>
        <p>The following code example would print the data type of x, what data type would that be?</p>
        <!--Correct Answer: (float)-->
        <p>
            x = 20.5
            <br>print(type(x))
        </p>
        <input type="text" style="width: 60px;">
        <br>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <hr>
        <p>The following code example would print the data type of x, what data type would that be?</p>
        <!--Correct Answer: (list)-->
        <p>
            x = ["apple","banana","cherry"]
            <br>print(type(x))
        </p>
        <input type="text" style="width: 60px;">
        <br>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <hr>
        <p>The answer code example would print the data type of x, what data type would that be?</p>
        <!--Correct Answer: (tuple)-->
        <p>
            x = ("apple","banana","cherry")
            <br>print(type(x))
        </p>
        <input type="text" style="width: 60px;">
        <br>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <hr>
        <p>The following code example would print the data type of x, what data type would that be?</p>
        <!--Correct Answer: (dict)-->
        <p>
            x = {"name" : "John", "age" : 36}
            <br>print(type(x))
        </p>
        <input type="text" style="width: 60px;">
        <br>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <hr>
        <p>The following code example would print the data type of x, what data type would that be?</p>
        <!--Correct Answer: (bool)-->
        <p>
            x = True
            <br>print(type(x))
        </p>
        <input type="text" style="width: 60px;">
        <br>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
    </div>
</body>

</html>