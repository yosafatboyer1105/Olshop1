<?php 
    include_once("../../function/connections.php"); 
    include_once("../../function/helper.php");

    $kategori = $_POST['kategori'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    // add new product categories name (works)
    if($button == "Add"){
        mysqli_query($connections, "INSERT INTO kategori (kategori, status)
        VALUES ('$kategori', '$status')");
    }

     // update existing product categories name
    else if ($button == "Update"){
        $kategori_id = $_GET['kategori_id'];

        mysqli_query($connections, "UPDATE kategori 
        SET kategori = '$kategori', status = '$status'
        WHERE kategori_id = '$kategori_id'");
    }

    // page redirect
    header("location:".BASE_URL."index/php?page=my_profile&module=kategori&action=list");
?>