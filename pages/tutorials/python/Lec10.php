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
            As <span style="color: red">a</span> is <span style="color: red">33</span>, and <span style="color: red">b</span> is <span style="color: red">200</span>, we know that 200 is greater than 33, and so we print to screen that "b is greater than
            a".</p>
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
        <p>In this example <span style="color: red">a</span> is equal to <span style="color: red">b</span>, so the first condition is not true, but the <span style="color: red">elif</span> condition is true, so we print to screen that "a and b are equal".</p>
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
        <p>In this example <span style="color:red">a</span> is greater than <span style="color:red">b</span>, so the first condition is not true, also the <span style="color:red">elif</span> condition is not true, so we go to the <span style="color:red">else</span>            condition and print to screen that "a is greater than b".</p>
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
                    <br><span style="color: blue">print</span>(<span style="color:brown">"A"</span>) <span style="color:blue">if</span> a > b <span style="color: blue">else print</span>(<span style="color:brown">"="</span>) <span style="color:blue">if</span>                    a == b <span style="color: blue">else print</span>(<span style="color:brown">"B"</span>)
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
        <p><span style="color: red">if</span> statements cannot be empty, but if you for some reason have an <span style="color: red">if</span> statement with no content, put in the <span style="color: red">pass</span> statement to avoid getting an error.</p>
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