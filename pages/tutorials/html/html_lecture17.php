<!DOCTYPE html>
<html>

<head>
    <title>HTML Tutorials 2</title>
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
            <h3 class="page-header">HTML- Layouts</h3>
        </center>
        <ul>
            <p>
                A webpage layout is very important to give better look to your website. It takes considerable time to design a website's layout with great look and feel.
            </p>
            <p>
                Now-a-days, all modern websites are using CSS and JavaScript based framework to come up with responsive and dynamic websites but you can create a good layout using simple HTML tables or division tags in combination with other formatting tags. This chapter
                will give you few exampole on how to create a simple but working layout for webpage using pure HTML and it's attributes.
            </p>
            <p>
                <h4>HTML Layout - Using Tables</h4>
            </p>
            <p>
                The simplest and most popular wat of creating layouts is using HTML "table" tag. These tables are arranged in columns and rows, so you can utilize these rows and columns in whatever way you like.
            </p>
            <br />
            <p>
                <h5>Example-</h5>
            </p>
            <p>
                For example, the following HTML layout example is achieved using a table with 3 rows and 2 colums but the header and footer column spans both using the colspan attribute-
            </p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/9ceae1b4611ce4af5b0bf2efb3c4cc0b.js"></script>
            </ul>
            <br />

            <ul>
                <p>
                    <h5>This will produce the following result.</h5>
                </p>
                <!DOCTYPE html>
                <html>

                <head>
                    <title>HTMLM Layout Using Tables</title>
                </head>

                <body>
                    <table width="100%" border="0">

                        <tr>
                            <td colspan="2" bgcolor="#b5dcb3">
                                <h1>This is Web page Main tittle</h1>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td bgcolor="#aaa" width="50">
                                <b>Main Menu</b><br /> HTML
                                <br /> PHP
                                <br /> PERL...
                            </td>

                            <td bgcolor="#eee" width="100" height="200">
                                Technical and Managerial Tutorials
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" bgcolor="#b5dcb3">
                                <center>
                                    Copyright 2020 CodeX Tutorials.com
                                </center>
                            </td>
                        </tr>
                    </table>
                </body>

                </html>
            </ul>
            <br />
            <p>
                <h4>Multiple Colums Layout - Using Tables</h4>
            </p>
            <p>
                You can design webpage to put your web content in multiple pages. You can keep your content in middle column and you can use lest column to use menu and right column can be use to put advertisement or some other stuff.
            </p>
            <p>
                This layout will be very similar to what we have at our website in CodeX.Tutorials
            </p>
            <br />
            <p>
                <h5>Example</h5>
                <p>Here is an example to create three column layout-</p>
            </p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/759e2e5dfcaaab28f567d546e4b25d9c.js"></script>
            </ul>
            <br />
            <ul>
                <p>
                    <h5>Thie will produce the following result-</h5>
                </p>
                <br />
                <!DOCTYPE html>
                <html>

                <head>
                    <title>Three Column HTML Layout</title>
                </head>

                <body>
                    <table width="100%" border="0">

                        <tr valign="top">
                            <td bgcolor="#aaa" width="20%">
                                <b>Main Menu</b><br /> HTML <br /> PHP <br /> PERL...
                            </td>

                            <td bgcolor="#b5dcb3" height="200" width="60%">
                                Technical and Managerial Tutorials
                            </td>

                            <td bgcolor="#aaa" width="20%">
                                <b>Main Menu</b><br /> HTML <br /> PHP
                                <br /> PERL...
                            </td>
                        </tr>
                    </table>
                </body>

                </html>
            </ul>
            <br />
            <p>
                <h4>HTML Layouts - Using DIV, SPAN</h4>
            </p>
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/4a6ee453db066b9c8ebc81771b98838a.js"></script>
            </ul>
            <p>
                <h5>Example-</h5>
            </p>
            <p>
                Here we will to achieve ssame result using "div" tag along with CSS, whatever you have achieved using "table" tag in previous example.
            </p>
            <br />
            <script src="https://gist.github.com/MalvenGuiriba/d60669a7560f1e7cb85d343aa9b0c919.js"></script>
            <ul>
                <p>
                    <h5>This will produce the following result-</h5>
                </p>
                <!DOCTYPE html>
                <html>

                <head>
                    <title>HTML Layouts using DIV, SPAN</title>
                </head>

                <body>
                    <div style="width:100%">

                        <div style="background-color:#b5dcb3; width:100%">
                            <h1>This is Web Page Main</h1>
                        </div>
                        <div style="background-color:#aaa; height:200px; width:100px; float:left;">
                            <div><b>Main Menu</b></div>
                            HTML<br /> PHP
                            <br /> PERL...
                        </div>

                        <div style="background-color:#eee; height:200px; width:350px;float:left;">
                            <p>Technical and Managerial Tutorials</p>
                        </div>

                        <div style="background-color:#aaa; height: 200px; width: 100px; float:right;">
                            <div><b>Right Menu</b></div>
                            HTML<br /> PHP
                            <br /> PERL...
                        </div>

                        <div style="background-color:#b5dcb3; clear:both">
                            <center>
                                Copyright 2020 CodeX Tutorials
                            </center>
                        </div>
                    </div>
                </body>

                </html>
            </ul>
            <br />
            <p>You can create better layout using DIV, SPAN along with CSS. For more information on CSS, please refer to CSS Tutorial.
            </p>
            <br />
            <p>
                <h3>Full HTML video Tutorials</h3>
            </p>
            <ul>
                <video width="600" controls>
                    <source src="C:\Users\admin\Downloads\yt1s.com - HTML Tutorial for Beginners HTML Crash Course 2021.mp4" type="video/mp4">
                </video>
            </ul>
        </ul>
    </div>
</body>

</html>