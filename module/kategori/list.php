<div id="frame-tambah">
    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=kategori&action=form"; ?>"class"tombol-action">+ Tambah kategori produk</a>
    <br>
    <br>
</div>

<?php
    $queryKategoriProd  = mysqli_query($connections, "SELECT * FROM kategori");

    // db product category check false conditions (not exists)
    if(mysqli_num_rows($queryKategoriProd) == 0){
        echo "<h3>Product category name not found</h3>";
    }
    // db product category check true (category exists)
    else {
        echo "<table class='table-list'>";
        echo "<tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Status</th>
            <thAction</th>
        </tr>"; 

    $number = 1; 
    while($row = mysqli_fetch_assoc($queryKategoriProd)) {
        echo 
            "<tr>
                <td>$number</td>
                <td>$row[kategori]</td>
                <td>$row[status]</td>
                <td>
                    <a href='".BASE_URL."index.php?page=my_profile&module=kategori&action=form&kategori_id=$row[kategori_id]'>Edit Data</a>
                </td>
            </tr>";
        $number++;
    }
        echo "</table>";
    }
?>