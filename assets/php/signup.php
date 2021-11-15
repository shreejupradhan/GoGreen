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


    <div class="change" style="background-color: black;">
        <div class="form-box">
            <div class="button-row">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" id="signin-btn" class="toggle-btn" onclick="signin()">SignIn</button>
                    <button type="button" id="signup-btn" class="toggle-btn" onclick="signup()">SignUp</button>
                </div>
            </div>
            <form id="signin" class="input-group">
                <input type="text" class="input-field" placeholder="username" required>
                <input type="password" class="input-field" placeholder="password" required></br></br>
                <button type="submit" class="submit-btn">Sign In</button>
            </form>

            <form id="signup" class="input-group">
                <input type="text" class="input-field" placeholder="username" required>
                <input type="email" class="input-field" placeholder="Email ID" required>
                <input type="text" class="input-field" placeholder="address" required>
                <input type="password" class="input-field" placeholder="password" required></br></br>
                <button type="submit" class="submit-btn">Sign Up</button>
            </form>
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
<script>
    let x = document.getElementById('signin');
    let y = document.getElementById('signup');
    let z = document.getElementById('btn');

    function signup() {
        x.style.left = '-400px';
        y.style.left = '50px';
        z.style.left = '110px';

    }


    function signin() {
        x.style.left = '50px';
        y.style.left = '450px';
        z.style.left = '0px';

    }
</script>

</html>