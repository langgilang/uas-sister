<?php
    include "koneksi.php";
    $kode_makanan   =$_GET['kode_makanan'];
    $nama_paket     =$_GET['nama_paket'];
    $harga          =$_GET['harga'];
    $deskripsi      =$_GET['deskripsi'];
    $foto           =$_GET['foto'];
    
    $ceknis    =mysqli_num_rows (mysqli_query($koneksi, "SELECT kode_makanan FROM tb_makanan WHERE kode_makanan='$_GET[kode_makanan]'"));
    
    if($ceknis > 0) {
    ?>
        <script language="JavaScript">
            alert('Oops! Duplikat Kode ...');
            document.location='insertmakanan_act.php';
        </script>
    <?php
    }
        
    else{
        $insert =mysqli_query($koneksi, "INSERT INTO tb_makanan (kode_makanan, nama_paket, harga, deskripsi, foto) VALUES ('$kode_makanan', '$nama_paket', '$harga', '$deskripsi', '$foto')");
        ?>
            <script language="JavaScript">
            alert('Good! Input Data Berhasil  ...');
            document.location='datamakanan.php';
            </script>
        <?php
        }
?>