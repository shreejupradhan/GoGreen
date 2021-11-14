<?php
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
    if (isset($_POST['send'])) {
        $sql = 'INSERT INTO tbl_enquiry (en_name, en_email, en_message) VALUES ($_POST[\'name\'], $_POST[\'email\'], $_POST[\'message\'])';
        mysqli_query($conn, $sql);
    }
    // echo "<pre>";
    // print_r($plants);
    // echo "</pre>";


?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
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


        <!-- main content for contact us -->
        <section class="contact">
            <div class="content">
                <h2 class="title">Contact Us</h2>
                <p>Leave a message if u have any queries. I certainly will not answer.</p>
            </div>
            <div class="container-contactus">
                <div class="contactInfo">
                    <div class="contact-box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>168 Sungava Marg,<br>Teku, Kathmandu,<br>122333</p>
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>ryomensukuna@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>9861520324, 9849521564</p>
                        </div>
                    </div>
                </div>
                <div class="contactform" style="border: 1px solid black; box-shadow:5px 10px">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Full Name</span>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Email</span>
                        </div>

                        <div class="inputBox">
                            <textarea required="required"></textarea>
                            <span>Type your message</span>
                        </div>

                        <div class="inputBox">
                            <input type="submit" name="" value="Send">

                        </div>
                    </form>
                </div>
            </div>
        </section>

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
<?php } ?>