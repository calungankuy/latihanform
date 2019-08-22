<?php
if (isset($_POST['Daftar'])) {
    $nama = $_POST['Nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['Jenis Kelamin'];
    $agama = $_POST['Agama'];
    $email = $_POST['Email'];
    $pass = $_POST['password'];
    if ($email ==  "hilmi_fadhilah123@yahoo.com" && $pass == "123") {
        echo "<h2>Daftar Sukses</h2>";
    if ($alamat == "Dayeuhkolot" && $jk == "laki - laki") {
        # code...
    }
    }else{
        echo "<h2>Daftar Gagal</h2>";
    }

    echo $nama;
    echo $alamat;
    echo $jk;
    echo $agama;
    echo $email;

}
?>