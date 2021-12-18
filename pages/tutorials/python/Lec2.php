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
    </div>
</body>

</html>