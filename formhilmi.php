<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body bgcolor="skyblue">
<FORM ACTION="hilmiproses.php" METHOD="POST" NAME="input">
    <fieldset>
    <legend>Formulir</legend>
        
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
            <label>Nama Barang:</label>
            <input type="text" name="nmbrg" placeholder="Nama Barangnya apa yah" />
        </p>
        <p>
            <label>Alamat :</label>
        </p>
        <p>
            <label>Kecamatan:</label>
            <input type="text" name="cmt" />
        </p>
        <p>
            <label>Kabupaten:</label>
            <input type="text" name="kabut"/>
        </p>
        <p>
            <label>Provinsi:</label>
            <input type="text" name="prov"/>
        </p>
        <p>
            <label>Kode Pos:</label>
            <input type="text" nsme="kode"/>
        </p>
        <p>
            <label>Harga Barang:</label>
            <input type="number" name="hrgbrg" placeholder="Hargana..." />
        </p>
        <p>
            <label>Jumlah Barang:</label>
            <input type="number" name="jmlh" placeholder="Jumlahnya bro sis..."
        </p>
        <p>
            <label>Deskripsi:</label>
            <textarea name="Deskripsi"></textarea>
        </p>
        <p>
            <label>Tanggal Pembelian:</label>
            <input type="date" name="tgl" />
        </p>
        <a href="hilmiproses.php">
        <input type="submit" name="simpan" value="Simpan">
        </a>
    </form>
    </fieldset>
</body>
</html>