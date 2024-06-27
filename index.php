<?php
    include_once("function/helper.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olshop (Beta)</title>

    <link href=" <?php echo BASE_URL. "css/style.css"; ?>" type="text/css" rel="stylesheet"/>
</head>

<body>
    <div id="container">
        <div id="header">
            <a href=" <?php echo BASE_URL. "index.php"; ?> ">  
                <img src=" <?php echo BASE_URL. "images/logo.png"; ?> ">
            </a>

            <div id="menu">
                <div id="user">
                    <a href=" <?php echo BASE_URL. "index.php?page=login"; ?>">Login</a>
                    <a href=" <?php echo BASE_URL. "index.php?page=register"; ?>">Register</a>
                </div>

                <a href=" <?php echo BASE_URL. "index.php?page=cart"; ?> " id="cart-button">  
                    <img src=" <?php echo BASE_URL. "images/cart.png"; ?> ">
                </a>
            </div>
        </div>

        <div id="content"></div>

        <div id="footer">Copyright @Olshop 2024</div>

    </div>
</body>
</html>