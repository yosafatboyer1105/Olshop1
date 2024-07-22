<?php
    // middleware so user must login before accessing profile sections
    if($user_id){
        $module = isset($_GET['module']) ? $_GET['module'] : false;
        $action = isset($_GET['action']) ? $_GET['action'] : false;
        $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
    }
    // if no recorded login session
    else { 
        header("location: ".BASE_URL."index.php?page=login.php");
    }
?>

<div id="bg-page-profile">
    <div id="menu-profile">
        <ul>
            <li>
                <a <?php if($module == "pesanan") { echo "class='active'"; } ?> 
                href="<?php echo BASE_URL."index.php?page=my_profile&module=pesanan&action=list";?>">Pesanan</a>
            </li>
            <li>
                <a <?php if($module == "kategori") { echo "class='active'"; } ?> 
                    href="<?php echo BASE_URL."index.php?page=my_profile&module=kategori&action=list";?>">Kategori</a>
            </li>
            <li>
                <a <?php if($module == "barang") { echo "class='active'"; } ?> 
                    href="<?php echo BASE_URL."index.php?page=my_profile&module=barang&action=list";?>">Barang</a>
            </li>
            <li>
                <a <?php if($module == "kota") { echo "class='active'"; } ?> 
                    href="<?php echo BASE_URL."index.php?page=my_profile&module=kota&action=list";?>">Kota</a>
            </li>
            <li>
                <a <?php if($module == "user") { echo "class='active'"; } ?> 
                    href="<?php echo BASE_URL."index.php?page=my_profile&module=user&action=list";?>">User</a>
            </li>
            <li>
                <a <?php if($module == "banner") { echo "class='active'"; } ?> 
                    href="<?php echo BASE_URL."index.php?page=my_profile&module=banner&action=list";?>">Banner</a>
            </li>
        </ul>
    </div>

    <div id="profile-content">
        <?php 
            // dynamic content for the menu in the profile sections
            $file = "module/$module/$action.php";
            if(file_exists($file)) {
                include_once($file);
            }
            else {
                echo "<h3>Page not available</h3>";
            }
        ?>
    </div>
</div>