<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <title> Data Member </title>
</head>

<body>
    <?php 
        include ('header.php');
    ?>
    
    <!-- start form tambah data -->
    <div class="container text-center">
        <br>  
        <h2> Tambah Data Mahasiswa <i class="fa fa-angle-double-right"></i> Tambah Data</h2>
        <hr>
        <br>

        <form id="inputdata" class="form-horizontal" enctype="multipart-form-data" method="post" action="simpan.php">
            <div class="form-group">
                <label for="nim">Nim</label>
                <div>
                    <input type="text" class="form-control" id="nim" name="nim">
                </div>
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <div>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>

            <div class="form-group">
                <label for="tempat lahir">Tempat Lahir</label>
                <div>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                </div>
            </div>

            <div class="form-group">
                <label for="tanggal lahir">Tanggal Lahir</label>
                <div>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
            </div>

            <div class="form-group">
                <label for="jenis kelamin">Jenis Kelamin</label>
                <div>
                <td>
                        <input type="radio" name="jk" id="jk" value="L" required> Laki-laki
                        <input type="radio" name="jk" id="jk" value="P" required> Perempuan
                    </td>
                </div>
            </div>

            <div class="form-group">
                <label for="agama">Agama</label>
                <div>
                    <input type="text" class="form-control" id="agama" name="agama">
                </div>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <div>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
            </div>

            <div class="form-group">
                <label for="no hp">No Hp</label>
                <div>
                    <input type="text" class="form-control" id="no_hp" name="no_hp">
                </div>
            </div>

            <div class="form-group">
                <label for="gambar">Foto</label>
                <div>
                <input type="file" name="gambar" id="gambar" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                    <a href="index.php" class="btn btn-danger"><i class="fa fa-ban"></i> Batal</a>
                </div>
            </div>                    
        </form>
    </div>
    <!-- end form tambah data -->
 
    <?php 
        include 'footer.php';
    ?>

    <script language="javascript">
        $.validator.addMethod("alpha", function(value, element){
            return this.optional(element) || value.match(/^[a-zA-Z\s]+$/);
        });
        $("#inputdata").validate({
            rules: {
                nim: "required",
                nama: {
                    required: true,
                    alpha: true
                },
                tempat_lahir: {
                    required: true,
                    alpha: true
                },
                tanggal_lahir: "required",
                jenis_kelamin: {
                    required: true,
                    alpha: true
                },
                agama: {
                    required: true,
                    alpha: true
                },
                alamat: {
                    required: true,
                    alpha: true
                },
                ho_hp: {
                    required: true,
                    number: true
                },
                
            },
            message: {
                nim: "Masukkan nim anda!",
                nama: {
                    required: "Masukkan nama anda!",
                    alpha: "Inputan hanya diperbolehkan huruf dan spasi!"
                },
                tempat_lahir: {
                    required: "Masukkan tempat lahir anda!",
                    alpha: "Inputan hanya diperbolehkan huruf dan spasi!"
                },
                tanggal_lahir: "masukkan tanggal lahir!",
                jenis_kelamin: {
                    required: "Masukkan jenis kelamin anda!",
                },
                agama: {
                    required: "Masukkan agama anda!",
                },
                alamat: {
                    required: "Masukkan alamat anda!",
                },
                no_hp: {
                    required: "Masukkan no hp anda!",
                    alpha: "Inputan hanya diperbolehkan angka !"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>

</body>
</html>
