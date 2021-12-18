<!DOCTYPE html>
<html>

<head>
    <title>HTML Tutorials </title>
    <link rel="stylesheet" type="text/css" href="inda2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <center>
        <header class="header">
            <nav class="navbar navbar-style">
                <div class="container">
                    <div class="nav-header">

                        <a href=""><img class="image" src="https://miro.medium.com/max/3594/1*mgsvXxcxA6-OgsyX4tteAA.png" width="200"></a>
                    </div>
                </div>
            </nav>
        </header>
    </center>
    <div class="container">
        <center>
            <h3 class="page-header">HTML- Colors</h3>
        </center>
        <ul>
            <p>Colors are very important to give a good look and feel to your website. You can specify colors on page level using "body" tag or you can set colors for individual tags using bgcolor attribute.
            </p>
            <p>The "body" atg has the following attributes which can be set different colors-</p>
            <ul type="square">
                <li>bgcolor - sets color for that background of the page.</li>
                <li>text - sets color for thyat body text.</li>
                <li>alink - sets a color for active links or selected links.</li>
                <li>link - sets color gor linked text.</li>
                <li>vlink- sets a color for visited links - that is, for linked text that you have already clicked on.</li>
            </ul>
        </ul>
        <p>
            <h4>HTML Color Coding Background</h4>
        </p>
        <ul>
            <p>There are the following three differnt methods to set colors in your web page-</p>
            <ul type="square">
                <li>Color Names - You can specify color names directly like green , blue or red</li>
                <li>Hex codes - A six-digit ccoded reprersenting the amount of red, green, and blue that makes up the color.</li>
                <li>Color Decimal or Percentage Value - This value is specified using the rgb() property.</li>
            </ul>
            Now we will see these coloring schemes one by one.
        </ul>
        <p>
            <h4>HTML Colors - Color Names</h4>
        </p>
        <ul>
            <p>You can specify direct a color name to set text or background color. W3C has listed 16 basic color names that will validate with an HTML validator but there are over 200 different color names supported by major browser.
            </p>
            <blockquote> Note - Check a complete list of HTML Color Name</blockquote>
        </ul>
        <br />
        <div class="container">
            <center>
                <h3 class="page-header">HTML- Fonts</h3>
            </center>
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/7c0590be030bb4d679c3b682b287c4ee.js"></script>
                <blockquote>Note - The font and basefont tags are deprecated and it is supposed to be remoioved in a future version of HTML. So they should not be used rather, it's suggested to use CSS to manipulate your fonts. But still for learning purpose, this
                    chapter will explain font and basefont tags in detail.
                </blockquote>
            </ul>
            <br />
            <p>
                <h4>Set Font Size</h4>
            </p>
            <ul>
                <p>You can set content font size using size attribute. The range of accepted values is from 1(smallest) to 7(largest). The default size of a font is 3.
                </p>
            </ul>
            <p>
                <h5>Example-</h5>
            </p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/e2232b15eebf5524394f2a8c11feac8c.js"></script>
            </ul>
            <p>
                <h5>This will produce trhe following result-</h5>
            </p>
            <ul>
                <!DOCTYPE html>
                <html>

                <head>
                    <tittle></tittle>
                </head>

                <body>
                    <font size="1">Font size = "1"</font><br />
                    <font size="2">Font size = "2"</font><br />
                    <font size="3">Font size = "3"</font><br />
                    <font size="4">Font size = "4"</font><br />
                    <font size="5">Font size = "5"</font><br />
                    <font size="6">Font size = "6"</font><br />
                    <font size="7">Font size = "7"</font>
                </body>

                </html>
            </ul>
            <br />
            <p>
                <h4>Relative Font Size</h4>
            </p>
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/36a8d5141a2e36978b0223d0095f8a42.js"></script>
            </ul>
            <br />
            <p>
                <h5>Example-</h5>
            </p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/0001eadcee0bf4147930bc954fe0d6aa.js"></script>
            </ul>
            <br />
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <ul>
                <!DOCTYPE html>
                <html>

                <head>
                    <tittle>Relative Font Size</tittle>
                </head>

                <body>
                    <font size="-1">Font size = "-1"</font><br />
                    <font size="+1">Font size = "+1"</font><br />
                    <font size="+2">Font size = "+2"</font><br />
                    <font size="+3">Font size = "+3"</font><br />
                    <font size="+4">Font size = "+4"</font>
                </body>

                </html>
            </ul>
            <br />
            <p>
                <h4>Setting Font Face</h4>
            </p>
            <ul>
                <p>You can set font face using face attribute but aware that if the user viewing the page doesn't have the font installed, they will not be able to see it. Instead user will see the default font face applicable to the user's computer.
                </p>
            </ul>
            <p>
                <h5>Example-</h5>
            </p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/8029231fa9cd39807248490e4e2db004.js"></script>
            </ul>
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <ul>
                <!DOCTYPE html>
                <html>

                <head>
                    <tittle></tittle>
                </head>

                <body>
                    <font face="Times New Roman" size="5">Times New Roman</font><br />
                    <font face="Verdana" size="5">Verdana</font><br />
                    <font face="Comic sans MS" size="5">Comic sans MS</font><br />
                    <font face="WildWest" size="5">WildWest</font><br />
                    <font face="Bedrock" size="5">Bedrock</font><br />
                </body>

                </html>
            </ul>
            <br />
            <p>
                <h4>Specify alternate font faces</h4>
            </p>
            <ul>
                <p>A visitor will only be able to see your font if they have that font installed on their computer. So, it is possible to specify two or more font face alternatives by listing the font face names, separated by a comma.
                </p>
                <script src="https://gist.github.com/MalvenGuiriba/fcf445959ed94a55ad47cf6561d05cfe.js"></script>
                <p>When your page is loaded, their browser will dissplay the first font face available. If none of the given fonts are installed then it will display the default font face times New Roman.
                </p>
                <blockquote>Note - Check a complete list of HTML Standard Fonts.</blockquote>
            </ul>
            <p>
                <h4>Setting Font Color</h4>
            </p>
            <ul>
                <p>You can set any font color you like using color attribute. You can specify the color that you want by either the name or hexadecimal code for that color.
                </p>
                <blockquote>Note - You can check the complete list of HTML Color Name with Codes.</blockquote>
            </ul>
            <p>
                <h5>Example-</h5>
            </p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/a9fad99db6cc8632cf0ca86715a10d1f.js"></script>
            </ul>
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <ul>
                <!DOCTYPE html>
                <html>

                <head>
                    <tittle></tittle>
                </head>

                <body>
                    <font color="#FF00FF">This text is in pinnk</font><br />
                    <font color="red">This color is red</font>
                </body>

                </html>
            </ul>
            <br />
            <p>
                <h4>The "basefont" Element</h4>
            </p>
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/79665f12caa603d3fd0eb1168acea0a1.js"></script>
            </ul>
            <p>
                <h5>Example-</h5>
            </p>
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/0ba3e87cc4bd5bde6f235967a99d716a.js"></script>
            </ul>
            <br />
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <ul>
                <!DOCTYPE html>
                <html>

                <head>
                    <tittle></tittle>
                </head>

                <body>
                    <basefont face="arial, verdana, sans-serif" size="2" color="ff0000">
                    <p>This is the page's default font.</p>
                    <h2>Example of the &lt;basefont&gt; Element</h2>

                    <p>
                        <font size="+2" color="darkgray">
                            This is darkgray text with two sizes larger
                        </font>
                    </p>

                    <p>
                        <font face="courier" size="-1" color="#000000">
                            It is a courier font, a size smaller and black in color.
                        </font>
                    </p>
                </body>

                </html>
            </ul>
        </div>
</body>

</html>