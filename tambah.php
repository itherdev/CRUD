<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><title></title>
</head>
<body style="margin: 70px;">
  <h2>Tambah Data Barang</h2>
	<form method="POST" action="formtambah.php">
    <p>
    <label>No</label>
    <input type="number" name="no" placeholder="">
     </p>

     <p>
    <label>Nama Merek</label>
    <input type="text" name="nama_merek" placeholder="">
    </p>
  
    <p>
    <label>Warna</label>
    <input  type="text" name="warna" placeholder="">
    </p>

    <p>
    <label>Jumlah</label>
    <input type="number" name="jumlah" placeholder="">
    </p>

    <p>
    <input type="submit" name="submit" value="simpan">
    </p>

    <p>
    <input type="submit" name="ulangi" value="ulangi">
    </p>
</body>
</html>