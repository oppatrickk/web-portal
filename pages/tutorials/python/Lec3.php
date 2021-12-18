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
        <h2 style="text-align:center">LECTURE 3: Variables</h2>
        <h3>Variables</h3>
        Variables are containers for storing data values.
        <hr>
        <h3>Creating Variables</h3>
        <p>
            Python has no command for declaring a variable.
            <br>A variable is created the moment you first assign a value to it.
        </p>
        <h3>Example</h3>
        <div class="card" style="width: 15rem; height: 8rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black">
                    x = <span style="color:red">5</span>
                    <br>y = <span style="color: brown">"John"</span>
                    <br><span style="color:blue">print</span>(x)
                    <br><span style="color:blue">print</span>(y)
                </p>
            </div>
        </div>
        <p>Variables do not need to be declared with any particular type, and can even change type after they have been set.</p>
        <h3>Example</h3>
        <div class="card" style="width: 18rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black">
                    x = <span style="color: red">4</span> <span style="color: green; margin-left: 2.3rem"># x is of type int</span>
                    <br>x = <span style="color: brown">"Sally"</span> <span style="color:green"># x is now of type str</span>
                    <br><span style="color: blue">print</span>(x)
                </p>
            </div>
        </div>
        <hr>
        <h2>Casting</h2>
        <p>If you want to specify the data type of a variable, this can be done with casting.</p>
        <h3>Example</h3>
        <div class="card" style="width: 18rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black">
                    x = <span style="color:blue">str</span>(<span style="color:red">3</span>) <span style="color:green; margin-left: 1.1rem;"># x will be '3'</span>
                    <br>y = <span style="color:blue">int</span>(<span style="color:red">3</span>) <span style="color:green; margin-left: 0.9rem;"># y will be 3</span>
                    <br>z = <span style="color:blue">float</span>(<span style="color:red">3</span>) <span style="color:green"># z will be 3.0</span>
                </p>
            </div>
        </div>
        <hr>
        <h2>Get the Type</h2>
        <p>You can get the data type of a variable with the <span style="color: red">type()</span> function.</p>
        <h3>Example</h3>
        <div class="card" style="width: 18rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black">
                    x = <span style="color: red">5</span>
                    <br>y = <span style="color: brown">"John"</span>
                    <br><span style="color: blue">print</span>(<span style="color:blue">type</span>(x))
                    <br><span style="color: blue">print</span>(<span style="color:blue">type</span>(y))
                </p>
            </div>
        </div>
        <hr>
        <h2>Single or Double Quotes?</h2>
        <p>String variables can be declared either by using single or double quotes:</p>
        <h3>Example</h3>
        <div class="card" style="width: 18rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black;">
                    x = <span style="color: brown">"John"</span>
                    <br><span style="color: green"># is the same as</span>
                    <br>x = <span style="color: brown">'John'</span>
                </p>
            </div>
        </div>
        <hr>
        <h2>Case-Sensitive</h2>
        <p>Variable names are case-sensitive.</p>
        <h3>Example</h3>
        <div class="card" style="width: 18rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black;">
                    a = <span style="color: red">4</span>
                    <br>A = <span style="color: brown">"Sally"</span>
                    <br><span style="color: green">#A will not overwrite a
                </p>
            </div>
        </div>
<!--IMPORTANT NOTICE RETURN TO THIS SECTION-->
        <hr>
        <h2 style="text-align:center">Exercise</h2>
        <hr>
        <p>Create a variable name <b class="marking">phoneType</b> and assign the value <b class="marking">Samsung</b> to it.</p>
        <!--Correct Answer: (phoneType) and (Samsung)-->
        <form>
            <input type="text"><b class="marking"> = </b><input type="text">
        </form>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <br>
        <hr>
        <p>Create a variable name <b class="marking">x</b> and assign a value of 10 to it.</p>
        <!--Correct Answer: (x) and (10)-->
        <form>
            <input type="text"><b class="marking"> = </b><input type="text">
        </form>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <br>
        <hr>
        <p>Show the output of the sum of <b class="marking">2 + 4</b>, using variables: <b class="marking">x</b> and <b class="marking">y</b>.</p>
        <div class="card" style="width: 15rem; height: 10rem;">
            <div class="card-body bg-transparent text-black">
                <input type="text" style="width: 40px;"> <b>=</b> <input type="text" style="width: 40px;"></p>
                <b>y = 4<br>
                    print(x <input type="text" style="width: 40px;"> y)
                </b>
            </div>
        </div>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <br>
        <hr>
        <p>Create a variable named <b class="marking">z</b>, and assign <b class="marking">x + y</b> to it, and display the output.</p>
        <!--Correct Answer: "z"-->
        <div class="card" style="width: 15rem; height: 10rem;">
            <div class="card-body bg-transparent text-black">
                x = 5
                <br> y = 10
                <br><input type="text" style="width: 20px;"> = x + y
                <br>print(<input type="text" style="width:20px;">)
            </div>
        </div>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <hr>
        <p>Remove the illegal characters in the variable name:</p>
        <!--Correct Answer: (Remove: "2" and "-")-->
        <form>
            <input type="text" style="width: 200px; height: 100px;" value="2my-first_name = John">
        </form>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <hr>
        <p>Insert the correct syntax to assign the same value to all three variables in one code line.</p>
        <!--Correct Answer: (=)-->
        <form>
            <p>x <input type="text" style="width: 20px;"> y <input type="text" style="width: 20px;"> z <input type="text" style="width: 20px;"> "Red"</p>
        </form>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <hr>
        <p>Insert the correct keyword to make the variable x belong to the global scope.</p>
        <!--Correct Answer: (global)-->
        <p>def myfunc():
            <br><input type="text" style="width: 60px;"> x
            <br>x = "fantastic"
        </p>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
    </div>
</body>
</html>