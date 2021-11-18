
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



        <!---products--->
        <div class="small-container">
            <h2 class="title">Products</h2>
            <?php
            $row_size = sizeof($plants) / 4;
            $row_count = 0;
            for ($i = 0; $i < $row_size; $i++) {
                echo ' <div class="row">';
                for ($j = 0; $j < 4; $j++) {
                    echo ' <form action="single_plant.php" method="POST" class="col-4">';
                    echo '<img src="../../images/' . $plants[$row_count]['p_image'] . '"' . ' height="250px" class="card">';
                    echo "<h4>" . $plants[$row_count]['p_name'] . "</h4>";
                    echo
                    '<div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>';
                    echo "<p>Rs." . $plants[$row_count]['p_price'] . "</p>";
                    echo "<input type='hidden' name='id' value='" . $plants[$row_count]['p_id'] . "'>";
                    echo "<input type='submit' class='viewBtn' value='View'>";
                    echo "</form>";
                    $row_count++;
                }
                echo "</div>";
            }

            ?>

            <h2 class="title">New Products</h2>
            <?php
            $row_size = sizeof($popular) / 4;
            $row_count = 0;
            for ($i = 0; $i < $row_size; $i++) {
                echo ' <div class="row">';
                for ($j = 0; $j < 4; $j++) {
                    echo ' <form action="single_plant.php" method="POST" class="col-4">';
                    echo '<img src="../../images/' . $popular[$row_count]['p_image'] . '"' . ' height="250px" class="card">';
                    echo "<h4>" . $popular[$row_count]['p_name'] . "</h4>";
                    echo
                    '<div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>';
                    echo "<p>Rs." . $popular[$row_count]['p_price'] . "</p>";
                    echo "<input type='hidden' name='id' value='" . $plants[$row_count]['p_id'] . "'>";
                    echo "<input type='submit' class='viewBtn' value='View'>";
                    echo "</form>";
                    $row_count++;
                }
                echo "</div>";
            }
            ?>
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