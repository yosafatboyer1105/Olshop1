<?php 
    // ternary operator to check whether we have kategori id values on the URL or not
    $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false; 

    // condition false
    $kategori = "";
    $status = "";
    $button = "Add";

    // if there is category id, then show data, and change $button value to Update
    if($kategori_id){
        $queryFetchKategoriProd = mysqli_query($connections, "SELECT * FROM kategori WHERE kategori_id = '$kategori_id'"); 
        $row = mysqli_fetch_assoc($queryFetchKategoriProd);

        $kategori = $row['kategori'];
        $status = $row['status'];
        $button = "Update";
    }
?>

<form action="<?php echo BASE_URL."module/kategori/action.php?kategori_id = $kategori_id"; ?>" method="POST">
<!-- page to add new product categories-->
    <div class="element-form">
        <label>Nama Kategori</label>
        <span><input type="text" name="kategori" value="<?php echo $kategori; ?>" /></span>
    </div>

    <div class="element-form">
        <label>Status</label>
    <span>
        <input type="radio" name="status" value="on" <?php if($status == "on") {echo "checked='true'"; } ?> "/>On
        <input type="radio" name="status" value="off" <?php if($status == "off") {echo "checked='true'"; } ?> "/>Off
    </span>
    </div>

    <div class="element-form">
        <span><input type="submit" name="button" value="<?php echo $button; ?>""/></span>
    </div>
</form>