<?php
    // login page protection, read data from sessions
    if($user_id) {
        header("location: ".BASE_URL);
    }
    ?>

<div id="container-user-akses">
    <form action="<?php echo BASE_URL. "proses_login.php"; ?>" method="POST">

    <?php
    // notification in front end if data fields are empty
    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

    // auto fill field data from url values
    $email = isset($_GET['email']) ? $_GET['email'] : false;

    if($notif == "false"){
        echo "<div id='notif'>Email and password does not exists.</div>";
    }
    ?>

    <br>
        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email""/></span>
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