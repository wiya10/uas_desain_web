<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<div class="container">
<?php
    require_once('koneksi.php');
    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $nim       = $_POST['nim'];
    $nama       = $_POST['nama'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jenis_kelamin     = $_POST['jk'];
    $agama     = $_POST['agama'];
    $alamat       = $_POST['alamat'];
    $no_hp       = $_POST['no_hp'];
    $foto = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];

   
    if($nim=='' || $nama=='' || $tempat_lahir=='' || $tanggal_lahir=='' || $jenis_kelamin=='' || $agama=='' || $alamat=='' || $no_hp=='' || $foto==''){
        move_uploaded_file($lokasi_gambar, "gambar/" . $foto);
        echo "Data yang dimasukkan salah. Pastikan semua form telah terisi!<br>";
        echo '<a href="tambah.php">Kembali</a>';
        return;
    }

    $query1 = "select * from tabel_mahasiswa where nim='$nim' ";
    $count = $koneksi->query($query1);
    if($count->num_rows > 0){
        echo "Nim yang anda masukkan sudah ada, mohon periksa kembali!";
        echo '<a href="tambah.php">Kembali</a>';
        return;
    }

    $query = "insert into tabel_mahasiswa (nim, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, no_hp, foto) values('$nim', '$nama', '$tempat_lahir', '$tanggl_lahir', '$jenis_kelamin', '$agama', '$alamat', '$no_hp', '$foto')";
    
    if($koneksi->query($query)===true){        
        echo '<br><div class="alert alert-success alert-dismissable">Data '.$nama.' berhasil disimpan. <a href="index.php">  Lihat Data</a></div>';
    } else{
        echo '<br><div class="alert alert-danger alert-dismissable">Data gagal disimpan! Kembali ke <a href="index.php">  Halaman Awal</a></div>';
    }
    
    $koneksi->close();
?>
</div>