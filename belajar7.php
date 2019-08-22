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

<fieldset>
        <legend>Daftarkuy</legend>
        <p>
            <label>No Pendaftaran</label>
            <input type="number" name="No Pendaftaran" placeholder="isi nomernya">
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
            <input type="text" name="Tempat Lahir" placeholder="isi yang benar">
        </p>
        <p>
            <label>Tanggal Lahir</label>
            <input type="date" name="Tanggal Lahir" placeholder="mari ke mari">
        </p>
        <p>
            <label>Asal Sekolah</label>
            <input type="text" name="Asal Sekolah" placeholder="dimana asalnya sok...">
        </p>
        <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
        </p>
        <p>
            <label>Jurusan</label>
            <select>
            <option>RPL</option>
            <option>TKR</option>
            <option>TSM</option>
            </select>
        </p>
        <P>
            <label>Nama Ayah</label>
            <input type="text" name="Nama Ayah" placeholder="masa gatau namanya">
        </P>
        <p>
            <label>Pekerjaan Ayah</label>
            <input type="text" name="Pekerjaan Ayah" placeholder="apa hayoh">
        </p>
        <p>
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