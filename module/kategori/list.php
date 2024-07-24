<div id="frame-tambah">
    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=kategori&action=form"; ?>" class="tombol-action"> + Tambah kategori produk</a>
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

        echo "<tr class='row-title'>
            <th class='kolom-nomor'>No</th>
            <th class='kiri'>Kategori Produk</th>
            <th class='tengah'>Status</th>
            <th class='tengah'>Action</th>
        </tr>"; 

    $number = 1; 
    while($row = mysqli_fetch_assoc($queryKategoriProd)) {
        echo 
            "<tr>
                <td class='kolom-nomor'>$number</td>
                <td class='kiri'>$row[kategori]</td>
                <td class='tengah'>$row[status]</td>
                <td class='tengah'>
                    <a href='".BASE_URL."index.php?page=my_profile&module=kategori&action=form&kategori_id=$row[kategori_id]' class='tombol-action'>Edit Data</a>
                </td>
            </tr>";
        $number++;
    }
        echo "</table>";
    }
?>