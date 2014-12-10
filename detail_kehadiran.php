<?php

include "config.php";

$id = $_GET['_id'];
$ObjectId = new MongoId($id);

$collection = $db->kehadiran;
$cursor = $collection->findOne(array('_id' => $ObjectId));

?> 

<html>
	<head>
		<title>Daftar Hadir Laboratorium Praktikum - Ilmu Komputer UPI</title>
	</head>
	<body>
		<h1>Daftar Hadir - <?php echo $cursor['nama_praktikum']." / ".$cursor['kelas']." / ".$cursor['angkatan']; ?></h1>
		<hr/>
		<a href="<?php echo $config['base_url']; ?>">Kembali ke Daftar Hadir</a> | <a href="<?php echo $config['base_url']; ?>/add_peserta.php?_id=<?php echo $cursor["_id"]; ?>">Tambah Peserta</a> | <a href="#">Stats</a>
		<hr />
		<!-- melihat detail kehadiran -->
		<hr />
			<table>
				<tbody>
					<tr>
						<td>Nama Praktikum</td>
						<td>:</td>
						<td><?php echo $cursor['nama_praktikum']; ?></td>
					</tr>
					<tr>
						<td>Tanggal Praktikum</td>
						<td>:</td>
						<td><?php echo $cursor['tanggal_praktikum']; ?></td>
					</tr>
					<tr>
						<td>Kelas / Angkatan</td>
						<td>:</td>
						<td><?php echo $cursor['kelas']; ?> / <?php echo $cursor['angkatan']; ?></td>
					</tr>
					<tr>
						<td>Asisten Penanggung Jawab</td>
						<td>:</td>
						<td><?php echo $cursor['asisten_penanggung_jawab']; ?></td>
					</tr>
					<tr>
						<td>Catatan</td>
						<td>:</td>
						<td><?php echo $cursor['catatan']; ?></td>
					</tr>
					
				</tbody>
			</table>
		<hr />
		
		<!-- melihat daftar peserta -->
		<table border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jam Masuk</th>
					<th>Keterangan</th>
					<th>Catatan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<pre>
					<?php if (count($cursor['peserta']) == 0) { ?>
						<tr>
							<td colspan="6">Belum ada daftar peserta praktikum...</td>
						</tr>
					<?php } else { ?>
					<?php $i=1; foreach ($cursor['peserta'] as $peserta) { ?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $peserta['nama']; ?></td>
							<td><?php echo $peserta['jam_masuk']; ?></td>
							<td><?php echo $peserta['keterangan']; ?></td>
							<td><?php echo $peserta['catatan']; ?></td>
							<td>Edit | 
								<a href="<?php echo $config['base_url']."/process_delete_peserta.php?_id=".$id."&nama=".$peserta['nama']."&jam_masuk=".$peserta['jam_masuk'] ;?>">Hapus</a>
							</td>
						</tr>
					<?php $i++; } ?>
					<?php } ?>
				</pre>
			</tbody>
		</table>
	</body>
</html>
