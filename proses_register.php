<?php 

include_once("function/connections.php");
include_once("function/helper.php");

// user roles default values
$level = "customer";
$status = "on";

// data field from front-end
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];

unset($_POST['password']);
unset($_POST['re_password']);
$dataForm = http_build_query($_POST); 

// query to get user email data from db
$email_query = mysqli_query($connections, "SELECT * FROM user WHERE email='$email'");

// empty data field value checker
if(empty ($nama_lengkap) || empty ($email) || empty ($phone) || empty ($alamat) || empty ($password) || empty ($re_password)) {
    header("location: ".BASE_URL."index.php?page=register&notif=require&$dataForm");
}

// password similarity value checker 
elseif ($password != $re_password) {
    header("location: ".BASE_URL."index.php?page=register&notif=password&$dataForm");
}

// email duplications value checker, if $var find the same email returns true 
elseif (mysqli_num_rows($email_query)) {
    header("location: ".BASE_URL."index.php?page=register&notif=email&$dataForm");
}

// normal flow of registrations
else {
    // password hashing inside db
    $password = md5($password);

    // query to insert register data from front end
    mysqli_query($connections, "INSERT INTO user (level, nama, email, alamat, phone, password, status)
    VALUES ('$level', '$nama_lengkap', '$email', '$alamat', '$phone', '$password', '$status')");

    // redirect to login page after successful registration
    header("location: ".BASE_URL."index.php?page=login");
}
?>
