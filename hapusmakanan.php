<?php
    include "koneksi.php";
    if (isset($_GET['id_makanan'])) {
        $id_makanan    =$_GET['id_makanan'];
    }
    else{
        echo "Oops! No ID Selected";
    }
    
    if (!empty($id_makanan) && $id_makanan != "") {
        $hapus =mysqli_query($koneksi, "DELETE FROM tb_makanan WHERE id_makanan='$id_makanan'");
            ?>
                <script language="JavaScript">
                alert('Good! Delete data  berhasil ...');
                document.location='datamakanan.php';
                </script>
            <?php        
    }
?>