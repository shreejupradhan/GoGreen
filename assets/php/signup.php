<?php
include "../partials/_configure.php";
session_start();
if (isset($_POST['login-btn'])) {
    $email = $_POST['email'];
    $pword = $_POST['password'];
    if (empty($email)) {
        $error = "Email cannot be empty.";
    } elseif (empty($pword)) {
        $error = "Password cannot be empty.";
    } elseif (empty($email) && empty($pword)) {
        $error = "Fields cannot be empty.";
    } else {
        $error = "";
        include_once '../partials/_configure.php';
        $sql = "SELECT u_id, u_name, u_email, u_password FROM tbl_user WHERE u_email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $datas[$i] = array(
                    "id" => $row['u_id'],
                    "fullname" => $row['u_name'],
                    "email" => $row['u_email'],
                    "password" => $row['u_password'],
                );
                $i++;
            }
            $hash = password_hash($pword, PASSWORD_DEFAULT);
            if (password_verify($pword, $datas[0]['password'])) {
                $_SESSION['id'] = $datas[0]['id'];
                $_SESSION['username'] = $datas[0]['fullname'];
                mysqli_close($conn);
                header("Location:/ecommerce/assets/php/view/user.php");
            } else {
                $error = "Password Incorrect.";
            }
        } else {
            $error = "Account Doesn't Exist.";
        }
    }
} else {
    $error = "";
}
mysqli_close($conn);
?>
<?php
include "../partials/_configure.php";
session_start();
if (isset($_POST['register-btn'])) {
    if (isset($_POST['terms-checkbox'])) {
        $full_name = $_POST['full-name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $con_password = $_POST['confirm-password'];
        //name verification
        if (empty($full_name)) {
            $error1 = "Cannot Be Empty.";
        } else {
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $full_name)) {
                $error1 = "Invalid Name.";
            } else {
                $error1 = "";
            }
        }
        //email verification
        if (empty($email)) {
            $error2 = "Email is required.";
        } else {
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error2 = "Invalid email format.";
            } else {
                $error2 = "";
            }
        }
        //address verification
        $error3 = "";
        //password and con verification
        if (empty($password)) {
            $error4 = "Password required.";
        } else {
            $error4 = "";
        }
        if (empty($con_password)) {
            $error5 = "Confirm Password required.";
        } else {
            if ($password != $con_password) {
                $error4 = "Password must be same.";
                $error5 = "Confirm Password must be same.";
            } else {
                $error4 = "";
                $error5 = "";
            }
        }
        $acc_check = "";
        // password hash    $result = mysqli_query($conn, $sql_getProducts);

        if ($error1 == "" && $error2 == "" && $error3 == "" && $error4 == "" && $error5 == "") {
            $hash1 = password_hash($password, PASSWORD_DEFAULT);
            $sql = "SELECT * FROM ecommerce.tbl_user WHERE u_email = '" . $email . "'";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_fetch_assoc($result);
            if ($count > 0) {
                $acc_check = "Account Already Exists.";
            } else {
                $sql2 = "INSERT into tbl_user (u_name, u_email, u_address, u_password) VALUES ('$full_name','$email','$address','$hash1')";
                if (mysqli_query($conn, $sql2)) {
                    header('Location: login.php');
                }
            }
        }
        //if errors
        //sql
    } else {
        $error1 = "";
        $error2 = "";
        $error3 = "";
        $error4 = "";
        $error5 = "";
        $acc_check = "Please read the Terms and Condition.";
    }
} else {
    $error1 = "";
    $error2 = "";
    $error3 = "";
    $error4 = "";
    $error5 = "";
    $acc_check = "";
}
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