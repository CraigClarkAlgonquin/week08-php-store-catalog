
<?php include("./includes/list-of-products.php"); ?>
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
                <div class="content-box clearfix">
                    <h2>The Product List</h2>

                    <!--

	                    COPIED FOR GRID

	                    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Responsive Image Gallery</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="grid-container">
        <ul>
            <li><img src="http://placehold.it/400/400/" alt="abstract"></li>
            <li><img src="http://placehold.it/400/400/" alt="animals"></li>
            <li><img src="http://placehold.it/400/400/" alt="business"></li>
            <li><img src="http://placehold.it/400/400/" alt="city"></li>
            <li><img src="http://placehold.it/400/400/" alt="cats"></li>
            <li><img src="http://placehold.it/400/400/" alt="food"></li>
            <li><img src="http://placehold.it/400/400/" alt="people"></li>
            <li><img src="http://placehold.it/400/400/" alt="fashion"></li>
            <li><img src="http://placehold.it/400/400/" alt="nature"></li>
            <li><img src="http://placehold.it/400/400/" alt="sports"></li>
            <li><img src="http://placehold.it/400/400/" alt="transport"></li>
            <li><img src="http://placehold.it/400/400/" alt="technics"></li>
        </ul>
    </div>
</body>
</html>

-->
                    <ul class="store">
                    <?php
/* Start looping through the products array */
// cc use a for loop

for ($i=0; $i < sizeof($products); $i += 1) { //increment through the loop

	//set variables. This isn't necessary, but will be easier to work with in the html
	$id = $products[$i]["id"];
	$image = $products[$i]["image"];
	$type =  $products[$i]["type"];
	$name = $products[$i]["name"];
	$price = $products[$i]["price"];
	$description = $products[$i]["description"];



	print "$id<br>";
	print "$image<br>";
	print "$type<br>";
	print "$name<br>";
	print "$price<br>";
	print "$description<br>";

	print "<a href=\"./details.php?id=$id\">Go to $name details</a>";

	print "<br><hr><br>";



}
/* Inside each loop iteration, you are going to print:

                          <li>

                             <figure>

                                <a href="{links to details page ... send product id to details page}">

                                   <img src="{./path/to/image}" alt="{description of image}">

                                </a>

                                <figcaption>

                                   <ul>

                                      <li>

                                         <p>
                                            <a href="{links to details page ... send product id to details page}">{product name}</a><br>
                                            price: {product-price/piece}
                                         </p>

                                      </li>

                                   <ul>

                                </figcaption>

                             </figure>

                          </li> */

/* End loop */
?>
                    </ul>
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
