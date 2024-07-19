<?php 
    include_once("function/connections.php");
    include_once("function/helper.php");

    // filling variable with value from front end that associated with POST method and element name as email and password
    $email = $_POST['email']; 
    $password = md5($_POST['password']);

    // query to pull data from db
    $login_query = mysqli_query($connections, "SELECT * FROM user WHERE email='$email' AND password='$password' AND status='on'");

    // db email and password check false conditions
    if(mysqli_num_rows($login_query) == 0){
        header("location: ".BASE_URL."index.php?page=login&notif=false");
    }
    // true conditions
    else {
        $row = mysqli_fetch_assoc($login_query);

        session_start(); 
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['level'] = $row['level'];
        
        header("location: ".BASE_URL."index.php?page=my_profile&module=pesanan&action=list");
    }
?>

