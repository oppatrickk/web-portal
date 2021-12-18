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
        <center><h3 class="page-header">HTML- Meta Tags</h3></center>
        <ul>
            <p>HTML lets you specify matadata - additional important information about a document in variety of ways. The META elements can be used to include name/values pairs describing 
                properties of HTML document, such as author, expiry date, a list of keywords, document author etc.</p>
                <p><xmp><meta></xmp> This tag is used to provide such additional information. This tag is an empty element and so does not 
                have a closing tag but it carries information within its attributes.</p>
                <p>You can include one more meta tags in your document based on what  information you want to keep in your document but in general, meta tags do not impact physical appearance of the document so from appearance point 
                    of view, it does not matter if you include them or not.</p>
                </ul>
                <br />
                    <p><h4>Adding Meta Tags to your Documents</h4></p>
                    <br />
                    <ul>
                        <p>You can add metadata to your web pages by  placing "meta tags" inside the header of the document which is represented by ---<xmp><head>and</head> tags. </xmp>
                        A meta tag can have the following attributes in addition to core attributes.</p>
                    </ul>
                    <ul>
                    <!DOCTYPE html>
             <html>
               <head>
               <style>
                 table, th, td {
                   border: 1px solid black;
                 }
               </style> 
               </head>
             <body>        

             <table>
               <tr>
                 <th>Sr.No</th>
                 <th>Attribut & Description</th>                
               </tr>
               <tr>
                 <td>1</td>
                 <td>Name<br /> Name for property. Can be anything.<br />
                Examples include, keywords, description, author, <br />revised, generator etc.</td>
               </tr>
               <tr>
                 <td>2</td>
                 <td>Content <br />
                Specifies the property's value</td> 
               </tr>
               <tr>
                 <td>3</td>
                 <td>Scheme<br />
                Specifies a scheme to interpret the property's value <br /> (as declared in the content attribute).</td>
               </tr>
               <tr>
                <td>4</td>
                <td>http-equiv<br /> 
                Used for http ressponse message headers. For example, http-equiv can <br /> be used to refresh the page or to set <br />
            a cookie. Values include content-type, expires, refreshh and set cookie.</td>
              </tr>
             </table>
             </body>
             </html>
            </ul>
            <br />
            <p><h4>Specifying Keywords</h4></p>
            <ul>
                <p><xmp><meta></xmp> You can use this tag to specify important keywords related to the document and later these keywords are used by the 
                search engines while indexing your webpage for searching purpose.</p>
            </ul>
            <br />
            <p><h5>Example--</h5></p>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/111c432df18a9f2c33991fcfbf6e705a.js"></script>
            </ul>
            <br />
            <p><h5>This will produce the following result--</h5></p>
            <br />
            <ul>
                <!DOCTYPE html>
                    <html>
                        <head>
                            <tittle>Meta Tags Example</tittle>
                            <meta name="keywords" content="HTML, Meta Tags, Metadata" />
                        </head>
                        <body>
                            <p>Hello HTML5!</p>
                        </body>
                    </html>
            </ul>
            <br />
            <p><h4>Document Description</h4></p>
            <ul>
                <p><xmp><meta></xmp> You can use this tag to give a short description about the document. This again can be used by varioous search 
                engines while indexing your webpage for searching purpose.</p>
            </ul>
            <br />
            <p><h5>Example--</h5></p>
           <br />
           <ul>
            <script src="https://gist.github.com/MalvenGuiriba/545782148ef5c44065ee30e735853ac6.js"></script>
           </ul>
           <br />
           <p><h4>Document Revision Date</h4></p>
           <ul>
               <p><xmp><meta></xmp>You can use this tag to give information about when last time the document was updated. This information
            can be used by various web browsers while refreshing your webpage.</p>
           </ul>
           <br />
           <p><h5>Example--</h5></p>
          <br />
          <ul>
            <script src="https://gist.github.com/MalvenGuiriba/df9a4068efcd143e4c3e08375b612cd8.js"></script>
          </ul>
           <br />
           <p><h4>Document Refreshing</h4></p>
           <ul>
               <p><xmp><meta></xmp> This tag can be used to specify a duration after which your web page will keep refreshing automatically.</p>
           </ul>
           <br />
           <p><h5>Example--</h5></p>
          <br />
          <ul>
            <script src="https://gist.github.com/MalvenGuiriba/7922b7cd474bb6921866c31b4ac26db3.js"></script>
          </ul>
           <br />
           <p><h4>Page Redirection</h4></p>
           <ul>
               <p><xmp><meta></xmp> You can use this tag to redirect your page to any other webpage. You can also specify a duration if you want 
            to redirect the page after a certain number of seconds.</p>
           </ul>
           <br />
           <p><h5>Example--</h5></p>
           <ul>
               <p>Following is an example of redirecting current page another page after 5 seconds. If you want to redirect page immediately then do not
                   specify content attribute.</p>
                </ul>
                 <br />
                 <ul>
                    <script src="https://gist.github.com/MalvenGuiriba/c952abf81d96abdb7da3dfa7affe695c.js"></script>
                 </ul>
           <br />
           <p><h4>Setting Cookies</h4></p>
           <ul>
               <p>Cookies are data, stored in small text files on your computer and it is exchanged between web browser and web server to keep track of various 
                   information based on your web application need.</p>
                   <p><xmp><meta></xmp> You can use this tag to store cookies on client side and later this information can be used by the Web Server to track a site 
                visitor.</p>
           </ul>
           <br />
           <p><h5>Example--</h5></p>
           <ul>
               <p>Following is an example of redirecting current page to another page after 5 seconds. If you want to redirect page immediately tehn do not 
                   specify content atttribute.</p>
                  <br />
                  <ul>
                    <script src="https://gist.github.com/MalvenGuiriba/0c782984331061f97741d957ab0f6e77.js"></script>
                  </ul>
                  <br />
                   <p>If you do not include the expiration date and time, the cookies is considered a session cookie and will be deleted when the user exist the broswer.</p>
                   <p>Note - You can use PHP and Cookies tutorial for complete detail on cookies.</p>
                </ul>
                <br />
                <p><h4>Setting Author Name</h4></p>
                <ul>
                    <p>You can set an author name in a web page  using meta tag.</p>
                    <p>Se the example below.</p>
                </ul>
                <br />
                <p><h5>Example--</h5></p>
                <br />
                <ul>
                    <script src="https://gist.github.com/MalvenGuiriba/a9cad7193269f05f3731ff46400cbf64.js"></script>
                </ul>
                <p><h4>Specify Character Set</h4></p>
                <ul>
                    <p>You can use meta tag to specify character set used within the example page.</p>
                </ul>
                <br />
                <p><h5>Example</h5></p>
                <ul>
                    <p>By default, Web servers and Web browser use ISO-8859-1 (Latin) encoding to process Web pages. The following is an example to set UTF-8 encoding--</p>
                </ul>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/7d50e9a8e7b0822fe5a9dd199971214a.js"></script>
            </ul>
                <ul>
                    <p>To  serve the static page with traditional Chinese characters, the webpage must conatain a meta tag to set Big5 encoding</p>
                </ul>
                <br />
                <ul>
                    <script src="https://gist.github.com/MalvenGuiriba/6589dc3e8e05bc4b9d45b04a341a18e2.js"></script> 
                </ul>
            </div>
        </body>
        </html>