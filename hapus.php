<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<div class="container">
<?php
    include "koneksi.php";
    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();
    
    $query = "DELETE FROM members WHERE id=" . $_GET["id"];

    if($koneksi->query($query) === true) {
        echo '<br><div class="alert alert-success alert-dismissable">Data berhasil dihapus <a href="index.php">  Lihat Data</a></div>';            
    } else {
        echo '<br><div class="alert alert-danger alert-dismissable">Data gagal dihapus! Kembali ke <a href="index.php">  Halaman Awal</a></div>';
    }
?>
</div>