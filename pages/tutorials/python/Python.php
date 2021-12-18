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
        <h2>Introduction to Python</h2>
        <p><b>Python</b> is a very popular general-purpose programming language which was created by Guido van Rossum, and released in 1991. It is open-source and you can freely use & distribute Python, even for commercial use. It is very popular for web
            development and you can build almost anything like mobile apps, web apps, tools, data analytics, machine learning etc. It is designed to be simple and easy like english language. It's much easier to read and write Python programs compared
            to other languages like C++, Java, C#. It's is highly productive and efficient which makes it a very popular programming language.</p>
        <br>
        <p>To learn more about Python, you can check this following links:</p>
        <ul>
            <li><a href="https://www.python.org/">Python Website</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Python_(programming_language)">Python (Wikipedia)</a></li>
        </ul>
        <h2>How to Get Started with Python?</h2>
        <h3>Install Python IDE</h3>>
        <p>1. Download the <a href="https://www.python.org/downloads/" class="links">latest version of Python.</a></p>
        <p>2. Run the installer file and follow the steps to install Python During the install process, check <b>Add Python to environment variables. This</b> will add Python to environment variables, and you can run Python from any part of the computer.
        </p>
        <br>
        <h3>1. Run Python in Immediate mode</h3>
        <p>You may deem to choose the path where you want to install your Python.</p>
        <img src="img/Python%20Images/python_installer.jpg">
        <br>
        <p>Once Python is installed, typing <b class="marking">python</b> in the command line will invoke the interpreter in immediate mode. We can directly type in Python code, and press Enter to get the output.</p>
        <br>
        <p>Try typing in <b class="marking">1 + 1</b> and press enter. We get <b class="marking">2</b> as the output. This prompt can be used as a calculator. To exit this mode, type <b class="marking">quit()</b> and press enter.</p>
        <img src="img/Python%20Images/python-run-command-mode.jpg">
        <br>
        <br>
        <h3>2. Run Python in the Integrated Development Environment (IDE)</h3>
        <p>We can use any text editing software to write a Python script file.</p>
        <br>
        <p>We just need to save it with the <b class="marking">.py</b> extension. But using an IDE can make our life a lot easier. IDE isa piece of software that provides useful features like code hinting, syntax highlighting and checking, file explorers,
            etc. to the programmer for application development.</p>
        <br>
        <p>By the way, when you install Python, an IDE named <b class="marking">IDLE</b> is also installed. You can use it to run Python on your computer. It's a decent IDE for beginners.</p>
        <br>
        <p>When you open IDLE, an interactive Python Shell is opened.</p>
        <img src="img/Python%20Images/idle-python.jpg">
        <br>
        <p>Now you can create a new file and save it with <b class="marking">.py</b> extension. For example, <b class="marking">hello.py</b></p>
        <br>
        <h2>Learning by Examples</h2>
        <h3>Let's start with your first Python Program</h3>
        <p>Now that you have a Python up and running, we can write our first Python program.</p>
        <br>
        <p>Let's create a very simple program called <b class="marking">Hello World</b>. A <b>"Hello, World!"</b> is a simple program that outputs <b class="marking">Hello, World!</b> on the screen. Since it's a very simple program, it's often used to introduce
            a new programming language to beginners.</p>
        <br>
        <p>Type the following code in any text editor or an IDE and save it as <b class="marking">hello_world.py</b></p>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <b>print("Hello, World!")</b>
            </div>
        </div>
        <p>Then, run the file. You will get the following output.</p>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <b>Hello, World!</b>
            </div>
        </div>
        <p>Congratulations! You just wrote your first program in Python.</p>
        <br>
        <p>As you can see, this was a pretty easy task. This is the beauty of the Python programming language.</p>
        <br>
        <h2>Learning with Python Exercise</h2>
        <p>So in this session, you will learn the basics of Python through our simple exercise for each area. Let's begin.</p>
        <br>
        <hr>
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
        <br>
        <hr>
        <h2 style="text-align:center">LECTURE 2: Comments</h2>
        <p>
            Comments can be used to explain Python code.
            <br>Comments can be used to make the code more readable.
            <br>Comments can be used to prevent execution when testing code.
        </p>
        <h3>Creating a Comment</h3>
        <p>Comments starts with a #, and Python will ignore them:</p>
        <h3>Example</h3>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black;">
                    <span style="color:green">#This is a comment.</span>
                    <br><span style="color: blue">print</span>(<span style="color:red">"Hello, World!"</span>)
                </p>
            </div>
        </div>
        <p>Comments can be placed at the end of a line, and Python will ignore the rest of the line:</p>
        <h3>Example</h3>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: black;"><span style="color: blue">print</span>(<span style="color:red">"Hello, World!"</span>) <span style="color: green;">#This is a comment</span></p>
            </div>
        </div>
        <p>A comment does not have to be text that explains the code, it can also be used to prevent Python from executing code:</p>
        <h3>Example</h3>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: green;">
                    #print("Hello, World!")
                    <br><span style="color: blue;">print</span><span style="color:black">(</span><span style="color:red">"Cheers, Mate!"</span><span style="color:black">)</span>
                </p>
            </div>
        </div>
        <hr>
        <h2>Multi Line Comments</h2>
        <p>
            Python does not really have a syntax for multi line comments.
            <br>To add a multiline comment you could insert a <b class="marking">#</b> for each line:
        </p>
        <h3>Example</h3>
        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: green;">
                    #This is a comment
                    <br>#written in
                    <br>#more than just one line
                </p>
                <p style="color: blue">print<span style="color: black">(</span><span style="color:red">"Hello, World!"</span><span style="color: black">)</span></p>
            </div>
        </div>
        <p>Or, not quite as intended, you can use a multiline string.</p>
        <p>Since Python will ignore string literals that are not assigned to a variable, you can add a multiline string (triple quotes) in your code, and place your comment inside it:</p>

        <div class="card" style="width: 30rem;">
            <div class="card-body bg-transparent text-black">
                <p style="color: red">
                    """
                    <br>This is a comment
                    <br>written in
                    <br>more than just one line
                    <br>"""
                    <br><span style="color: blue">print</span><span style="color:black">(</span><span style="color:red">"Hello, World!"</span><span style="color:black">)</span>
                </p>
            </div>
        </div>
        <p>As long as the string is not assigned to a variable, Python will read the code, but then ignore it, and you have made a multiline comment.</p>
        <hr>
        <h2 style="text-align:center">Exercise</h2>
        <hr>
        <p>Insert the Comment Tag used in Python.</p>
        <!--Correct Answer: (#)-->
        <form>
            <p><input type="text" style="width: 40px;"> This is a comment.</p>
        </form>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <br>
        <hr>
        <p>Insert a multiline string to create a multi line comment.</p>
        <!--Correct Answer: (""")-->
        <form>
            <div class="card" style="width: 15rem; height: 12rem;">
                <div class="card-body bg-transparent text-black">
                    <p><input type="text" style="width: 40px;">textarea></p>
                    <b>This is a comment<br>
                        written in<br>
                        more than just one line.
                    <p><input type="text" style="width: 40px;"></p>
                    </b>
                </div>
            </div>
        </form>
        <br>
        <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
        <br>
        <hr>
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
        <hr>
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
                    <hr>
                    <h2 style="text-align:center">LECTURE 5: Numbers</h2>
                    <h2>Python Numbers</h2>
                    <p>There are three numeric types in Python:</p>
                    <ul>
                        <li>int</li>
                        <li>float</li>
                        <li>complex</li>
                    </ul>
                    <p>Variables of numeric types are created when you assign a value to them:</p>
                    <h3>Example</h3>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black;">
                                x = <span style="color:red">1</span> <span style="color: green; margin-left: 1.8rem"># int</span>
                                <br>y = <span style="color:red">2.8</span> <span style="color: green; margin-left: 1rem"># float</span>
                                <br>z = 1j <span style="color: green; margin-left: 1.5rem"># complex</span>
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>To verify the type of any object in Python, use the <span style="color: red">type()</span> function:</p>
                    <br>
                    <h3>Example</h3>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                <span style="color: blue">print</span>(<span style="color: blue">type</span>(x))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(y))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(z))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Int</h2>
                    <p>Int, or integer, is a whole number, positive or negative, without decimals, of unlimited length.</p>
                    <h3>Example</h3>
                    <p>Integers:</p>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                x = <span style="color:red">1</span>
                                <br>y = <span style="color:red">371462178461</span>
                                <br>z = <span style="color:red">-3123675</span>
                                <br>
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(x))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(y))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(z))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Float</h2>
                    <p>Float, or "floating point number" is a number, positive or negative, containing one or more decimals.</p>
                    <h3>Example</h3>
                    <p>Floats:</p>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                x = <span style="color:red">1.10</span>
                                <br>y = <span style="color:red">1.0</span>
                                <br>z = <span style="color:red">-35.59</span>
                                <br>
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(x))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(y))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(z))
                            </p>
                        </div>
                    </div>
                    <p>Float can also be scientific numbers with an "e" to indicate the power of 10.</p>
                    <h3>Example</h3>
                    <p>Floats:</p>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                x = <span style="color:red">35e3</span>
                                <br>y = <span style="color:red">12E4</span>
                                <br>z = <span style="color:red">-87.7e100</span>
                                <br>
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(x))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(y))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(z))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Complex</h2>
                    <p>Complex numbers are written with a "j" as the imaginary part:</p>
                    <h3>Example</h3>
                    <p>Complex</p>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                x = <span style="color:red">3</span>+5j
                                <br>y = 5j
                                <br>z = -5j
                                <br>
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(x))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(y))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(z))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Type Conversion</h2>
                    <p>You can convert from one type to another with the <span style="color:red">int()</span>, <span style="color:red">float()</span>, and <span style="color:red">complex()</span> methods:</p>
                    <h3>Example</h3>
                    <p>Convert from one type to another:</p>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                x = <span style="color:red">1</span>
                                <br>y = <span style="color:red">2.8</span>
                                <br>z = 1j
                                <br>
                                <br><span style="color: green">#convert from int to float:</span>
                                <br>a = <span style="color: blue">float</span>(x)
                                <br>
                                <br><span style="color: green">#convert from float to int:</span>
                                <br>b = <span style="color: blue">int</span>(y)
                                <br>
                                <br><span style="color: green">#convert from int to complex:</span>
                                <br>c = <span style="color: blue">complex</span>(x)
                                <br>
                                <br><span style="color: blue">print</span>(a)
                                <br><span style="color: blue">print</span>(b)
                                <br><span style="color: blue">print</span>(c)
                                <br>
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(x))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(y))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">type</span>(z))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Random Number</h2>
                    <p>Python does not have a <span style="color: red">random()</span> function to make a random number, but Python has a built-in module called <span style="color: red">random</span> that can be used to make random numbers:</p>
                    <h3>Example</h3>
                    <p>Import the random module, and display a random number between 1 and 9:</p>
                    <div class="card" style="width: 20rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black;">
                                <span style="color: blue">import</span> random
                                <br><span style="color: blue">print</span>(random.randrange(<span style="color:red">1</span>,<span style="color:red"> 10</span>))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2 style="text-align:center">Exercise</h2>
                    <hr>
                    <p>Insert the correct syntax to convert x into a floating point number.</p>
                    <!--Correct Answer: (float)-->
                    <p>
                        x = 5
                        <br>x = <input type="text" style="width: 60px;">(x)
                    </p>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <p>Insert the correct syntax to convert x into a integer.</p>
                    <!--Correct Answer: (int)-->
                    <p>
                        x = 5.5
                        <br>x = <input type="text" style="width: 60px;"> (x)
                    </p>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <p>Insert the correct syntax to convert x into a complex number.</p>
                    <!--Correct Answer: (complex)-->
                    <p>
                        x = 5
                        <br>x = <input type="text" style="width: 60px;"> (x)
                    </p>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <h2 style="text-align:center">LECTURE 6: Strings</h2>
                    <p>Strings in python are surrounded by either single quotation marks, or double quotation marks.</p>
                    <p>
                        <span style="color: red">'hello'</span> is the same as <span style="color: red">"hello"</span>.
                    </p>
                    <p>You can display a string literal with the print() function:</p>
                    <h3>Example</h3>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color:black">
                                <span style="color: blue">print</span>(<span style="color: brown">"Hello"</span>)
                                <br><span style="color: blue">print</span>(<span style="color: brown">"Hello"</span>)
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Assign String to a Variable</h2>
                    <p>Assigning a string to a variable is done with the variable name followed by an equal sign and the string:</p>
                    <h3>Example</h3>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color:brown">"Hello"</span>
                                <br><span style="color:blue">print</span>(a)
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Multiline Strings</h2>
                    <p>You can assign a multiline string to a variable by using three quotes:</p>
                    <h3>Example</h3>
                    <p>You can use three double quotes:</p>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a =<span style="color: brown">"""Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua."""</span>
                                <br><span style="color:blue">print</span>(a)
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>Or three single quotes:</p>
                    <br>
                    <h3>Example</h3>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a =<span style="color: brown">'''Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.'''</span>
                                <br><span style="color:blue">print</span>(a)
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Strings are Arrays</h2>
                    <p>Like many other popular programming languages, strings in Python are arrays of bytes representing unicode characters.</p>
                    <p>However, Python does not have a character data type, a single character is simply a string with a length of 1.</p>
                    <p>Square brackets can be used to access elements of the string.</p>
                    <h3>Example</h3>
                    <p>Get the character at position 1 (remember that the first character has the position 0):</p>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color: brown">"Hello, World!"</span>
                                <br>y = <span style="color:blue">print</span>(a[<span style="color: red">1</span>])
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Looping Through a String</h2>
                    <p>Since strings are arrays, we can loop through the characters in a string, with a for loop.</p>
                    <h3>Example</h3>
                    <p>Loop through the letters in the word "banana":</p>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: blue">
                                for <span style="color:black">x</span> in <span style="color:brown">"banana"</span><span style="color:black">:</span>
                                <p style="color: blue; margin-left: 1em;">print<span style="color:black ">(x)</span></p>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>String Length</h2>
                    <p>To get the length of a string, use the <span style="color:red">len()</span> function.</p>
                    <h3>Example</h3>
                    <p>The <span style="color:red">len()</span> function returns the length of a string:</p>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color: brown">"Hello, World!"</span>
                                <br><span style="color: blue">print</span>(<span style="color:blue">len</span>(a))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Check String</h2>
                    <p>To check if a certain phrase or character is present in a string, we can use the keyword in.</p>
                    <h3>Example</h3>
                    <p>Check if "free" is present in the following text:</p>
                    <div class="card" style="width: 20rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                txt = <span style="color:brown">"The best things in life are free!"</span>
                                <br><span style="color: blue">print</span>(<span style="color:brown">"free"</span> <span style="color: blue">in</span> txt)
                            </p>
                        </div>
                    </div>
                    <p>Use it in an <span style="color: red">if</span> statement:</p>
                    <h3>Example</h3>
                    <p>Print only if "free" is present:</p>
                    <div class="card" style="width: 20rem;">
                        <div class="card-body bg-transparent text-black">
                            txt = <span style="color: brown">"The best things in life are free!"</span>
                            <br><span style="color: blue">print</span> <span style="color:brown">"free"</span> <span style="color: blue">in</span> txt:
                            <p style="color: black; margin-left: 1em;"><span style="color: blue">print</span>(<span style="color: brown">"Yes, 'free' is present."</span>)</p>
                        </div>
                    </div>
                    <hr>
                    <h2>Check if NOT</h2>
                    <p>To check if a certain phrase or character is NOT present in a string, we can use the keyword <span style="color: red">not in</span>.</p>
                    <br>
                    <h3>Example</h3>
                    <p>Check if "expensive" is NOT present in the following text:</p>
                    <div class="card" style="width: 20rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                txt = <span style="color: brown">"The best things in life are free!"</span>
                                <br><span style="color: blue">print</span>(<span style="color:brown">"expensive"</span> not <span style="color: blue">in</span> txt)
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>Use it in an <span style="color: red">if</span> statement:</p>
                    <h3>Example</h3>
                    <p>print only if "expensive" is NOT present:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            txt = <span style="color: brown">"The best things in life are free!"</span>
                            <br><span style="color: blue">if</span> <span style="color: brown">"expensive"</span> not <span style="color:blue"> in</span> txt:
                            <p style="color:black; margin-left: 1em;"><span style="color:blue">print</span>(<span style="color:brown">"No, 'expensive' is NOT present."</span>)</p>
                        </div>
                    </div>
                    <!--IMPORTANT RETURN LINE!!!-->
                    <hr>
                    <h2 style="text-align:center">Exercise</h2>
                    <hr>
                    <p>Use the <b class="marking ">len</b> method to print the length of the string.</p>
                    <!--Correct Answer: (len(x))-->
                    <p>
                        x = "Hello World "
                        <br>print(<input type="text " style="width: 60px; ">)
                    </p>
                    <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                    <hr>
                    <p>Get the first character of the string <b class="marking ">txt</b>.</p>
                    <!--Correct Answer: (txt[0])-->
                    <p>
                        txt = "Hello World "
                        <br>x = <input type="text " style="width: 60px; ">
                    </p>
                    <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                    <hr>
                    <p>Get the characters from index 2 to index 4(<b class="marking ">llo</b>)</p>
                    <!--Correct Answer: (txt[2:5])-->
                    <p>
                        txt = "Hello World "
                        <br>x = <input type="text " style="width: 100px; ">
                    </p>
                    <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                    <hr>
                    <p>Return the string without any whitespace at the beginning or the end.</p>
                    <!--Correct Answer: (txt.strip())-->
                    <p>
                        txt = " Hello World "
                        <br>x = <input type="text " style="width: 100px; ">
                    </p>
                    <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                    <hr>
                    <p>Convert the value of <b class="marking ">txt</b> to upper case.</p>
                    <!--Correct Answer: (txt.upper())-->
                    <p>
                        txt = "Hello World "
                        <br>txt = <input type="text " style="width: 100px; ">
                    </p>
                    <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                    <hr>
                    <p>Convert the value of <b class="marking ">txt</b> to lower case.</p>
                    <!--Correct Answer: (txt.lower())-->
                    <p>
                        txt = "Hello World "
                        <br>txt = <input type="text " style="width: 100px; ">
                    </p>
                    <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                    <hr>
                    <p>Replace the character <b class="marking ">H</b> with a <b class="marking ">J</b>.</p>
                    <!--Correct Answer: ((replace), "H " & "J ")-->
                    <p>
                        txt = "Hello World "
                        <br>txt = txt.<input type="text " style="width: 60px; ">(<input type="text " style="width: 30px; ">, <input type="text " style="width: 30px; ">)
                    </p>
                    <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                    <hr>
                    <p>Insert the correct syntax to add a placeholder for the age parameter.</p>
                    <!--Correct Answer: ({})-->
                    <p>
                        age = 36
                        <br>txt = "My name is John, and I am <input type="text" style="width: 30px;">"
                        <br>print(txt.format(age))
                    </p>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <h2 style="text-align:center">LECTURE 7: Booleans</h2>
                    <p>Booleans represent one of two values: <span style="color:red">True</span> or <span style="color:red">False</span>.</p>
                    <h2>Boolean Values</h2>
                    <p>
                        In programming you often need to know if an expression is <span style="color:red">True</span> or <span style="color:red">False</span>.
                        <br>You can evaluate any expression in Python, and get one of two answers, <span style="color:red">True</span> or <span style="color:red">False</span>.
                        <br>When you compare two values, the expression is evaluated and Python returns the Boolean answer:
                    </p>
                    <h3>Example</h3>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                <span style="color: blue">print</span>(<span style="color:red">10</span> > <span style="color: red">9</span>)
                                <br><span style="color: blue">print</span>(<span style="color:red">10</span> == <span style="color: red">9</span>)
                                <br><span style="color: blue">print</span>(<span style="color:red">10</span> &lt <span style="color: red">9</span>)
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>When you run a condition in an if statement, Python returns <span style="color:red">True</span> or <span style="color:red">False</span>:</p>
                    <h3>Example</h3>
                    <p>Print a message based on whether the condition is <span style="color:red">True</span> or <span style="color:red">False</span>:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color: red">200</span>
                                <br>b = <span style="color: red">33</span>
                                <br>
                                <br><span style="color:blue">if</span> b > a:
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"b is greater than a"</span>)</p>
                                <span style="color: blue">else:</span>
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"b is greater than a"</span>)
                                </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Evaluate Values and Variables</h2>
                    <p>The <span style="color:red">bool()</span> function allows you to evaluate any value, and give you <span style="color:red">True</span> or <span style="color:red">False</span> in return,</p>
                    <h3>Example</h3>
                    <p>Evaluate a string and a number:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                <span style="color: blue">print</span>(<span style="color: blue">bool</span>(<span style="color: brown">"Hello"</span>))
                                <br> <span style="color: blue">print</span>(<span style="color: blue">bool</span>(<span style="color: red">15</span>))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Most Values are True</h2>
                    <p>
                        Almost any value is evaluated to <span style="color:red">True</span> if it has some sort of content.
                        <br>Any string is <span style="color:red">True</span>, except empty strings.
                        <br>Any number is <span style="color:red">True</span>, except <span style="color:red">0</span>.
                        <br>Any list, tuple, set, and dictionary are <span style="color:red">True</span>, except empty ones.
                    </p>
                    <br>
                    <h3>Example</h3>
                    <p>The following will return True:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                <span style="color: blue">bool</span>(<span style="color: brown">"abc"</span>)
                                <br><span style="color: blue">bool</span>(<span style="color: red">123</span>)
                                <br><span style="color: blue">bool</span>[<span style="color: brown">"apple"</span>, <span style="color: brown">"cherry"</span>, <span style="color: brown">"banana"</span>]
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Some Values are False</h2>
                    <p>In fact, there are not many values that evaluate to <span style="color: red">False</span>, except empty values, such as <span style="color: red">()</span>, <span style="color: red">[]</span>, <span style="color: red">{}</span>,
                        <span style="color: red">""</span>, the number <span style="color: red">0</span>, and the value <span style="color: red">None</span>. And of course the value <span style="color: red">False</span> evaluates to <span style="color: red">False</span>.</p>
                    <h3>Example</h3>
                    <p>The following will return False:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                <span style="color: blue">bool</span>(<span style="color: blue">False</span>)
                                <br> <span style="color: blue">bool</span>(None)
                                <br> <span style="color: blue">bool</span>(<span style="color: red">0</span>)
                                <br> <span style="color: blue">bool</span>(<span style="color: brown">""</span>)
                                <br> <span style="color: blue">bool</span>(( ))
                                <br> <span style="color: blue">bool</span>([ ])
                                <br> <span style="color: blue">bool</span>({ })
                            </p>
                        </div>
                    </div>
                    <p>One more value, or object in this case, evaluates to <span style="color: red">False</span>, and that is if you have an object that is made from a class with a <span style="color: red">__len__</span> function that returns <span style="color: red">0</span>                        or <span style="color: red">False</span>:</p>
                    <h3>Example</h3>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                <span style="color: blue">class</span> myclass():
                                <br>
                                <p style="color: black; margin-left: 1em"><span style="color: blue">def</span> __len__(self):</p>
                                <p style="color: black; margin-left: 2em"><span style="color: blue">return</span> <span style="color: red">0</span></span>
                                </p>

                                myobj = myclass()
                                <br><span style="color: blue">print</span>(<span style="color: blue">bool</span>(myobj))
                            </p>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Functions can Return a Boolean</h2>
                    <p>You can create functions that returns a Boolean Value:</p>
                    <h3>Example</h3>
                    <p>Print the answer of a function:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                <span style="color: blue">def</span> myFunction() :
                                <p style="color: blue; margin-left: 1em">return True</p>

                                <span style="color: blue">print</span>(myFunction())
                            </p>
                        </div>
                    </div>
                    <p>You can execute code based on the Boolean answer of a function:</p>
                    <h3>Example</h3>
                    <p>Print "YES!" if the function returns True, otherwise print "NO!":</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                <span style="color: blue">def</span> myFunction() :
                                <p style="color: blue; margin-left: 1em">return True</p>
                                <br>
                                <span style="color: blue">if</span> myFunction() :
                                <p style="color: blue; margin-left: 1em">print<span style="color: black;">(</span><span style="color: brown">"YES!"</span><span style="color: black;">)</span></p>
                                <span style="color: blue">else</span>:
                                <p style="color: blue; margin-left: 1em">print<span style="color: black;">(</span><span style="color: brown">"NO!"</span><span style="color: black;">)</span></p>
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>Python also has many built-in functions that return a boolean value, like the <span style="color: red;">isinstance()</span> function, which can be used to determine if an object is of a certain data type:</p>
                    <h3>Example</h3>
                    <p>Check if an object is an integer or not:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                x = <span style="color: red">200</span>
                                <br><span style="color: blue">print</span>(<span style="color: blue">isinstance</span>(x, <span style="color: blue">int</span>))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2 style="text-align:center">Exercise</h2>
                    <hr>
                    <p>The statement below would print a Boolean value, which one?</p>
                    <!--Correct Answer: (True)-->
                    <p>
                        print(10 > 9)
                    </p>
                    <input type="text" style="width: 60px">
                    <br>
                    <br>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <p>The statement below would print a Boolean value, which one?</p>
                    <!--Correct Answer: (False)-->
                    <p>
                        print(10 == 9)
                    </p>
                    <input type="text" style="width: 60px">
                    <br>
                    <br>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <p>The statement below would print a Boolean value, which one?</p>
                    <!--Correct Answer: (False)-->
                    <p>
                        print(10 &lt 9)
                    </p>
                    <input type="text" style="width: 60px">
                    <br>
                    <br>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <p>The statement below would print a Boolean value, which one?</p>
                    <!--Correct Answer: (True)-->
                    <p>
                        print(bool("abc"))
                    </p>
                    <input type="text" style="width: 60px">
                    <br>
                    <br>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <p>The statement below would print a Boolean value, which one?</p>
                    <!--Correct Answer: (False)-->
                    <p>
                        print(bool(0))
                    </p>
                    <input type="text" style="width: 60px">
                    <br>
                    <br>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
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
                    <hr>
                    <h2 style="text-align:center">LECTURE 9: Sets</h2>
                    <h2>Set</h2>
                    <p>Sets are used to store multiple items in a single variable.</p>
                    <p>Set is one of 4 built-in data types in Python used to store collections of data, the other 3 are <u>List</u>, <u>Tuple</u>, and <u>Dictionary</u>, all with different qualities and usage.</p>
                    <p>A set is a collection which is <i>unordered</i>>, <i>unchangeable*</i>>, and <i>unindexed</i>.</p>
                    <br>
                    <p><b>* Note:</b> Set items are unchangeable, but you can remove items and add new items.</p>
                    <br>
                    <p>Sets are written with curly brackets.</p>
                    <h3>Example</h3>
                    <p>Create a Set:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                thisset = {<span style="color: brown">"apple"</span>, <span style="color: brown">"banana"</span>, <span style="color: brown">"cherry"</span>}
                                <br><span style="color: blue">print</span>(thisset)
                            </p>
                        </div>
                    </div>
                    <br>
                    <p><b>Note:</b> Sets are unordered, so you cannot be sure in which order the items will appear.</p>
                    <br>
                    <hr>
                    <h2>Set Items</h2>
                    <p>Set items are unordered, unchangeable, and do not allow duplicate values.</p>
                    <hr>
                    <h2>Unordered</h2>
                    <p>Unordered means that the items in a set do not have a defined order.</p>
                    <p>Set items can appear in a different order every time you use them, and cannot be referred to by index or key.</p>
                    <hr>
                    <h2>Unchangeable</h2>
                    <p>Set items are unchangeable, meaning that we cannot change the items after the set has been created.</p>
                    <br>
                    <p>Once a set is created, you cannot change its items, but you can remove items and add new items.</p>
                    <br>
                    <hr>
                    <h2>Duplicates Not Allowed</h2>
                    <p>Sets cannot have two items with the same value.</p>
                    <h3>Example</h3>
                    <p>Duplicate values will be ignored:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                thisset = {<span style="color: brown">"apple"</span>, <span style="color: brown">"banana"</span>, <span style="color: brown">"cherry"</span>, <span style="color: brown">"apple"</span>}
                                <br>
                                <br><span style="color:blue">print</span>(thisset)
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Get the Length of a Set</h2>
                    <p>To determine how many items a set has, use the <span style="color: red">len()</span> method.</p>
                    <h3>Example</h3>
                    <p>Get the number of items in a set:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                thisset = {<span style="color: brown">"apple"</span>, <span style="color: brown">"banana"</span>, <span style="color: brown">"cherry"</span>}
                                <br>
                                <br><span style="color: blue">print</span>(<span style="color: blue">len</span>(thisset))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Set Items - Data Types</h2>
                    <p>Set items can be of any data type:</p>
                    <h3>Example</h3>
                    <p>String, int and boolean data types:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                set1 = {<span style="color: brown">"apple"</span>, <span style="color: brown">"banana"</span>, <span style="color: brown">"cherry"</span>}
                                <br>set2 = {<span style="color: red">1</span>, <span style="color: red">5</span>, <span style="color: red">7</span>, <span style="color: red">9</span>, <span style="color: red">3</span>}
                                <br>set3 = {<span style="color: blue">True</span>, <span style="color: blue">False</span>, <span style="color: blue">False</span>}
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>A set can contain different data types:</p>
                    <br>
                    <h3>Example</h3>
                    <p>A set with strings, integers and boolean values:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                set1 = {<span style="color: brown">"abc"</span>, <span style="color: red">34</span>, <span style="color: blue">True</span>, <span style="color: red">40</span>, <span style="color: brown">"male"</span>}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>type( )</h2>
                    <p>From Python's perspective, sets are defined as objects with the data type 'set':</p>
                    <img src="img/Python%20Images/Lecture%20Images/set.png">
                    <h3>Example</h3>
                    <p>What is the data type of a set?</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                myset = {<span style="color: brown">"apple"</span>, <span style="color: brown">"banana"</span>, <span style="color: brown">"cherry"</span>}
                                <br><span style="color:blue">print</span>(<span style="color:blue">type</span>(myset))
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>The set( ) Constructor</h2>
                    <p>It is also possible to use the <span style="color: red">set ( )</span> constructor to make a set.</p>
                    <h3>Example</h3>
                    <p>Using the set() constructor to make a set:</p>
                    <div class="card" style="width: 35rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                thisset = ((<span style="color: brown">"apple"</span>, <span style="color: brown">"banana"</span>, <span style="color: brown">"cherry"</span>)) <span style="color: green"># note the double round-brackets</span>
                                <br><span style="color:blue">print</span>(thisset)
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Python Collections (Arrays)</h2>
                    <p>There are four collection data types in the Python programming language:</p>
                    <ul>
                        <li><u><b>List</b></u> is a collection which is ordered and changeable. Allows duplicate members.</li>
                        <li><u><b>Tuple</b></u> is a collection which is ordered and unchangeable. Allows duplicate members.</li>
                        <li><u><b>Set</b></u> is a collection which is unordered, unchangeable*, and unindexed. No duplicate members.</li>
                        <li><u><b>Dictionary</b></u> is a collection which is ordered** and changeable. No duplicate members.</li>
                    </ul>
                    <br>
                    <p>*Set items are unchangeable, but you can remove items and add new items.</p>
                    <p>**As of Python version 3.7, dictionaries are ordered. In Python 3.6 and earlier, dictionaries are unordered.</p>
                    <br>
                    <p>When choosing a collection type, it is useful to understand the properties of that type. Choosing the right type for a particular data set could mean retention of meaning, and, it could mean an increase in efficiency or security.</p>
                    <hr>
                    <h2 style="text-align:center">Exercise</h2>
                    <hr>
                    <p>Check if "apple" is present in the <b class="marking">fruits</b> set.</p>
                    <!--Correct Answer: (in)-->
                    <p>
                        fruits = {"apple", "banana", "cherry"}
                        <br>if "apple" <input type="text" style="width: 30px"> fruits:
                        <p style="text-indent: 50px;">print("Yes, apple is a fruit!")</p>
                    </p>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <p>Use the <b class="marking">add</b> to add "orange" to the <b class="marking">fruits</b> set.</p>
                    <!--Correct Answer: (fruits.add("orange"))-->
                    <p>
                        fruits = {"apple", "banana", "cherry"}
                        <br><input type="text" style="width: 150px;">
                    </p>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <p>Use the correct method to add multiple items (<b class="marking">more_fruits</b> ) to the <b class="marking">fruits</b> set.</p>
                    <!--Correct Answer: (fruits.update(more_fruits))-->
                    <p>
                        fruits = {"apple", "banana", "cherry"}
                        <br>more_fruits = ["orange", "mango", "grapes"]
                        <br><input type="text" style="width: 200px">
                    </p>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <p>Use the <b class="marking">remove</b> to remove "banana" from the <b class="marking">fruits</b> set</p>
                    <!--Correct Answer: (fruits.remove("banana"))-->
                    <p>
                        fruits = {"apple", "banana", "cherry"}
                        <br><input type="text" style="width: 170px">
                    </p>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <p>Use the <b class="marking">discard</b> method to remove "banana" from the <b class="marking">fruits</b> set.</p>
                    <!--Correct Answer: (fruits.discard("banana"))-->
                    <p>
                        fruits = {"apple", "banana", "cherry"}
                        <br><input type="text" style="width: 170px">
                    </p>
                    <input type="submit" value="Submit Answer"><input type="submit" value="Show Answer" class="button_right">
                    <hr>
                    <h2 style="text-align:center">LECTURE 10: If..else</h2>
                    <h2>Python Condtions and If statements</h2>
                    <p>Python supports the usual logical conditions from mathematics:</p>
                    <ul>
                        <li>Equals: <span style="color: red">a == b</span></li>
                        <li>Not Equals: <span style="color: red">a != b</span></li>
                        <li>Less than: <span style="color: red">a &lt b</span></li>
                        <li>Less than or equal to: <span style="color: red">a &lt= b</span></li>
                        <li>Greater than: <span style="color: red">a > b</span></li>
                        <li>Greater than or equal to: <span style="color: red">a >= b</span></li>
                    </ul>
                    <p>These conditions can be used in several ways, most commonly in "if statements" and loops.</p>
                    <p>An "if statement" is written by using the if keyword.</p>
                    <h3>Example</h3>
                    <p>If statement:</p>
                    <div class="card" style="width: 20rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color: red">33</span>
                                <br>b = <span style="color: red">200</span>
                                <br><span style="color: blue">if</span> b > a:
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"b is greater than a"</span>)</p>
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>In this example we use two variables, <span style="color: red">a</span> and <span style="color: red">b</span>, which are used as part of the if statement to test whether <span style="color: red">b</span> is greater than <span style="color: red">a</span>.
                        As <span style="color: red">a</span> is <span style="color: red">33</span>, and <span style="color: red">b</span> is <span style="color: red">200</span>, we know that 200 is greater than 33, and so we print to screen that "b is
                        greater than a".</p>
                    <hr>
                    <h2>Indentation</h2>
                    <p>Python relies on indentation (whitespace at the beginning of a line) to define scope in the code. Other programming languages often use curly-brackets for this purpose.</p>
                    <h3>Example</h3>
                    <p>If statement, without indentation (will raise an error):</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color:red">33</span>
                                <br>b = <span style="color: red">200</span>
                                <br><span style="color: blue">if</span> b > a:
                                <br><span style="color: blue">print</span>(<span style="color:brown">"b is greater than a"</span>) <span style="color:green"># you will get an error</span>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Elif</h2>
                    <p>The <span style="color:red">elif</span> keyword is pythons way of saying "if the previous conditions were not true, then try this condition".</p>
                    <h3>Example</h3>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color:red">33</span>
                                <br>b = <span style="color: red">200</span>
                                <br><span style="color: blue">if</span> b > a:
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"b is greater than a"</span>)</p>
                                <span style="color: blue">elif</span> a == b
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"a and b are equal"</span>)</p>
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>In this example <span style="color: red">a</span> is equal to <span style="color: red">b</span>, so the first condition is not true, but the <span style="color: red">elif</span> condition is true, so we print to screen that "a and
                        b are equal".</p>
                    <hr>
                    <h2>Else</h2>
                    <p>The <span style="color: red">else</span> keyword catches anything which isn't caught by the preceding conditions.</p>
                    <h3>Example</h3>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color:red">33</span>
                                <br>b = <span style="color: red">200</span>
                                <br><span style="color: blue">if</span> b > a:
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"b is greater than a"</span>)</p>
                                <span style="color: blue">elif</span> a == b
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"a and b are equal"</span>)</p>
                                <span style="color: blue">else</span>:
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"a is greater than b"</span>)</p>
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>In this example <span style="color:red">a</span> is greater than <span style="color:red">b</span>, so the first condition is not true, also the <span style="color:red">elif</span> condition is not true, so we go to the <span style="color:red">else</span>                        condition and print to screen that "a is greater than b".</p>
                    <br>
                    <p>You can also have an <span style="color:red">else</span> without the <span style="color:red">elif</span>:</p>
                    <h3>Example</h3>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color:red">200</span>
                                <br>b = <span style="color: red">33</span>
                                <br><span style="color: blue">if</span> b > a:
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"b is greater than a"</span>)</p>
                                <span style="color: blue">else</span>:
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"b is not greater than a"</span>)</p>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Short Hand If</h2>
                    <p>If you have only one statement to execute, you can put it on the same line as the if statement.</p>
                    <h3>Example</h3>
                    <p>One line if statement:</p>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                <span style="color: blue">if</span> a > b: <span style="color: blue">print</span>(<span style="color: brown">"a is greater than b"</span>)
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Short Hand If ... Else</h2>
                    <p>If you have only one statement to execute, one for if, and one for else, you can put it all on the same line:</p>
                    <h3>Example</h3>
                    <div class="card" style="width: 25rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color:red">2</span>
                                <br>b = <span style="color: red">330</span>
                                <br><span style="color: blue">print</span>(<span style="color:brown">"A"</span>) <span style="color:blue">if</span> a > b <span style="color: blue">else print</span>(<span style="color:brown">"B"</span>)
                            </p>
                        </div>
                    </div>
                    <br>
                    <p>This technique is known as <b>Ternary Operators</b>, or <b>Conditional Expressions</b>.</p>
                    <p>You can also have multiple else statements on the same line:</p>
                    <h3>Example</h3>
                    <p>One line if else statement, with 3 conditions:</p>
                    <div class="card" style="width: 30rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color:red">330</span>
                                <br>b = <span style="color: red">330</span>
                                <br><span style="color: blue">print</span>(<span style="color:brown">"A"</span>) <span style="color:blue">if</span> a > b <span style="color: blue">else print</span>(<span style="color:brown">"="</span>) <span style="color:blue">if</span>                                a == b <span style="color: blue">else print</span>(<span style="color:brown">"B"</span>)
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>And</h2>
                    <p>The <span style="color:red">and</span> keyword is a logical operator, and is used to combine conditional statements:</p>
                    <h3>Example</h3>
                    <p>Test if <span style="color:red">a</span> is greater than <span style="color:red">b</span>, AND if <span style="color:red">c</span> is greater than <span style="color:red">a</span>:</p>
                    <div class="card" style="width: 30rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color:red">330</span>
                                <br>b = <span style="color: red">330</span>
                                <br>c = <span style="color: red">500</span>
                                <br><span style="color:blue">if</span> a > b and c > a:
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"Both conditions are True"</span>)
                                </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Or</h2>
                    <p>The <span style="color: red">or</span><span style="color: red">or</span> keyword is a logical operator, and is used to combine conditional statements:</p>
                    <h3>Example</h3>
                    <p>Test if <span style="color: red">a</span> is greater than <span style="color: red">b</span>, OR if <span style="color: red">a</span> is greater than <span style="color: red">c</span>:</p>
                    <div class="card" style="width: 30rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color:red">200</span>
                                <br>b = <span style="color: red">33</span>
                                <br>c = <span style="color: red">500</span>
                                <br><span style="color:blue">if</span> a > b or a > c:
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"At least one of the conditions is True"</span>)
                                </p>
                        </div>
                    </div>
                    <hr>
                    <h2>Nested If</h2>
                    <p>You can have <span style="color: red">if</span> statements inside <span style="color: red">if</span> statements, this is called <i>nested</i> <span style="color: red">if</span> statements.</p>
                    <h3>Example</h3>
                    <div class="card" style="width: 30rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                x = <span style="color:red">41</span>
                                <br>
                                <br><span style="color: blue">if</span> x > <span style="color:red">10</span>:
                                <p style="color: black; margin-left: 1em"><span style="color: blue">print</span>(<span style="color:brown">"Above ten,"</span>)</p>
                                <p style="color: black; margin-left: 1em"><span style="color: blue">if</span> x > <span style="color: red">20</span>:</p>
                                <p style="color: black; margin-left: 2em"><span style="color: blue">print</span>(<span style="color:brown">"and also above 20!"</span>)</p>
                                <p style="color: black; margin-left: 1em"><span style="color: blue">else</span>:</p>
                                <p style="color: black; margin-left: 2em"><span style="color: blue">print</span>(<span style="color:brown">"but not above 20."</span>)</p>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2>The pass Statement</h2>
                    <p><span style="color: red">if</span> statements cannot be empty, but if you for some reason have an <span style="color: red">if</span> statement with no content, put in the <span style="color: red">pass</span> statement to avoid getting
                        an error.</p>
                    <h3>Example</h3>
                    <div class="card" style="width: 30rem;">
                        <div class="card-body bg-transparent text-black">
                            <p style="color: black">
                                a = <span style="color: red">33</span>
                                <br>b = <span style="color: red">200</span>
                                <br>
                                <p style="color: black"><span style="color: blue">print</span> b > a:</p>
                                <p style="color: blue; margin-left: 1em">pass</p>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h2 style="text-align:center">Exercise</h2>
                    <hr>
                    <p>Print " Hello World " if <b class="marking ">a</b> is greater than <b class="marking ">b</b>.</p>
                    <!--Correct Answer: (if , > & :)-->
                    <p>
                        a = 50
                        <br>b = 10
                        <br><input type="text " style="width: 30px "> a <input type="text " style="width: 30px "> b <input type="text " style="width: 30px; ">
                    </p>
                    <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                    <hr>
                    <p>Print "Hello World " if <b class="marking ">a</b> is not equal to <b class="marking ">b</b>.</p>
                    <!--Correct Answer: (if , != & :)-->
                    <p>
                        a = 50
                        <br>b = 10
                        <br><input type="text " style="width: 30px "> a <input type="text " style="width: 30px; "> b <input type="text " style="width: 30px; ">
                        <p style="text-indent: 50px; ">print("Hello World ")</p>
                    </p>
                    <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                    <hr>
                    <p>Print "Yes " if <b class="marking ">a</b> is equal to <b class="marking ">b</b>, otherwise print "No ".</p>
                    <!--Correct Answer: (if , == , : & else:)-->
                    <p>
                        a = 50
                        <br>b = 10
                        <br><input type="text " style="width: 30px "> a <input type="text " style="width: 30px "> b <input type="text " style="width: 30px; ">
                        <p style="text-indent: 50px; ">print("Yes ")</p>
                        <input type="text " style="width: 50px ">
                        <p style="text-indent: 50px; ">print("No ")</p>
                    </p>
                    <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                    <hr>
                    <p>Print "1 " if <b class="marking ">a</b> is equal to <b class="marking ">b</b>, print "2 " if <b class="marking ">a</b> is greater than <b class="marking ">b</b>, otherwise print "3 ".</p>
                    <!--Correct Answer: (if, == & : then elif, > & : then else:)-->
                    <p>
                        a = 50
                        <br>b = 10
                        <br><input type="text " style="width: 30px "> a <input type="text " style="width: 30px "> b <input type="text " style="width: 30px; ">
                        <p style="text-indent: 50px; ">print("1 ")</p>
                        <input type="text " style="width: 50px "> a <input type="text " style="width: 30px "> b <input type="text " style="width: 30px ">
                        <p style="text-indent: 50px; ">print("2 ")</p>
                        <input type="text " style="width: 50px ">
                        <p style="text-indent: 50px; ">print("3 ")
                        </p>
                        <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                        <hr>
                    </p>
                    <p>Print "Hello " if <b class="marking ">a</b> is equal to <b class="marking ">b</b>, and <b class="marking ">c</b> is equal to <b class="marking ">d</b>.</p>
                    <!--Correct Answer: (and)-->
                    <p>
                        if a == b <input type="text " style="width: 30px "> c == d:
                        <p style="text-indent: 50px; ">print("Hello ")
                        </p>
                        <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                        <hr>
                    </p>
                    <p>Print "Hello " if <b class="marking ">a</b> is equal to <b class="marking ">b</b>, or if <b class="marking ">c</b> is equal to <b class="marking ">d</b>.</p>
                    <!--Correct Answer: (or)-->
                    <p>
                        if a == b <input type="text " style="width: 30px "> c == d:
                        <p style="text-indent: 50px; ">print("Hello ")</p>
                        <input type="submit " value="Submit Answer "><input type="submit " value="Show Answer " class="button_right ">
                        <hr>
                    </p>
            </div>
</body>

</html>