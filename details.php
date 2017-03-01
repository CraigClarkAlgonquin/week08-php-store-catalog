<?php // Include data. ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Creamy Cupcakes</title>
	<link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <div class="content-box">
                    <h1>LOGO</h1>
                </div>
            </div>
            <div class="nav-bg">   
                <nav>
                    <div class="content-box">
                        <ul class="navbar clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Cupcakes</a></li>
                            <li><a href="#">Pies</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="masthead-bg">
                <div class="content-box">
                    <h1>Creamy Cupcakes</h1>
                </div>
            </div> 
        </header>
        <main>
            <div class="main-content-bg">
                <div class="content-box">
                    <?php
                    /* Start looping through the products array */
                    
                       /* Check if product id from query string matches 
                          product id from products array. */
                    
                          /* Print the parsed data in following HTML structure:
                          
                             <h2>{product name}</h2>
                             
                             <figure>
                             
                                <img src="{./path/to/image}" alt="{description of image}">
                                
                                <figcaption>
                                
                                   <ul>
                                   
                                      <li><p>{description of product}</p></li>
                                      
                                      <li><p>{product price/piece}</p></li>
                                      
                                   <ul>
                                   
                                </figcaption>
                                
                             </figure> */
                    
                       /* End if */
                    
                    /* End loop */
                    ?>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-bg">
                <div class="content-box">
                    <p>&copy; 2017 Creamy Cupcakes</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>