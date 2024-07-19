<?php
    // register page protection, read data from sessions
    if($user_id) {
        header("location: ".BASE_URL);
    }
?>

<div id="container-user-akses">
    <form action="<?php echo BASE_URL. "proses_register.php"; ?>" method="POST">

    <?php
    // notifications in front end if data fields are empty
    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

    // auto fill field data from url values
    $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
    $email = isset($_GET['email']) ? $_GET['email'] : false;
    $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
    $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

    if($notif == "require"){
        echo "<div id='notif'>Please complete the data field below.</div>";
    } 
    else if ($notif == "password"){
        echo "<div id='notif'>Password are not similar.</div>";
    }
    else if ($notif == "email"){
        echo "<div id='notif'>Your email has been used before.</div>";
    }
    ?>

    <br>
        <div class="element-form">
            <label>Nama Lengkap</label>
            <span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" /></span>
        </div>
        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email" value="<?php echo $email; ?>" /></span>
        </div>
        <div class="element-form">
            <label>Phone</label>
            <span><input type="text" name="phone" value="<?php echo $phone; ?>" /></span>
        </div>
        <div class="element-form">
            <label>Alamat</label>
            <span><textarea name="alamat"><?php echo $alamat; ?></textarea></span>
        </div>
        <div class="element-form">
            <label>Password</label>
            <span><input type="password" name="password"/></span>
        </div>
        <div class="element-form">
            <label>Re-input password</label>
            <span><input type="password" name="re_password"/></span>
        </div>

        <div class="element-form">
            <span><input type="submit" value="Register"/></span>
        </div>
    </form>
</div>