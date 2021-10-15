<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="laporan.css">
    <title>Laporan</title>
</head>
<body>
 <!-- sidebar -->
 <div class="sidebar">
        <div class="logo">
        </div>
        <button type="button" class="menu"><a href="#"><i class="profil" data-icon="bx:bxs-user"></i>&ensp;Profil</a></button>
        <button type="button" class="menu"><a href="#"><i class="calendar" data-icon="uil:calendar-alt"></i>&ensp;Jadwal</a></button>
        <button type="button" class="menu"><a href="absensi.php"><i class="absensi" data-icon="ci:edit"></i>&ensp;Absensi</a></button>
        <button type="button" class="currentmenu"><a href="laporan.php"><i class="laporan" data-icon="clarity:clipboard-line"></i>&ensp;Laporan</a></button>
        <button type="button" class="menu"><a href="#"><i class="exit" data-icon="icomoon-free:exit"></i>&ensp;Keluar</a></button>
    </div>

    <!-- kontent -->
    <div class="main">
        <div class="tanggal">
                <table align="left" border="0" cellspacing="25" width="700px">
                    <tbody>
                        <tr>
                            <td>Tanggal</td><td>:</td>
                            <td><input type="date" class="tanggal-awal" placeholder="Tanggal Awal" name="tanggal-awal" min="1900-01-01" max="2030-12-31"></td>
                            <td>&ensp;-&ensp;</td>
                            <td><input type="date" class="tanggal-akhir" placeholder="Tanggal Akhir" name="tanggal-akhir" min="1900-01-01" max="2030-12-31"></td>
                            <td><button type="submit" class="cari">Cari&ensp;&emsp;<i class="search" data-icon="bytesize:search"></i></button></td>
                        </tr>
                    </tbody>
                </table>
        </div>

        <div class="biodata-left">
            <table align="left" border="0" cellspacing="25" width="370px">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td>001</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Eric</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="biodata-right">
            <table align="right" border="0" cellspacing="25" width="450px">
                <tbody>
                    <tr>
                        <td>Posisi</td>
                        <td>:</td>
                        <td>Akuntan</td>
                    </tr>
                    <tr>
                        <td>Departemen</td>
                        <td>:</td>
                        <td>Keuangan</td>
                    </tr>
                </tbody>
            </table>
        <br>
        <br>
        <br>
        <br>
        </div>

        <br>
        <br>
        
        <div class="tabel">
            <table border="1" width="1050px" bordercolor="white">
                <tbody>
                    <tr>
                        <th width="5px" bgcolor="#ccccc">No</th>
                        <th width="20px" bgcolor="#ccccc">Tanggal</th>
                        <th width="30px" bgcolor="#ccccc">Jam Masuk</th>
                        <th width="30px" bgcolor="#ccccc">Jam Keluar</th>
                        <th width="80px" bgcolor="#ccccc">Keterangan</th>
                        <th width="80px" bgcolor="#ccccc">Catatan</th>                   
                        <th width="80px" bgcolor="#ccccc">Lokasi</th>
                        <th width="50px" bgcolor="#ccccc">Foto</th>
                    </tr>
                    <tr>
                        <td bgcolor="white">1</td>
                        <td bgcolor="white">11/10/2021</td>
                        <td bgcolor="white">07:35</td>
                        <td bgcolor="white">17:00</td>
                        <td bgcolor="white">Hadir</td>
                        <td bgcolor="white"></td>
                        <td bgcolor="white">Ruko Mega Legenda</td>
                        <td bgcolor="white">001.jpg</td>
                    </tr>
                    <tr>
                        <td bgcolor="white">2</td>
                        <td bgcolor="white">12/10/2021</td>
                        <td bgcolor="white">-</td>
                        <td bgcolor="white">-</td>
                        <td bgcolor="white">Tidak Hadir</td>
                        <td bgcolor="white"></td>
                        <td bgcolor="white">Ruko Mega Legenda</td>
                        <td bgcolor="white">002.jpg</td>
                    </tr>
                    <tr>
                        <td bgcolor="white">3</td>
                        <td bgcolor="white">13/10/2021</td>
                        <td bgcolor="white">07:45</td>
                        <td bgcolor="white">17:05</td>
                        <td bgcolor="white">Hadir</td>
                        <td bgcolor="white"></td>
                        <td bgcolor="white">Ruko Mega Legenda</td>
                        <td bgcolor="white">003.jpg</td>
                    </tr>
                    <tr>
                        <td bgcolor="white">4</td>
                        <td bgcolor="white">14/10/2021</td>
                        <td bgcolor="white">07:55</td>
                        <td bgcolor="white">17:10</td>
                        <td bgcolor="white">Hadir</td>
                        <td bgcolor="white"></td>
                        <td bgcolor="white">Ruko Mega Legenda</td>
                        <td bgcolor="white">004.jpg</td>
                    </tr>
                    <tr>
                        <td bgcolor="white">5</td>
                        <td bgcolor="white">15/10/2021</td>
                        <td bgcolor="white">08:05</td>
                        <td bgcolor="white">17:15</td>
                        <td bgcolor="white">Terlambat</td>
                        <td bgcolor="white"></td>
                        <td bgcolor="white">Ruko Mega Legenda</td>
                        <td bgcolor="white">005.jpg</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button type="submit" class="cetak">Cetak</button>
    </div>
</body>
</html>


