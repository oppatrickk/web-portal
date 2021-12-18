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
            <h3 class="page-header">HTML- Marquees</h3>
        </center>
        <ul>
            <p>An HTML marquees is a scrolling piece of text displayed either horizontally across or vertically down your webpage depending on the settings. This created by using HTML "marquees" tag.
            </p>
            <blockquote>Note - The "marquee" tag deprecated in HTMML5. Do not use this element, instead youb can use JavaScript and CSS to create such effects.
            </blockquote>
        </ul>
        <p>
            <h4>Syntax</h4>
        </p>
        <ul>
            <p>A simple syntax to use HTML "marqquee" tag is as follow-</p>
            <br />
            <script src="https://gist.github.com/MalvenGuiriba/01882ef2d20741b41f268a542741ab69.js"></script>
        </ul>
        <p>
            <h4>The "marquee" Tag Attributes</h4>
        </p>
        <ul>
            <p>
                Following is the list of impotant attributes which can be used in "marquee" tag.
            </p>
            <br />
            <table border="2" width="600" height="600">
                <th>Sr.No</th>
                <th>Attribute & Description</th>
                <tr>
                    <td>1</td>
                    <td>width<br />This specifies the width of the marquee. This can be a value like 10 or 20% etc.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>height<br />This specifies the heigth of the marquee. This can be a value like 10 or 20% etc.</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>direction<br />This specifies the direction in which marquee should scroll. This can be a value like up, down., left and right.</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>behavior<br />This specifies the type of scrolling of the marquee. This can have a value like scroll. slide, and alternate.</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>scrolldelay<br />This specifies howw long to delay between each jump. This will have a value like 10 etc..</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>scrollamount<br />This specifies the speed of the marquee text. This can have a value like 10 etc.</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>loop<br />This specifies how many time to loop. The default value is INFINITE, which means that the marquee loops endlessly.</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>bgcolor<br />This specifies background color in terms of color name or color hex value.</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>hspace<br />This specifies horizontal space around the marquee. This can be a value like 10 or 20% etc.</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>vspace<br />This specifies vertical space around the marquee. This can be a value like 10 or 20% etc.</td>
                </tr>
            </table>
            <br />
            <p>Below are few examples to ddemonstrate the usege of marquee tag.</p>
            <br />
            <p>Example - 1</p>
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/80e7e6e4a5174f5cd62a9cf855ff3d78.js"></script>
            </ul>
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <ul>
                <marquee>This is basic example of marquee</marquee>
            </ul>
            <br />
            <p>Example - 2</p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/3d7edc76da7f16522ce021f65df46acd.js"></script>
            </ul>
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <ul>
                <marquee width="505">This example will take only 50% width</marquee>
            </ul>
            <br />
            <p>Example - 3</p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/aa09d8e85956b21a8f93e9aa9aeefc84.js"></script>
            </ul>
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <ul>
                <marquee direction="right">This text will scroll from left to right</marquee>
            </ul>
            <br />
            <p>Example - 4</p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/dabc0bc28afccf5423f1a95c4784acc5.js"></script>
            </ul>
            <p>
                <h5>This will produce the following result-</h5>
            </p>
            <ul>
                <marquee direction="up">This text will scroll from bottom to up</marquee>
            </ul>
        </ul>
    </div>
</body>

</html>