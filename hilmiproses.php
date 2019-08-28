<?php
if (isset($_POST['simpan'])) {
    // echo 'Nama Anda  : ' . $_POST['nama'] . '<br/>';

    $nama = $_POST['nama'];
		$nmbrg = $_POST['nmbrg'];
		$hrg = $_POST['hrgbrg'];
		$jumlah= $_POST['jmlh'];
        $nami = $_POST['nmbrg'];
        $desk = $_POST['Deskripsi'];
        $tgl = $_POST['tgl'];
        $sub_total = $jumlah *$hrg;
        // $total = $jumlah *$hrg;
        if ($jumlah > 10) {
            $total = $sub_total - (0.2 * $sub_total);
         if($jumlah < 5){
            $total = $sub_total - (0.1 *$sub_total);
        if ($jumlah < 5) {
            $total=$sub_total;
        
         
            if (jumlah < 0) {
             echo"Maaf permintaan anda tidak dapat di proses";
         
        }
    }
    }
}
    }
    else{        
        echo "Nama : $nama <br>";
        echo "Nama Barang : $nami <br>";
        echo "Harga Barang : $hrg <br>";
        echo "Jumlah Barang : $jumlah <br>";
        echo "Deskripsi : $desk <br>";
        echo "Tanggal Pembelian : $tgl <br>";
        echo "Sub_Total : $sub_total <br>";
        }
    
?>