<!DOCTYPE html>
<html>
    <head>
        <title>HTML Tutorials 2</title>
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
    <body><center>
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
       <center><h3 class="page-header">HTML- Elements</h3></center>
     
         <p><h5>An HTML elements is defined by a starting tag. if the element contains other content, it ends with a closing tag, where the element name is proceded 
     by a forward slash as shown below with few tags.</h5></p>
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
                 <th>Start Tag</th>
                 <th>Content</th>
                 <th>End Tag</th>
               </tr>
               
               <tr>
                 <td><xmp><p></xmp></td>
                 <td>This is paragraph content</td>
                 <td><xmp></p></xmp></td>
               </tr>
               <tr>
                 <td><xmp><h1></xmp></td>
                 <td>This is Heading content</td>
                 <td><xmp></h1></xmp></td>
               </tr>
               <tr>
                 <td><xmp><div></xmp></td>
                 <td>This is division content</td>
                 <td><xmp></div></xmp></td>
               </tr>
               <tr>
                <td><xmp><br /></xmp></td>
                <td></td>
              </tr>
             </table>
             </body>
             </html>
            </ul>
             <p>So here <xmp><p>....</p></xmp>is an HTML element,<xmp><h1>...</h1></xmp>  is another HTML element. There are are some HTML elements which don't need to be
             closed, such as <xmp> <img />, <hr /> and <br /></xmp>  elements. There are known as void elements.
             
             <p><br />HTML documents consists of a tree of these elements and they specify how HTML documents should be built, and what kind of content should be placed in what part of an HTML document.</p>
            </ul><br />
             
          <center><h4>HTML Tag vs. ELement</h4></center>
     
         <p> An HTML element is defined by a starting tag. If the element contains other conrtent. it ends with a closing tag.</p>
         <p>For example ,<xmp> <p></xmp>is closing tag of the same paragraph but <xmp><p> This is paragraph </p></xmp>  is a paragraph element.</p>
  
     <br />
     <p><h4>Nested HTML Elements</h4></p>
    
         <p>It is very much allowed to keep one HTML element another HTML element</p>
         <p><h5>Example:</h5></p>
        <br />
        <ul>
            <script src="https://gist.github.com/MalvenGuiriba/d0424ab35e22297cb668339a1fab03fb.js"></script>
        </ul>
         <br />
         <p><h5>This will display the following result:</h5></p>
         <br />
         <ul>
         <!DOCTYPE html>
         <html>
             <head>
                 <tittle>Nested Elements Example</tittle>
             </head>
             <body>
                 <h1>This  is <i>italic</i> heading</h1>
                 <p>This is <u>underlined</u>paragraph</p>
             </body>
         </html>          
        </ul>
     <center><h3>HTML - Attributes</h3></center>
     
         <p>We have seen few HTML, tags and their usage like heading tags <xmp><h1>, <h2>, </xmp>paragraph tag<xmp> <p></xmp>
             and the other tags. We use them so far in their simplest form, but most of the HTML tags can also have attributes,
             which are extra bits of information.</p><br />
             <p>An attributes is used to define the characteristics of an HTML element and is placed insided the element's opening 
                 tag. All attributes are made up of two parts - a name and a value. <br />
                 <li>The name is the property you want to set. For example, the paragraph element in the example carries an attributes whose name is align, which you can use to indicate the alignment on paragraph on the page. </li><br />
                <li>The value is what you want the value of the property to be set and always put within quotations. The  below example shows three possible values of allign attributed: left, center and right.
                </li><br /></p>
                <p>Attributes names and attributes values are case-insentives. However, the World Wide Web Consortium (W3C) recommends lowercase attributes/attribute valuees in their HMTL 4 recommendation.</p>
            
                <p><h5>Example:</h5></p>
                <br />
                <ul>
                    <script src="https://gist.github.com/MalvenGuiriba/37be1263e00f9cf3dd3c4e9338e14dc5.js"></script>
                </ul>
                    <br />
                <p><h5>This will display the following result:</h5></p>
                <ul>
                <!DOCTYPE html>
                    <html>
                        <head>
                            <tittle>Align Attribute Example</tittle>
                        </head>

                        <body>
                            <p align = "left">This is left aligned</p>
                            <p align = "center">This is center aligned</p>
                            <p align = "right">This is right aligned</p>  
                        </body>
                    </html> 
                </ul>
                    <br />
                   <h4>Core Attributes</h4><br />
                   <p>The four core attributes that can be used on the majority of HTML elements (although not all) are--</p>
                   <ul>
                   <li>ID</li>
                   <li>TITTLE</li>
                   <li>CLASS</li>
                   <li>STYLE</li>
                   </ul>
                   <br />
                <p><h4>The ID Attribute</h4></p>
                <p>The ID attribute of an HTML tag can be used to uniquely identify an any element within an HTML page. There are two primary reason 
                    that you might want to use an ID attribute on an element.</p>
                    <ul>
                    <p><li>IF an element carries an ID attribute as a unique identifier, it is possible to identify just that element and its content</li></p>
                    <p><li>IF you have two elements of the same name within a Web Page ( or style sheet ), you can use the ID attribute to distinguish between elements that have the same name.</li></p>
                    <p><h5>Example:</h5></p>
                </ul>
                <br />
                <ul>
                    <script src="https://gist.github.com/MalvenGuiriba/44acc80d547f6fed764f33c841f301a7.js"></script>
                </ul>
                 <br />
                <p><h4>The TITTLE Attribute</h4></p>
                <ul>
                <p>The Tittle attribute gives a suggested tittle for the element.They syntax for the Tittle attribute is similar as explained for ID attribute.</p>
                <p>The behavior of this attribute will depend upon the element that carries it, although it is often displayed as a tooltip when cursor comes over the element or while the element loading.</p>
                <p><h5>Example:</h5></p>
            </ul>
              <br/>
              <ul>
                <script src="https://gist.github.com/MalvenGuiriba/adcf3c251e6e9d75b4b4a0b593f60499.js"></script>
              </ul>
                <br />
                <ul>
                <!DOCTYPE html>
                <html>
                    <head>
                        <tittle>The Tittle Attribute Example</tittle>
                    </head>
                    <body>
                        <h3 tittle = "HELLO HTML!">Titled Heading Tag Example</h3>
                    </body>
                </html>
            </ul>
                <br />
                <p> Now try to bring your cursor over "Titled Heading Tag Example" and you will see that whatever tittle you used in your code is coming out as a tooltip of the cursor.</p><br />
               
                <p><h4>The CLASS Attribute</h4></p>
                <br />
                <ul>
                <p>The Class attribute is used to associate an element with a stylesheet, and specifies the class of element. You will learn more about the use of the class attribute when you will learn Cascading Style Sheet 
                    (CSS). So for now you can avoid it.
                </p>
                <p>The value of the attribute may also be a space-seperated list of class names. <br />For Example--</p>
            </ul>
            <script src="https://gist.github.com/MalvenGuiriba/b51635871a90f879dab9c7747db1e65c.js"></script>
            <br />
            <p><h4>The STYLE Attribute</h4></p>
            <ul>
            <p>The Style attribute allows you to specify Cascading Style Sheet (CSS) rules within the element.</p>
            <p><h5>Example</h5></p>
        </ul>
            <br />
            <ul>
                <script src="https://gist.github.com/MalvenGuiriba/3eb5e3fe22e6669f416a4c1d6fe2e301.js"></script>
            </ul>
            <br />
            <p><h5>This will display the following result--</h5></p>
            <br />
            <ul>
             <!DOCTYPE html>
                    <html>
                        <head>
                            <tittle>The Style Attribute</tittle>
                        </head>

                        <body>
                            <p style="font-family:arial; color: #FF0000;">Some Text....</p>
                        </body>
                        
                        </html>
                </ul>
                    <br />
                    <p>At this point of time, we are not learning CSS, so just let's proceed without bothering much about CSS. Here, you need to understand what are HTML 
                        attributes and how they can be used while formatting content.</p><br />

                        <p><h4>Internationalization Attributes</h4></p>
                        <ul>
                     <p>There are three Internationalization attributes, which are available for most (although not all) XHTMLM elements.</p>
                        <p><li>dir</li></p>
                        <p><li>lang</li></p>
                        <p><li>xml:lang</li></p>
                        </ul>
                        <br />
                        <p><h4>The dir Attribute</h4></p>
                        <ul>
                        <p>The dir attribute allows you to indicate to thhe browser about the direction in which the text should flow. The dir attribute can take one of two values, 
                            as you can see in the table that follows-----</p>
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
                                <th>Value</th>
                                <th>Meaning</th>
                              </tr>
                              
                              <tr>
                                <td>ltr</td>
                                <td>Left to right (the default value)</td>
                              </tr>
                              <tr>
                                <td>rtl</td>
                                <td>Right to left (for languages such as Hebrew or <br /> Arabic that are read right to left)</td>
                              </tr>
                            </table>
                            </body>
                            </html>
                        </ul>
                        <br />
                            <p><h5>Example:</h5></p>
                        <br />
                        <ul>
                            <script src="https://gist.github.com/MalvenGuiriba/c4128a2ff8bb2356f0d6d807139bb1ad.js"></script>
                        </ul>
                        <br />
                        <p>When dir attribute is used within the "html tag", it determines how txt will be presented within the entire document. 
                            When used within another tag, it controls the text's direction for just the content of that tag.</p><br />

                            <p><h4>The Language Attribute </h4></p>
                            <ul>
                            <p>The lang attribute allows you to indicate the main language used in a document, but this attribute was kept in HTML only for backwards compatibility with earlier version of 
                                HTML. This is attribute has been replaced by the xml:lang attribute in new XHTML documents.</p>
                                <p>The values of the lang attribute are ISO-639 standard two-character language codes. Check HTML Language Codes:ISO 635 for a complete list of language codes.</p>
                            </ul>
                                <p><h5>Example:</h5></p>
                               <br />
                               <ul>
                                <script src="https://gist.github.com/MalvenGuiriba/c50fe2f9bb9b5e278324fa37263c34dd.js"></script>
                               </ul>
                            <br />
                            <ul>
                            <!DOCTYPE html>
                            <html lang="en">
                               <head>
                                <tittle>English Language Page </tittle>
                               </head>
                               <body>
                                   This is using English Language
                               </body>
                            </html>
                        </ul>
                            <br />
                            <p><h4>The xml:lang Attribute</h4></p>
                            <ul>
                            <p>The xml:lang attribute is the XHTML replacement for the lang attribute. The value of the xml:lang attribute should be an ISO-639 country code as mentioned in previous section.</p></ul>
                            <br />
                            <p><h4>Generic Attributes</h4></p>
                            <ul>
                            <p>Here's a table of some other attributes that are readily usable with many of the HTML tags.</p>
                        </ul>
                            <br />
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
                                <th>Attribute</th>
                                <th>Options</th>
                                <th>Function</th>
                              </tr>
                              
                              <tr>
                                <td>align</td>
                                <td>right, left, center</td>
                                <td>Horizontally Aligns Tags</td>
                              </tr>
                              <tr>
                                <td>valign</td>
                                <td>top, middle, bottom</td>
                                <td>Vertically aligns tags within an<br /> HTML element</td>
                              </tr>
                              <tr>
                                <td>bgcolor</td>
                                <td>numeric, hexidecimal, RGB values</td>
                                <td>Place a background color behind an<br /> element</td>
                              </tr>
                               <tr>
                                <td>background</td>
                                <td>URL</td>
                                <td>Places a background image behind<br /> an element</td>
                              </tr> 
                              <tr>
                                <td>id</td>
                                <td>Usser Defined</td>
                                <td>Names an element for use with <br />Cascading Style Sheets.</td>
                              </tr> 
                              <tr>
                                <td>class</td>
                                <td>Use Defined</td>
                                <td>Classifies an element for use with <br />Cascading Style Sheets </td>
                              </tr> 
                              <tr>
                                <td>width</td>
                                <td>Numeric Value</td>
                                <td>Specifies the width of tables, images,<br /> or table cells.</td>
                              </tr>
                              <tr>
                                <td>height</td>
                                <td>Numeric Value</td>
                                <td>Specifies the height of tables, <br />images, ot table cells.</td>
                              </tr>
                              <tr>
                                <td>width</td>
                                <td>Numeric Value</td>
                                <td>Specifies the width of tables,<br /> images, ot table cells.</td>
                              </tr> 
                              <tr>
                                <td>tittle</td>
                                <td>User Defined</td>
                                <td>"Pop-up" tittle of the elements</td>
                              </tr>
                            </table>
                            </body>
                            </html>
                        </ul>
                            <br />
                            <p> We will see related examples as we will proceed to study other HTML tags. For a complete list of HTML tags and related attributes please check reference to HTML Tags List.</p>
                            <h3><center>HTML - Formatting</center></h3>
                            <br />
                                <p>If you use a word processor, you must be familiar with the ability to make text bold, italicized, or underlined; these are just three of the ten
                                     options available to indicate how text can appear in HTML and XHTML.</p>
                                     <br />
                                     <p><h4>Bold Text</h4></p>
                                     <ul>
                                         <p><xmp>Anything that apperars within <b>....</b> element is displayed in bold as shown below--</xmp></p>
                                     </ul>
                                     <p><h5>Example:</h5></p>
                                     <br />
                                     <ul>
                                        <script src="https://gist.github.com/MalvenGuiriba/c3d1926efeba4cb42721510af71450f3.js"></script>
                                        <br />
                                     </ul>
                                    <p><h4>This will display the following result----</h4></p>
                                    <br />
                                    <ul>
                                        <!DOCTYPE html>
                                     <html>
                                         <head>
                                             <tittle>Bold Text Example</tittle>
                                         </head>
                                         <body>
                                             <p>The following word is a <b>bold</b> typeface.</p>
                                         </body>
                                     </html>
                                    </ul>
                                    <br />
                                    <p><h4>Italic Text</h4></p>
                                    <ul>
                                        <p><xmp>Anything appears within <i>...</i> element is displayed in italicized as shown below--</xmp></p>
                                    </ul>
                                    <p><h5>Example--</h5></p>
                                   <br />
                                   <ul>
                                    <script src="https://gist.github.com/MalvenGuiriba/784aff184737525392d0e89e1794c232.js"></script>
                                   </ul>
                                    <br />
                                    <p><h5>This will produce the following result--</h5></p>
                                    <br />
                                    <ul>
                                        <!DOCTYPE html>
                                        <html>
                                            <head>
                                                <tittle>Italic Text Example</tittle>
                                            </head>
                                            <body>
                                                <p>The following word is an <i>italicized</i> typeface.</p>
                                            </body>
                                        </html>
                                    </ul>
                                    <br />
                                    <p><h4>Underlined Text</h4></p>
                                    <ul>
                                        <p><xmp>Anything appears within <u>...</u> element is displayed in undeerlined as shown below--</xmp></p>
                                    </ul>
                                    <p><h5>Example--</h5></p>
                                    <br />
                                    <ul>
                                        <script src="https://gist.github.com/MalvenGuiriba/d8375851e287f49ddd609fd6def691e2.js"></script>
                                    </ul>
                                    <br />
                                    <p><h5>This will produce the following result--</h5></p>
                                    <br />
                                    <ul>
                                        <!DOCTYPE html>
                                        <html>
                                            <head>
                                                <tittle>Underlined Text Example</tittle>
                                            </head>
                                            <body>
                                                <p>The following word is an <u>underlined</u> typeface.</p>
                                            </body>
                                        </html>
                                    </ul>
                                    <br />
                                    <p><h4>Strike Text</h4></p>
                                    <ul>
                                        <p>Anything that appears within <xmp><strike>...</strike> </xmp>element is displayed with strikethrough, which is a thin line through the text as shown as below--</p>
                                    </ul>
                                    <p><h5>Example--</h5></p>
                                    <br />
                                    <ul>
                                        <script src="https://gist.github.com/MalvenGuiriba/9e275da36bd685a0156cc20d780107a2.js"></script>
                                    </ul>
                                    <br />
                                    <p><h5>This will produce the following result--</h5></p>
                                    <ul>
                                        <!DOCTYPE html>
                                        <html>
                                            <head>
                                                <tittle>Strike Text Template</tittle>
                                            </head>
                                            <body>
                                                <p>The following word uses a <strike>strikethrough</strike> typeface.</p>
                                            </body>
                                        </html>
                                    </ul>
                                    <br />
                                    <p><h4>Monospaced Text</h4></p>
                                    <ul>
                                        <p>The content of a <xmp><tt>...</tt></xmp> element is written in monospaced fonr. Most of the fonts are known as variables-width 
                                            fonts because different letters are of different width (for example, the letter 'm' is wider than the letter 'i'). In a monospaced font, however, each letter has the same width.</p>
                                    </ul>
                                    <p><h5>Example--</h5></p>
                                   <br />
                                   <ul>
                                    <script src="https://gist.github.com/MalvenGuiriba/243eaba18a1af1e2539e1495de28a26c.js"></script>
                                   </ul>
                                   <br />
                                    <p><h5>This will produce the following result---</h5></p>
                                    <ul>
                                        <!DOCTYPE html>
                                        <html>
                                            <head>
                                                <tittle>Monospaced Font Example</tittle>
                                            </head>
                                            <body>
                                                <p>The following word uses a <tt>monospaced</tt> typeface.</p>
                                            </body>
                                        </html>
                                    </ul>
                                    <br />
                                    <p>These tags are commonly used with CSS to allow you to attach a style to a section of a page.</p>
                                    
                        </div>
                 </body>
                 </html>