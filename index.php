<?php
    session_start(); 
    include_once("function/connections.php"); 
    include_once("function/helper.php"); 
    
    // konstanta
    // variable url
    // variable page
    
    $page = isset($_GET['page']) ? $_GET['page'] : false;

    // ternary to check whether there is user id session or not
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false; 
    $level = isset($_SESSION['level']) ? $_SESSION['level'] : false; 
    $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olshop (Beta)</title>

    <link href=" <?php echo BASE_URL. "css/style.css"; ?>" type="text/css" rel="stylesheet"/>
</head>

<style>
    <?php include "css/style.css" ?>
</style>

<body>
    <div id="container">
        <div id="header">
            <a href=" <?php echo BASE_URL. "index.php"; ?> ">  
                <img src=" <?php echo BASE_URL. "images/logo.png"; ?> ">
            </a>

            <div id="menu">
                <div id="user">
                    <?php
                        // if user is logged in
                        if($user_id){
                            echo "Hello, <b>$nama</b> | 
                            <a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list'>My Profile</a> |
                            <a href='".BASE_URL."logout.php'>Logout</a>";
                        }
                        // if user is not logged in or registered yet
                        else {
                            echo "<a href='".BASE_URL."index.php?page=login'>Login</a>
                                <a href='".BASE_URL."index.php?page=register'>Register</a>";
                        }
                        ?>
                </div>

                <a href=" <?php echo BASE_URL. "index.php?page=cart"; ?> " id="cart-button">  
                    <img src=" <?php echo BASE_URL. "images/cart.png"; ?> ">
                </a>
            </div>
        </div>

        <div id="content">
            <?php
            $filename = "$page.php";

            if(file_exists($filename)) {
                include_once($filename);
            }
            else {
                echo "Null";
            }
            
            ?>
        </div>

        <div id="footer">
            <p>Copyright Olshop 2024</p>
        </div>

    </div>
</body>
</html>