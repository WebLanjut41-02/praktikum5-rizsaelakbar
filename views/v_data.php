<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>RIZSA EL AKBAR</h1>

<form action="<?php echo site_url('welcome/search_keyword');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" />
</form>
<a href="<?php echo site_url('welcome/tambah');?>"><button>TAMBAH</button></a>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
      <th>Tanggal Lahir</th>
			<th>IPK</th>
      <th>Kelas</th>
      <th colspan="2">Aksi</th>
		</tr>
		<?php
		$no = $this->uri->segment('3') + 1;
		foreach($user as $u){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->nim ?></td>
      <td><?php echo $u->tgl_lahir ?></td>
			<td><?php echo $u->ipk ?></td>
      <td><?php echo $u->kelas ?></td>
      <td><a href="<?php echo base_url(); ?>welcome/hapus_aksi?id=<?php echo $u->id ?>">Hapus</a></td>
      <td><a href="<?php echo base_url(); ?>welcome/edit?id=<?php echo $u->id ?>">Edit</a></td>
		</tr>
	<?php } ?>
	</table>
	<br/>
	<?php
	echo $this->pagination->create_links();
	?>
</body>
</html>
