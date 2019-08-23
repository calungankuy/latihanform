<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<FORM ACTION="proses11.php" METHOD="POST" NAME="input">

<fieldset>
        <legend>Daftarkuy</legend>
        <p>
            <label>No Pendaftaran</label>
            <input type="number" name="NoPendaftaran" placeholder="isi nomernya">
        </p
        <p>
            <label>NISN</label>
            <input type="number" name="NISN" placeholder="WAJIB DIISI!!">
        </p>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <P>
            <label>Alamat</label>
            <input type="text" name="Alamat" placeholder="Alamat">
        </P>
        <p>
            <label>Tempat Lahir</label>
            <input type="text" name="TempatLahir" placeholder="isi yang benar">
        </p>
        <p>
            <label>Tanggal Lahir</label>
            <input type="date" name="TanggalLahir" placeholder="mari ke mari">
        </p>
        <p>
            <label>Asal Sekolah</label>
            <input type="text" name="AsalSekolah" placeholder="dimana asalnya sok...">
        </p>
        <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="jeniskelamin" value="lakilaki" /> Laki-laki</label>
            <label><input type="radio" name="jeniskelamin" value="perempuan" /> Perempuan</label>
        </p>
        <p>
            <label>Jurusan</label>
            <select>
            <option value="RPL">RPL</option>
            <option>TKR</option>
            <option>TSM</option>
            </select>
        </p>
        <P>
            <label>Nama Ayah</label>
            <input type="text" name="NamaAyah" placeholder="masa gatau namanya">
        </P>
        <p>
            <label>Pekerjaan Ayah</label>
            <input type="text" name="PekerjaanAyah" placeholder="apa hayoh">
        </p>
        <p>
        <p>
            <label>Nama Ibu</label>
            <input type="text" name="NamaIbu" placeholder="silahkan isi">
        </p>
        <p>
            <label>Hobi</label>
            <input type="text" name="Hobi" placeholder="hobimu apa">
        </p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>

            <p>
            <input type="submit" name="submit" value="Daftar" />
        </p>
        </fieldset>
    </form>
</body>
</html>