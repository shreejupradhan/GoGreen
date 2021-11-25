<?php
	if (!isset($_POST['id'])) {
    	echo "Error";
	} else {
    	$servername = "localhost";
    	$username = "root";
    	$password = "";
    	$dbname = "gogreen";
	
    	// Create connection
    	$conn = new mysqli($servername, $username, $password, $dbname);
    	// Check connection
    	if ($conn->connect_error) {
        	die("Connection failed: " . $conn->connect_error);
    	} else {
        	$sql = 'SELECT * FROM tbl_products where p_id = ' . $_POST['id'] . ' LIMIT 1';
	
        	$result = mysqli_query($conn, $sql);
        	if (mysqli_num_rows($result) > 0) {
            	$i = 0;
            	while ($row = mysqli_fetch_assoc($result)) {
                	$plants[$i] = array(
                    	"p_id" => $row['p_id'],
                    	"p_name" => $row['p_name'],
                    	"p_price" => $row['p_price'],
                    	"p_image" => $row['p_image'],
                    	"p_stock" => $row['p_stock'],
                    	"p_description" => $row['p_description'],
                	);
                	$i++;
            	}
        	};
            
	?>
<!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <title>Products</title>
            <link rel="stylesheet" href="../style.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
            <script src="https://kit.fontawesome.com/d03c35338f.js" crossorigin="anonymous"></script>
        </head>

        <body>


            <div class="header">
                <div class="container">
                    <div class="navbar">
                        <div class="logo">
                            <img src="../../images/logo.png" width="130px" height="68px">
                        </div>
                        <nav>
                            <ul>
                                <li><a href="../../index.php">Home</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="aboutus.php">About</a></li>
                                <li><a href="contactus.php">Contact</a></li>
                                <li><a href="signup.php">Login/Register</a></li>
                            </ul>
                        </nav>
                        <img src="../../images/cart1.png" width="30px" height="30px">
                    </div>
                </div>
            </div>

            <div class="offer" style="margin-top:0">
                <div class="small-container">
                    <form class="row" method="POST" action="../php/single_plant.php">
                        <div class="col-2">
                            <img src="../../images/dahlia.png" class="offer-img" />
                        </div>
                        <div class="col-2">
                            <h1><?= $plants[0]['p_name']; ?></h1>
                            <h3><?= $plants[0]['p_description']; ?></h3>
                            <h3>Price : Rs.<?= $plants[0]['p_price']; ?></h3>
                            <h3>In Stock: <?= $plants[0]['p_stock']; ?> </h3>
                            <h3 style="display: inline">Quantity: </h3>
                            <form action="setCart.php" method="POST">
                                <input type="number" min="0" style="height: 30px; width: 100px; padding: 0 5px;margin-right:4px" placeholder="0">
                                <input type="hidden" name="id" id="id" value=<?= $plants[0]['p_id'] ?>>
                                <input type="submit" value="Cart + " style="height: 30px; padding: 0px 5px; color:#fff; background:#81b622; border: 0px">
                                </input>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
            <!--footer-->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col-1">
                            <ul>
                                <a href="">
                                    <h2>About us</h2>
                                </a>
                                <a href="">
                                    <h2>Our services</h2>
                                </a>
                            </ul>
                        </div>
                        <div class="footer-col-2">
                            <h3>Get help</h3>
                            <ul>
                                <li><a href="">FAQ</a></li>
                                <li><a href="">shipping</a></li>
                                <li><a href="">payment options</a></li>
                            </ul>
                        </div>
                        <div class="footer-col-3">
                            <h3>Follow Us</h3>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        </html>
        <?php }
} ?>