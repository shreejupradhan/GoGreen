<?php include_once 'session.php' ?>
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


    <!-- cart item details -->
    <div class="smol-container cart-page">
        <table style="width:80%; margin:0px 10%; border:1px solid black; text-align:center">
            <tr style="width:100%; height:40px;">
                <th>Item</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <!-- Row2 -->
            <!-- <tr>
                <td><img src="../../images/money.png" height="60px" width=""></td>
                <td>Money Plant</td>
                <td>Rs.500</td>
                <td>5</td>
                <td>2500</td>
                <td>
                    <img src="../../images/tick.png" alt="" style="background-color: #39adf5; padding: 5px 20px; height:30px">
                    <img src="../../images/trash.png" alt="" style="background-color: #d9534f ; padding: 5px 20px; height:30px">
                </td>
            </tr>
            <!-- Row 3 -->
            <!-- <tr>
                <td><img src="../../images/cactus.png" height="60px" width=""></td>
                <td>cactus </td>
                <td>Rs.60</td>
                <td>1</td>
                <td>60</td>
                <td>
                    <img src="../../images/tick.png" alt="" style="background-color: #39adf5; padding: 5px 20px; height:30px">
                    <img src="../../images/trash.png" alt="" style="background-color: #d9534f ; padding: 5px 20px; height:30px">
                </td>
            </tr> -->
            <!-- Row 4 -->
            <!-- <tr>
                <td><img src="../../images/rose.png" height="60px" width=""></td>
                <td>Rose</td>
                <td>Rs.100</td>
                <td>4</td>
                <td>400</td>
                <td>
                    <img src="../../images/tick.png" alt="" style="background-color: #39adf5; padding: 5px 20px; height:30px">
                    <img src="../../images/trash.png" alt="" style="background-color: #d9534f ; padding: 5px 20px; height:30px">
                </td>
            </tr> -->
            <!-- Row 5 -->
            <!-- <tr>
                <td><img src="../../images/sunflower.png" height="60px" width=""></td>
                <td>Sunflower Plant</td>
                <td>Rs.10</td>
                <td>10</td>
                <td>1000</td>
                <td>
                    <img src="../../images/tick.png" alt="" style="background-color: #39adf5; padding: 5px 20px; height:30px">
                    <img src="../../images/trash.png" alt="" style="background-color: #d9534f ; padding: 5px 20px; height:30px">
                </td>
            </tr> -->
            <tbody>
                <?php $total = [];
                $i = 0; ?>
                <?php
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $index => $item) { ?>
                        <tr>
                            <td>
                                <?php
                                foreach ($products as $index => $product) {
                                    if ($product['pr_name'] == $item['name']) {
                                        $path = "../../images/product/";
                                        $source = $path . $product['pr_picture'];
                                ?>
                                        <img src="<?php echo $source ?>" style="width:35px; height=30px; border:2px solid black">
                                <?php   }
                                }
                                ?>
                            </td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['price']; ?></td>
                            <?php
                            if ($item['type'] == 'Regular') {
                                $qty = 1;
                            } elseif ($item['type'] == 'Premium') {
                                $qty = 12;
                            } else {
                                $qty = 50;
                            }
                            ?>
                            <td><?php echo $qty ?></td>
                            <?php $total[$i] = $item['price'] * $qty ?>
                            <td><?php echo $total[$i] ?></td>
                            <td>
                                <form action="../partials/_cartSessionAction.php" method="POST">
                                    <input type="hidden" name="hidden-cart-row-value" id="" value="<?php echo $i; ?>">
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                <?php $i++;
                    }
                }
                #end of loop
                ?>
                <?php
                ?>
                <tr>
                    <td></td>
                    <td colspan="4">Total</td>
                    <?php ?>
                    <td>
                        <?php
                        $total_dheba = 0;
                        if (isset($_SESSION['cart'])) {
                            $size = sizeof($_SESSION['cart']);
                            for ($i = 0; $i < $size; $i++) {
                                $total_dheba = $total[$i] + $total_dheba;
                            }
                            echo $total_dheba;
                        }

                        ?>
                    </td>
                    <td>
                        <form action="../partials/_checkout.php" method="POST">
                            <a href="checkout"><button class="btn btn-sm btn-warning">Checkout</button></a>
                        </form>
                    </td>

                </tr>

            </tbody>
            <tr style="margin-bottom: 20px ;">
                <td colspan="3">Total</td>
                <td>20</td>
                <td>3960</td>
                <td>
                    <p style="background-color:#f0ad4e; height:30px; width: 80%;padding-top:4px; color: black; margin: 0 auto; border-radius: 4px">Checkout</p>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>


        </table>
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