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
    </div>
</body>

</html>