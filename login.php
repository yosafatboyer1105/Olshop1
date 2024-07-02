<div id="container-user-akses">
    <form action="<?php echo BASE_URL. "proses_login.php"; ?>" method="POST">

    <?php
    // notifikasi in fron
    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

    // auto fill field data from url values
    $email = isset($_GET['email']) ? $_GET['email'] : false;

    if($notif == "require"){
        echo "<div id='notif'>Please complete the data field below.</div>";
    } 
    else if ($notif == "login"){
        echo "<div id='notif'>Please login with your new account.</div>";
    }
    ?>

    <br>
        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email" value="<?php echo $email; ?>" /></span>
        </div>
        <div class="element-form">
            <label>Password</label>
            <span><input type="password" name="password"/></span>
        </div>

        <div class="element-form">
            <span><input type="submit" value="Login"/></span>
        </div>
    </form>
</div>