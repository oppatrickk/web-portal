<!DOCTYPE html>
<html>
    <head>
        <title>HTML Tutorials </title>
        <link rel="stylesheet" type="text/css" href="inda2.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"
 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
</script>

<!--font awesome cdn link-->
      <link rel="stylesheet"
       href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      
      <!--custom css file link-->
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <center>
        <header class="header">
            <nav class="navbar navbar-style">
                <div class="container">
                    <div class="nav-header">

                        <a href=""><img class="image"
                             src="https://miro.medium.com/max/3594/1*mgsvXxcxA6-OgsyX4tteAA.png" 
                            width= "200"></a>
                    </div>
                </div>
            </nav>
        </header>
    </center>
    <div class="container">
        <center><h3 class="page-header">HTML- Comments</h3></center>
        <ul>
            <p>Comment is a piece of code which is ignored by any web browser. It is good practice to add comments into your HTML code, especially in complex documents, to indicate
                sections of a document, and any other notes to anyone looking at the code. Comment help you and others understand your code and increases code readability.
            </p>
            <p><xmp>HTML comments are placed in between <!---....----> tags</xmp></p>
            <p><xmp>So, any content placed with-in <!------....-----> tags will be treated as comment and will be completely ignored by the browser.</xmp></p>
        </ul>
        <p><h5>Example--</h5></p>
        <br/>
        <ul>
            <script src="https://gist.github.com/MalvenGuiriba/d8db1f513c1e94962e16845146edaf9e.js"></script>
        </ul>
        <br />
        <p><h5>This will produce the following result without diplaying the content given as a part of comments--</h5></p>
        <br >
        <ul>
            <!DOCTYPE html>
                <html>
                    <head><!--- Document Header Starts ---->
                        <tittle>This is document tittle</tittle>
                    </head><!--- Document Header Ends ---->
                    <body>
                        <p>Document content goes here ......</p>
                    </body>
                </html>
            </ul>
            <br />
            <p><h4>Valid vs Invalid Comments</h4></p>
            <ul>
                <p>Comments do not nest which means c comment cannot be put a inside another comment. Second the ddouble-dash sequence "--" may not 
                    appear inside a comment except as part of the closing --> tag. You must also make sure that there are no spaces in the start-of comment string.
                </p>
            </ul>
            <br />
            <p><h5>Example--</h5></p>
            <ul>
                <p>Here, the given comment is a valid comment and will be wiped off by the browser.</p>
            </ul>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/3e31e91bc7fa646cf2fb6f7c0f1948c6.js"></script>
            </ul>
            <br />
            <p><h5>Thsi will produce the following example--</h5></p>
            <br />
            <ul>
                <!DOCTYPE html>
                <html>
                    <head>
                        <tittle>Valid Comment Example</tittle>
                    </head>
                    <body><!--This is valid comment-->
                        <p>Document content goes here ......</p>
                    </body>
                </html>
            </ul>
            <br />
            <ul>
                <p>
                    But, the following line is not a valid comment and will be displayed by the browser. This is because there is a space 
                    between the left angle bracket an dthe exclamation mark.
                </p>
            </ul>
           <br />
           <ul>
            <script src="https://gist.github.com/MalvenGuiriba/d31337153050600427c4c0259f31cc44.js"></script>
           </ul>
           <br />
            <p><h5>This will produce the following reesult--</h5></p>
            <br />
            <ul>
                <!DOCTYPE html>
                    <html>
                        <head>
                            <tittle>Invalid Comment Example</tittle>
                        </head>
                        <body>
                            < !-- This is not valid comment-->
                            <p>Document content goes here ......</p>
                        </body>
                    </html>
                </ul>
                <br />
                <p><h4>Multiline Comments</h4></p>
                <ul>
                    <p>So far we have seen single line comments, but HTML supports multi-line comments as well.</p>
                    <p>You can comment multiple lines by the sspecial beginning tag < !-- and ending tag --> placed before 
                    the first line and end of the last line as shown in the given example below.</p>
                </ul>
                <br />
                <p><h5>Example--</h5></p>
                <br />
                <ul>
                    <script src="https://gist.github.com/MalvenGuiriba/da0f443fddee627199dedd17c6514732.js"></script>
                </ul>
                <br />
                    <p><h5>This will produce the following result</h5></p>
                    <br />
                    <ul>
                        <!DOCTYPE html>
                        <html>
                            <head>
                                <tittle>Multiline Comment </tittle>
                            </head>
                            <body>
                                <!-- 
                                This is a multiline commnentand it can 
                                span through as many as lines you like.
                            -->
                                <p>Document content goes here ......</p>
                            </body>
                        </html>
                    </ul>
                    <br />
                    <p><h4>Conditional Comments</h4></p>
                    <ul>
                        <p>Conditiional comments only work in International Explorer (IE) on Windows but they are ignored by  other browser.
                            They are support from Explorer 5 onwards, and you can use them to give conditional instructions to different versions of IE.
                        </p>
                    </ul>
                        <br />
                        <p><h5>Example--</h5></p>
                        <b>
                            <xmp>
                                <!DOCTYPE html>
                                <html>
                                    <head>
                                        <tittle>Conditional Comments </tittle>
                                        <!--[if IE 6]
                                        Special instructions for IE 6 here
                                    -->
                                    </head>
                                    <body>
                                        <p>Document content goes here ......</p>
                                    </body>
                                </html>
                            </xmp>
                        </b>
                    <ul>
                        <p>You will come across a situation where you will need to apply a different style sheet based on different 
                            versions of Internet Explorer, in such situation conditional comments will be helpful.
                        </p>
                    </ul>
                    <br />
                    <p><h4>Using Comment Tag</h4></p>
                    <ul>
                        <p><xmp><comment></xmp> These are few broswer that support this tag to comment a part of HTML element.</p>
                    </ul>
                    <blockquote>
                        <p>Note - <xmp><comment> This tag deprecated in HTML5. Do not use this element</xmp></p>
                    </blockquote>
                    <p><h5>Example--</h5></p>
                    <br />
                    <ul>
                        <script src="https://gist.github.com/MalvenGuiriba/3de79eb6bcfe6d2cb90877e4b97b233d.js"></script>
                    </ul>
                    <p><h5>If you are using IE, then it will produce the following result--</h5></p>
                    <br />
                    <ul>
                        <!DOCTYPE html>
                        <html>
                            <head>
                                <tittle>Using Comment Tag</tittle>
                            </head>
                            <body>
                                <p>This is <comment>not</comment> Internet Explorer.</p>
                            </body>
                        </html>
                    </ul>
                    <br />
                    <p><h4>Commenting Script Code</h4></p>
                    <ul>
                        <p>Through you will learn JavaScript with HTML, in a seperate tutorial, but here you mudst make a note that if you are using JavaScript 
                            or VB Script in your HTML code then it is recommended to put that script code inside proper HTML  comments so that old browsers can work properly.
                        </p>
                    </ul>
                    <br />
                    <p><h5>Example--</h5></p>
                   <br />
                   <ul>
                    <script src="https://gist.github.com/MalvenGuiriba/24d1dab9e018c338e1a491e741cb80ab.js"></script>
                   </ul>
                    <p><h5>This will produce the following result--</h5></p>
                    <br />
                    <ul>
                        <!DOCTYPE html>
                            <html>
                                <head>
                                    <tittle>Commenting Script Code</tittle>

                                    <script>
                                        <!--
                                            .gitignore
                                        //-->
                                    </script>
                                </head>
                                <body>
                                    <p>Hello World!</p>
                                </body>
                            </html>
                    </ul>
                    <br />
                    <p><h4>Commenting Style Sheet</h4></p>
                    <ul>
                        <p>Though you will learn using style sheets with HTML in a separate tutorial, but here you must make a note 
                            that if you are using Cascading Style Sheet (CSS) in your HTML code then it is recommended to put that style 
                            sheet code inside proper HTML comments so that old browser can work properly.
                        </p>
                    </ul>
                    <br />
                    <p><h5>Example--</h5></p>
                    <br />
                    <ul>
                        <script src="https://gist.github.com/MalvenGuiriba/eafa35145eb84ab54f4b8f9b1a9eea31.js"></script>
                    </ul>
                    <br />
                    <p><h5>This will produce the following result--</h5></p>
                    <ul>
                        <!DOCTYPE html>
                            <html>
                            
                                <head>
                                    <tittle>Commenting Style Sheets</tittle>

                                    <style>
                                        <!--
                                            .example {
                                                border:1px solid #4a7d49;
                                            }
                                        //-->
                                    </style>
                                </head>
                                <body>
                                    <div class = "example">Hello , World!</div>
                                </body>     
                            </html>  
                    </ul>
    </div>
    </body>
</html>