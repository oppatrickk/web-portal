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
            <h3 class="page-header">HTML- Style Sheet</h3>
        </center>
        <ul>
            <p>Cascading Style Sheet (CSS) describe how documents are presented on screens, in print or perhaps how they are pronounced.W3C has actively promoted the use of style sheets on the Web since the consortium was founded in 1994.
            </p>
            <p>
                Cascading Style Sheet (CSS) provide easy and effective alternatives to specify various attributes for the HTML tags. Using CSS, you can specify a number of style properties for a given HTML element. Each ptoperty has a name and a value, separarted by
                a colon(:). Each property declaration is separated by a semi-colon (;).
            </p>
        </ul>
        <p>
            <h5>Example-</h5>
        </div>
        <ul>
            <p>First lets consider an example of HTML document whish make use of "font" tag and associated attributes to specify text color and font size.</p>
            <blockquote>Note - Thye font tag deprecated and it is supposed to be removed in a future version of HTML. So they should not be used rather, it's suggested to use CSS styles to manipulate your fonts. But still for learning purpose, this chapter will work
                with an example using font tag.
            </blockquote>
            <script src="https://gist.github.com/MalvenGuiriba/f9256c6ab7566baa29ed14d1cc5c647d.js"></script>
            <br />
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <br />
            <!DOCTYPE html>
            <html>

            <head>
                <title>
                    HTML CSS
                </title>
            </head>

            <body>
                <p style="color:green; font-size:24px;">Hello, World!</p>
            </body>

            </html>
            <br />
            <p>You can use CSS in three ways inyour HTML document-</p>
            <ul type="square">
                <li>External Style Sheet - Define style sheet rules in seperate .css file and then iclude that file in your HTML document using HTML "link" tag.
                </li>
                <li>Internal Style Sheet - Define style sheet rules header section of the HTML document using "style" tag.</li>
                <li>Inline Style Sheet - Define style sheet rules directly aling-with the HTML elements using style attribute</li>

            </ul>
            <p>Let's see all three cases one by one with the help of suitable example.</p>
            <br />
            <p>
                <h4>External Style Sheet</h4>
            </p>
            <p>
                If you need to use your style sheet to various pages, then its always recommended to define a common style sheet in a separate file. A cascading style sheet file will have extension as .css and it will be included in HTML files using "link" tag.
            </p>
            <p>
                <h5>Example-</h5>
            </p>
            <p>
                Consider we define a style sheet file style.css which has following rules.
            </p>
            <script src="https://gist.github.com/MalvenGuiriba/82a2d1230d18278e1cdb48f0d104bb88.js"></script>
            <br />
            <p>
                Here we define three CSS rules which will be applicable to three different classes for the HTML tags. I suggest you should not bother about how these rules are being defined because you will learn them while studying CSS. Now let's make use of the above
                external CSS file in our following HTMl document-
            </p>
            <br />
            <script src="https://gist.github.com/MalvenGuiriba/5ea8e6c7cf0c27fb2a2c6ee1f20b4273.js"></script>
            <br />
            <!DOCTYPE html>
            <html>

            <head>
                <title>HTML External CSS</title>
                <link rel="stylesheet" type="text/css" href="/html/style.css">
            </head>

            <body>
                <p class="red">This is red</p>
                <p class="thick">This is thick</p>
                <p class="green">This is green </p>
                <p class="thick green">This is thick and green</p>
            </body>

            </html>
            <br />
            <p>
                <h4>Inline Style Sheet</h4>
            </p>
            <p>
                You can apply style sheet rules directly to any HTMl element using style attribute of the relevant tag. This should be done only when you are interested to make a particular change in any HTML element only.
            </p>
            <p>
                Rules defined inline with the element overrides the rules defined in an external CSS file as the rules defined in "style" element.
            </p>
            <br />
            <p>
                <h5>Example-</h5>
            </p>
            <p>
                Let's re-write above example once again, but here we will write style sheet rules aling with the elements using style attribute of those elements.
            </p>
            <br />
            <script src="https://gist.github.com/MalvenGuiriba/6e71d8e94ebdc8dacfb456dc64869794.js"></script>
            <br />
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <br />
            <!DOCTYPE html>
            <html>

            <head>
                <title>HTML Inline CSS</title>
            </head>

            <body>
                <p style="color:red;">This is red</p>
                <p style="font-size:20px;">This is thick</p>
                <p style="color:green;">This is green</p>
                <p style="color:green; font-size:20px;">This is thick and green</p>
            </body>

            </html>
            <br />
            <p>
                <h4>Internal Style Sheet</h4>
            </p>
            <p>
                If you want to apply Style Sheet rules to a singlle document only, the you can include those rules in header section of the HTML document using "style" tag.
            </p>
            <p>
                Rules defined in internal style sheet overrides the rules defined in an external CSS file.
            </p>
            <br />
            <p>
                <h5>Example-</h5>
            </p>
            <p>
                Let's re-write above example once again, but here we will write style sheet rules in the same HTML document using "style" tag-
            </p>
            <script src="https://gist.github.com/MalvenGuiriba/1c6d84ab24985f2b5e66db851182a017.js"></script>
            <br />
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <br />
            <!DOCTYPE html>
            <html>

            <head>
                <title>HTML Internal CSS</title>

                <style type="text/css">
                    .red {
                        color: red;
                    }
                    
                    .thick {
                        font-size: "20px"
                    }
                    
                    .green {
                        color: green;
                    }
                </style>
            </head>

            <body>
                <p class="red">This is red</p>
                <p class="thick">This is thick</p>
                <p class="green">This is green</p>
                <p class="thick green">This is thick and green</p>
            </body>

            </html>
        </ul>
        <br />
        <div class="container">
            <center>
                <h3 class="page-header">HTML- JavaScript</h3>
            </center>
            <ul>
                <p>A script is a small piece of program that can add interactivity to your website. For example, a script could generate a pop-up alerts box message, or provide a dropdown menu. This script could be written using JavaScript or VBScript.
                </p>
                <p>
                    You can write various small functions, called event handlers using any of the scripting language and then you can trigger those functions using HTML attributes.
                </p>
                <p>Now-a-days, only JavaScript and associated frameworks being used by most of the web developers, VBScript is not even supported by various major browser.
                </p>
                <p>
                    You can keep JavaScript code in a separate file and then include it whenever it's needed, or you can define functionality inside HTMl document itself. Let's see both the cases one by one with suitable examples.
                </p>
                <br />
                <p>
                    <h4>External JavaScript</p>
                <br />
                <p>
                    If you are going to define a functionality which will be used in variouos HTMl documents then it's better to keep that functionality in a separate JvaScript file and then include that file your HTML documents.A JavaScript file will have extension as .js
                    and it will be included in HTML files using "script" tag.
                </p>
                <p>
                    <h5>Example-</h5>
                </p>
                <p>
                    Consider we define a small function using JavaScript in script.js which has following code-
                </p>
                <script src="https://gist.github.com/MalvenGuiriba/b2c2271db27334a9bfc716adec064419.js"></script>
                <br />
                <p>
                    Now let's make use of the above external JavaScript file in our following HTML document.
                </p>
                <br />
                <script src="https://gist.github.com/MalvenGuiriba/bde76eaa5fcba18679c41ffcb04aac3d.js"></script>
                <br />
                <P>
                    <h5>This will produce the following result-</h5>
                </P>
                <br />
                <!DOCTYPE html>
                <html>

                <head>
                    <title>JavaScript External Script</title>
                    <scriipt src="/html/script.js" type="text/javascript" />
                    </script>
                </head>

                <body>
                    <input type="button" onclick="Hello();" name="ok" value="Click Me" />
                </body>

                </html>
                <br />
                <p>
                    <h4>Internal Script</h4>
                </p>
                <p>
                    You can write your script code directly into your HTMl document. Usually we keep script code in header of the document using "script" tag, otherwise there is no restriction and yoou can put your source code anywhere in the document but inside "scriipt"
                    tag.
                </p>
                <br />
                <p>
                    <h5>Example-</h5>
                </p>
                <br />
                <ul>
                    <script src="https://gist.github.com/MalvenGuiriba/fc40d4cb8fcb1bf67cc44564cb8da37c.js"></script>
                </ul>
                <p>
                    <h5>This will produce the following result, where you can try to click on the given button-</h5>
                </p>
                <ul>
                    <!DOCTYPE html>
                    <html>

                    <head>
                        <title>JavaScript Internal Script</title>
                        <base href="file:///C:/Users/admin/Documents/CODEX/HTML%201/about%20web%20page/inda16.html" />

                        <script type="text/javaScript">
                            function Hello() { alert("Hello, World"); }
                        </script>
                    </head>

                    <body>
                        <input type="button" onclick="Hello();" name="ok" value="Click Me" />
                    </body>

                    </html>
                </ul>

            </ul>

        </div>
</body>

</html>