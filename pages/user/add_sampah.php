<!DOCTYPE html>
<html lang="en">
<?php
  include "layout/head.php";
?>
<body>

<?php
    $mysqli = new mysqli("localhost", "root", "", "db_bskciampea");
    $dataJenisSampah = ["Plastik", "Kertas", "Botol", "Besi", "Logam", "Kaca"];

    if (isset($_POST['btnSimpan'])) {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jenis_sampah = $_POST['jenis_sampah'];
        $berat = $_POST['berat'];
        $result = mysqli_query($mysqli, "INSERT INTO tb_setor (nik, nama, jenis_sampah, berat) VALUES ('$nik', '$nama', '$jenis_sampah', '$berat')");
        header("Location: add_sampah.php");
    }
?>
<div class="d-flex justify-content-center bg-info mt-4 mb-5">
        <h1>Setor Sampah</h1>
    </div>
    <div style="padding: 0px 50px">
        <form action="add_sampah.php" method="post">
            <div class="row">
            <div class="mb-3 col-6">
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" />
                </div>
            <div class="mb-3 col-6">
                    <label class="form-label">NIK</label>
                    <input class="form-control" type="number" name="nik" id="nik" placeholder="32011xxxxxxx"/>
                </div>
            </div>
            <div class="row">
            <div class="mb-3 col-6">
                    <label class="form-label">Jenis Sampah</label>
                        <select class="form-control" name="jenis_sampah" id="jenis_sampah">
                            <?php
                                foreach($dataJenisSampah as $js) {
                                    echo "<option value='$js'> $js </option>";
                                }
                            ?>
                        </select>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Berat Sampah</label><span>/KG</span>
                    <input class="form-control" type="number" name="berat" id="berat"/>
                </div>
            </div>
            <div class="mb-3 col-6">
                <input class="form-control bg-info text-white" type="submit" value="setor" name="btnSimpan" id="btnSimpan">
            </div>
        </form>
    </div>    
</body>
</html>