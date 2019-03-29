<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>FORM EDIT DATA</h1>
      <?php $data = $this->session->data1;
      // PRINT_R($data);
      ?>
    <form class="" action="<?php echo site_url('welcome/edit_aksi');?>" method="post">
      <input type="text" name="id" value="<?php echo $data[0]->id; ?>" placeholder="" hidden><br>
      <input type="text" name="nama" value="<?php echo $data[0]->nama; ?>" placeholder=""><br>
      <input type="number" name="nim" value="<?php echo $data[0]->nim; ?>" placeholder=""><br>
      <input type="date" name="tgl" value="<?php echo $data[0]->tgl; ?>" placeholder=""><br>
      <input type="text" name="ipk" value="<?php echo $data[0]->ipk; ?>" placeholder=""><br>
      <select name="kelas">
        <option <?php if ($data[0]->kelas == '42-01') {
          echo "selected";
        } ?> value="42-01">42-01</option>
        <option <?php if ($data[0]->kelas == '42-02') {
          echo "selected";
        } ?> value="42-02">42-02</option>
      </select><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </center>
  </body>
</html>
