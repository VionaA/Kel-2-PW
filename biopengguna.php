<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="biopengguna.css">
    <title>Moment Studio</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
        </div>
        <button type="button" class="currentmenu"><a href="#"><i class="iconify" data-icon="el:css"></i>Profil</a></button>
        <button type="button" class="menu"><a href="#"><i class="calendar" data-icon="uil:calendar-alt"></i>Jadwal</a></button>
        <button type="button" class="menu"><a href="absensi.php">Absensi</a></button>
        <button type="button" class="menu"><a href="laporan.php">Laporan</a></button>
        <button type="button" class="menu"><a href="#">Keluar</a></button>
    </div>
    <div>
        <image class="fotoprofil" src="profile.jpg"/>
    </div>
    <div>
        <form>
            <input class="unggahfoto" name="unggahfoto" type="file">
        </form>
    </div>

    
    <div class="container">
        <form>
            <label for="id" class="id-label">ID</label>
            <input type="text" class="id" name="id">
            <label for="nama" class="nama-label">Nama</label>
            <input type="text" class="nama" name="nama">
            <label for="tanggal-lahir" class="tanggal-lahir-label" >Tanggal Lahir</label>
            <input type="date" class="tanggal-lahir" placeholder="DD-MM-YYYY" name="tanggal-lahir" min="1900-01-01" max="2030-12-31">
            <label for="alamat" class="alamat-label">Alamat</label>
            <input type="text" class="alamat" name="alamat">
            <label for="nomor-telepon" class="nomor-telepon-label">Nomor Telepon</label>
            <input type="text" class="nomor-telepon" name="nomor-telepon">
            <label for="posisi" class="posisi-label">Posisi</label>
            <input type="text" class="posisi" name="posisi">
            <label for="departemen" class="departemen-label">Departemen</label>
            <input type="text" class="departemen" name="departemen">
            <a href="beranda.php">
                <button type="submit"class="simpan">Masuk</button>
            </a>
        
        </form>
    </div>
</body>

</html>