<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>FORM TAMBAH DATA</h1>
    <form class="" action="<?php echo site_url('welcome/tambah_aksi');?>" method="post">
      <input type="text" name="nama" value="" placeholder="Nama"><br>
      <input type="number" name="nim" value="" placeholder="NIM"><br>
      <input type="date" name="tgl" value="" placeholder="tgl"><br>
      <input type="text" name="ipk" value="" placeholder="IPK"><br>
      <select name="kelas">
        <option value="42-01">42-01</option>
        <option value="42-02">42-02</option>
      </select><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </center>
  </body>
</html>
