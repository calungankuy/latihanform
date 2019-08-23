<?php
if (isset($_POST['submit'])) {
    echo 'No Pendaftaran         : ' . $_POST['NoPendaftaran'] . '<br/>';
    echo 'NISN                   : ' . $_POST['NISN'] . '<br/>';
	echo 'Nama                   : ' . $_POST['nama'] . '<br/>';
    echo 'Alamat                 : ' . $_POST['Alamat'] .'</br>';
    echo 'Tempat Lahir           : ' . $_POST['TempatLahir'] . '<br/>';
    echo 'Tanggal Lahir          : ' . $_POST['TanggalLahir'] . '<br/>';
    echo 'Asal Sekolah           : ' . $_POST['AsalSekolah'] . '<br/>';
    echo 'jenis_kelamin          : ' . $_POST['jeniskelamin'] . '<br/>';
    echo 'Jurusan                : ' . $_POST['Jurusan'] . '<br/>';
    echo 'Nama Ayah              : ' . $_POST['NamaAyah'] . '<br/>';
    echo 'Pekerjaan Ayah         : ' . $_POST['PekerjaanAyah'] . '<br/>';
    echo 'Hobi                   : ' . $_POST['Hobi'] . '<br/>';
    echo 'Agama                  : ' . $_POST['Agama'] . '<br/>';

}
?>