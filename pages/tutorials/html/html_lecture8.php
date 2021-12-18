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
        <center><h3 class="page-header">HTML- Tables</h3></center>
        <ul>
            <p>The HTML Tables allow web authors to arrange data like text, images, links, other tables, etc. into rows and columns of cells. </p>
            <p><xmp><table> tag, in which the table is created. <tr> tag is used to create table rows and <td> is used to create data  cells. </xmp></p>
                <p>The elements under "td" are regular and left aligned by default.</p>
        </ul>
        <br />
        <p><h5>Example--</h5></p>
        <br />
        <script src="https://gist.github.com/MalvenGuiriba/60a2d52f27f160f2897d7479b6becc88.js"></script>
        <br />
        <p><h5>This will produce trhe following result--</h5></p>
        <ul>
                <!DOCTYPE html>
                <html>
                    <head>
                        <tittle>HTML Tables</tittle>
                    </head>
                    <body>
                        <table border="1">
                            <tr>
                                <td>Row 1, Column 1</td>
                                <td>Row 1, Column 2</td>
                            </tr>

                            <tr>
                                <td>Row 2, Column 1</td>
                                <td>Row 2, Column 2</td>
                            </tr>
                        </table>

                    </body>
                </html>
            </ul>
            <br />
            <ul>
                <p>Here, the border is an attribute of  "table" tag and it is used to put a border across all the cells. if you do not need a border,
                    then you can use border = "0".
                </p>
            </ul>
            <br />
            <p><h4>Table Heading</h4></p>
            <ul>
                <p><xmp><th> tag</xmp> Table Heading , This tag will be put to replace "td" tag, which is used to represent actual data cell.
                Normally you will put your top row as table heading as shown below, otherwise you can use Table Heading "td" element in any row.
            Headings, which are defined in "td" tag are centered. </p>
            </ul>
            
            <br />
            <script src="https://gist.github.com/MalvenGuiriba/9f7ffcae7facffb6b2d2e7dd645da997.js"></script>
            <br />
            <p><h5>This will produce the following result--</h5></p>
            <br />
            <ul>
                <!DOCTYPE html>
                <html>
                    <head>
                        <tittle>HTML Table Header</tittle>
                    </head>
                    <body>
                        <table border="1">
                            <tr>
                               <th>Name</th>
                               <th>Salary</th>
                            </tr>
                            <tr>
                                <td>Malven Guiriba</td>
                                <td>5000</td>
                            </tr>

                            <tr>
                                <td>Ryan Clavo</td>
                                <td>7000</td>
                            </tr>
                        </table>

                    </body>
                </html>
            </ul>
            <br />
            <p><h4>Cellpadding and Cellspacing Attributes</h4></p>
            <ul>
                <p>There are two attributes called cellpadding and cellspacing which you will see to adjust the white  space in your 
                    table cells. The cellspacing attribute defines  space between table cells, while cellpadding represents the distance between
                    cell borders and the content within a cell.
                </p>
            </ul>
            <br />
            <p><h5>Example--</h5></p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/908d5564395e78878c610024be2827cb.js"></script>
            </ul>
            <p><h5>This will produce the following result-</h5></p>
            <ul>
                <!DOCTYPE html>
                <html>
                    <head>
                        <tittle>HTML Table Cellpaddding</tittle>
                    </head>
      
                    <body>
                        <table border = "1" cellpadding = "5" cellspacing = "5">
                            <tr>
                                <th>Name</th>
                                <th>Salary</th>
                            </tr>
                            <tr>
                                  <td>Ryan Clavo</td>
                                  <td>5000</td>
                                </tr>
                                <tr>
                                    <td>Malven Guiriba</td>
                                    <td>7000</td>
                                </tr>
                            </table>
                        </body>
                        </html>
                    </ul>
                    <br />
                    <p><h4>Colspan And Rowspan Attributes</h4></p>
                    <ul>
                        <p>You will use colspan attribute if you want to merge two or more columns into a single column.
                            Similar way you will use rowspan if you want to merge two or more rows.</p>
                    </ul>
                    <br />
                    <p><h5>Example--</h5></p>
                    <br />
                    <ul>
                        <script src="https://gist.github.com/MalvenGuiriba/5c4282203cd37cbd8078cd68691a93cc.js"></script>
                    </ul>
                    <br />
                    <p><h5>This will produce the following result--</h5></p>
                    <ul>
                    <!DOCTYPE html>
                <html>
                    <head>
                        <tittle>HTML Table Colspan/Rowspan</tittle>
                    </head>
      
                    <body>
                        <table border = "1">
                            <tr>
                                <th>Column 1</th>
                                <th>Column 2</th>
                                <th>Column 3</th>
                            </tr>
                            <tr>
                                <td rowspan="2">Row 1 Cell 1</td>
                                  <td>Row 1 Cell 2</td>
                                  <td>Row 1 Cell 3</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Cell 2</td>
                                    <td>Row 2 Cell 3</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Row 3 Cell 1</td>
                                </tr>
                            </table>
                        </body>
                        </html>
                    </ul>
                    <br />
                    <p><h4>Tables Background</h4></p>
                    <ul>
                        <p>You can set background using one of the following two ways-</p>
                        <ul type = "square">
                            <li>bgcolor attribute - You can set background color for whole table or just for one cell</li>
                            <li>background attribute - You can set background image for whole table or just for one cell.</li>
                        </ul>
                        <p> You can also set border color also using bordercolor attribute.</p>
                            <blockquote>Note - The bgcolor, background, and bordercolor attributes desprcated in HTML5. Do not 
                                use these attributes.</blockquote>
                        
                    </ul>
                    <br />
                    <p><h5>Example--</h5></p>  
                    <br />
                    <ul>
                        <script src="https://gist.github.com/MalvenGuiriba/2d8352364049b89891d77939cf0769de.js"></script> 
                    </ul>
                    <br />
                    <p><h5>This will produce the following result-</h5></p>
                    <br />
                    <ul>
                        <!DOCTYPE html>
                <html>
                    <head>
                        <tittle>HTML Table Colspan/Rowspan</tittle>
                    </head>
      
                    <body>
                        <table border = "1" bordercolor = "green" backgroundcolor = "yellow">
                            <tr>
                                <th>Column 1</th>
                                <th>Column 2</th>
                                <th>Column 3</th>
                            </tr>
                            <tr>
                                <td rowspan="2">Row 1 Cell 1</td>
                                  <td>Row 1 Cell 2</td>
                                  <td>Row 1 Cell 3</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Cell 2</td>
                                    <td>Row 2 Cell 3</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Row 3 Cell 1</td>
                                </tr>
                            </table>
                        </body>
                        </html>
                    </ul>
                    <ul>
                        <p>Here is an example of using background attribute. Here we will use an image available in /images directory.</p>
                    </ul>
                    <br />
                    <center><h3 class="page-header">HTML- Lists</h3></center>
                    <ul>
                        <p>HTML offers web authors three ways for specifying lists if information. All the lists must contain one or more
                            list element. List may contain-
                            <script src="https://gist.github.com/MalvenGuiriba/eb6a002a1e440718a0686f656c79cbbb.js"></script>
                        </p>
                    </ul>
                    <br />
                    <p><h4>HTML Unordered Lists</h4></p>
                    <ul>
                        <script src="https://gist.github.com/MalvenGuiriba/b04d7c3d191e2d88132204ae1fe66e6f.js"></script>
                    </ul>
                    <br />
                    <p><h5>Example--</h5></p>
                    <br />
                    <ul>
                        <script src="https://gist.github.com/MalvenGuiriba/521f41dbfb9b5819aa79523723368686.js"></script>
                    </ul>
                    <br />
                    <p><h5>This will produce the following result-</h5></p>
                    <br />
                    <ul>
                        <!DOCTYPE html>
                        <html>
                            <head>
                                <tittle>HTML Unordered List</tittle>
                            </head>
                            <body>
                                <ul>
                                    <li>Beetroot</li>
                                    <li>Ginger</li>
                                    <li>Potato</li>
                                    <li>Radish</li>
                                </ul>
                            </body>
                        </html>
                    </ul>
                    <p><h4>The Type Attribute</h4></p>
                    <ul>
                        <p>You can use type attribute for "ul" tag to specify the type of bullet you like. By default, it is a disc. following
                            are the possible options-                        </p>
                    </ul>
                    <script src="https://gist.github.com/MalvenGuiriba/61e710f8d2d44c476830111345a0ae63.js"></script>
                    <br />
                    <p><h4>HTML Oredered Lists</h4></p>
                    <br />
                    <ul>
                        <script src="https://gist.github.com/MalvenGuiriba/94f8e1c9644c774bf5a611aeaf72f342.js"></script>
                    </ul>
                    <br />
                    <p><h5>Example--</h5></p>
                    <br />
                    <ul>
                        <script src="https://gist.github.com/MalvenGuiriba/5ab52c0c440c0e7e65c5bb79b41cb92b.js"></script>
                    </ul>
                    <br />
                    <p><h5>This will produce the following result--</h5></p>
                    <ul>
                        <!DOCTYPE html>
                        <html>
                            <head>
                                <tittle>HTML Ordered List</tittle>
                            </head>
                            <body>
                                <ol>
                                    <li>Beetroot</li>
                                    <li>Ginger</li>
                                    <li>Potato</li>
                                    <li>Radish</li>
                                </ol>
                            </body>
                        </html>
                    </ul>
                    <br />
                    <p><h4>The Type Attribute</h4></p>
                    <ul>
                        <p>You can use type attribute for "ol" tag to specify the type of numbering you like. By default, it is a number. 
                            Following are the possible options.
                        </p>
                        <p>
                            <script src="https://gist.github.com/MalvenGuiriba/3f138e4e5bc4e01e1995682a1373f583.js"></script>
                        </p>
                    </ul>
                    <br />
                    <p><h5>Example--</h5></p>
                    <p>Following is an example  of "ol type = "1"  "ol type = "I"   "ol type = "i"   "ol type = "A"   "ol type = "a"  </p>
                    <br />
                    <ul>
                        <script src="https://gist.github.com/MalvenGuiriba/3873541eacb947839c6a5b3f8de9fc85.js"></script>
                    </ul>
                    <br />
                    <p><h5>This will produce the following result--</h5></p>
                    <ul>
                        <!DOCTYPE html>
                        <html>
                            <head>
                                <tittle>HTML Ordered List</tittle>
                            </head>
                            <body>
                                <ol type="1">
                                    <li>Beetroot</li>
                                    <li>Ginger</li>
                                    <li>Potato</li>
                                    <li>Radish</li>
                                </ol>
                                <br />
                                <ol type=I>
                                    <li>Beetroot</li>
                                    <li>Ginger</li>
                                    <li>Potato</li>
                                    <li>Radish</li>
                                </ol>
                                <br />
                                <ol type="i">
                                    <li>Beetroot</li>
                                    <li>Ginger</li>
                                    <li>Potato</li>
                                    <li>Radish</li>
                                </ol>
                                <br />
                                <ol type="A">
                                    <li>Beetroot</li>
                                    <li>Ginger</li>
                                    <li>Potato</li>
                                    <li>Radish</li>
                                </ol>
                                <br />
                                <ol type="a">
                                    <li>Beetroot</li>
                                    <li>Ginger</li>
                                    <li>Potato</li>
                                    <li>Radish</li>
                                </ol>
                            </body>
                        </html>
                    </ul>
                </div>
        
    </body>
</html>