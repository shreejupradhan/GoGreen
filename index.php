<?php ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Go Green</title>
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" />
    <script src="https://kit.fontawesome.com/d03c35338f.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" width="130px" height="68px" />
                </div>
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="assets/php/products.php">Products</a></li>
                        <li><a href="assets/php/aboutus.php">About</a></li>
                        <li><a href="assets/php/contactus.php">Contact</a></li>
                        <li><a href="assets/php/signup.php">Login/Register</a></li>
                    </ul>
                </nav>
                <img src="images/cart1.png" width="30px" height="30px" />
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Add plants to your place</h1>
                    <p>A collection of plants for your home, office and life.</p>
                    <a href="../php/assets/php/products.php" class="btn">Explore &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="../php/images/nursery.png" />
                </div>
            </div>
        </div>
    </div>

    <div class="small-container">
        <h2 class="title">Popular Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/rose.png" height="250px" />
                <h4>Rose plant</h4>
                <div class="ratings">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.10</p>
            </div>
            <div class="col-4">
                <img src="images/lily.png" height="250px" />
                <h4>Lily plant</h4>
                <div class="ratings">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.10</p>
            </div>
            <div class="col-4">
                <img src="images/hibiscus.png" height="250px" />
                <h4>Hibiscus plant</h4>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.10</p>
            </div>
            <div class="col-4">
                <img src="images/jasmine.png" height="250px" />
                <h4>Jasmine plant</h4>
                <div class="ratings">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.10</p>
            </div>
        </div>
    </div>

    <div class="offer">
        <div class="small-container">
            <form class="row" method="POST" action="../php/single_plant.php">
                <div class="col-2">
                    <img src="images/dahlia.png" class="offer-img" />
                </div>
                <div class="col-2">
                    <p>Our newest addition to the garden.</p>
                    <h1>Dahlia</h1>
                    <small>New addition to our collection.</small>
                    <br />
                    <input class="btn" type="submit" value="Buy Now &#8594"></input>
                </div>
            </form>
        </div>
    </div>

    <div class="testimonial">
        <div class="small-container">
            <h2 class="title">Hear from our clients</h2>
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        I am really happy with the plant I received from this website. The
                        plant I purchased was sunflower. It was a fresh plant. Now my
                        workspace looks really good with the sunflower beside my desk.
                    </p>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/customer5.png" />
                    <h3>Random Person1</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        I am really happy with the plant I received from this website. The
                        plant I purchased was sunflower. It was a fresh plant. Now my
                        workspace looks really good with the sunflower beside my desk.
                    </p>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/customer2.png" />
                    <h3>Random Person2</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        I am really happy with the plant I received from this website. The
                        plant I purchased was sunflower. It was a fresh plant. Now my
                        workspace looks really good with the sunflower beside my desk.
                    </p>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/customer3.png" />
                    <h3>Random Person3</h3>
                </div>
            </div>
        </div>
    </div>

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