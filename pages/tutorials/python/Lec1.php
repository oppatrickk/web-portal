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
        <h2 style="text-align:center">LECTURE 1: Syntax</h2>
        <h3>Execute Python Syntax</h3>
        <p>As we learned in the previous page, Python syntax can be executed by writing directly in the Command Line:</p>
        <img src="img/Python%20Images/Lecture%20Images/print.png">
        <p>Or by creating a python file on the server, using the .py file extension, and running it in the Command Line:</p>
        <img src="img/Python%20Images/Lecture%20Images/filename.png">
        <br>
        <br>
        <hr>
        <h3>Python Indentation</h3>
        <p>Indentation refers to the spaces at the beginning of a code line.
            <p>Where in other programming languages the indentation in code is for readability only, the indentation in Python is very important.
                <p>Python uses indentation to indicate a block of code.

                </p>
            </p>
        </p>
        <br>
        <h3>Example</h3>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black;">
                    if 5 > 2:
                    <p style="margin-left: 3em; color: black;">print("Five is greater than two!")</p>
                </p>
            </div>
        </div>
        <br>
        <p>Python will give you an error if you skip the indentation:</p>
        <h3>Example</h3>
        <p>Syntax Error:</p>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black;">
                    if 5 > 2:
                    <br>print("Five is greater than two!")
                </p>
            </div>
        </div>
        <br>
        <p>The number of spaces is up to you as a programmer, but it has to be at least one.</p>
        <h3>Example</h3>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black;">
                    if 5 > 2:
                    <p style="margin-left: 1em; color: black;">print("Five is greater than two!")</p>
                    <p style="color: black;">if 5 > 2:</p>
                    <p style="margin-left: 3em; color: black">print("Five is greater than two!")</p>
                </p>
                </p>
            </div>
        </div>
        <br>
        <p>You have to use the same number of spaces in the same block of code, otherwise Python will give you an error:</p>
        <h3>Example</h3>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black;">
                    if 5 > 2:
                    <p style="margin-left: 1em; color: black">print("Five is greater than two!")</p>
                    <p style="margin-left: 3em; color: black">print("Five is greater than two!")</p>
                </p>
            </div>
        </div>
        <hr>
        <h2>Python Variables</h2>
        <p>In Python, variables are created when you assign a value to it:</p>
        <h3>Example</h3>
        <p>Variables in Python:
            <div class="card" style="width: 30rem;">
                <div class="card-body bg-transparent text-black">
                    x = 5
                    <br>y = "Hello, World!"
                </div>
            </div>
        </p>
        <p>Python has no command for declaring a variable.</p>
        <hr>
        <h2>Comments</h2>
        <p>
            Python has commenting capability for the purpose of in-code documentation.
            <br>Comments start with a #, and Python will render the rest of the line as a comment:
        </p>
        <h3>Example</h3>
        <p>Comments in Python:</p>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black;">
                    #This is a comment.
                    <br>print("Hello, World!")
                </p>
            </div>
        </div>
        <hr>
        <h2 style="text-align:center">Exercise</h2>
        <hr>
        <p>Input the missing code to output "Hello World".</p>
        <!--Correct Answer: (print)-->
        <form>
            <p><input type="text">("Hello World")</p>
            <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        </form>
        <br>
        <hr>
        <p>Insert the missing indentation into the code to make it correct:</p>
        <!--Correct Answer: (3 spaces)-->
        <form>
            <textarea id="textBox" rows="5" cols="50">

if 5 > 2:
print("Five is greater than two!")

            </textarea>
            <br>
            <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">

        </form>
    </div>
</body>

</html>