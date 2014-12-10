<?php include "config.php"; ?>
<html>
	<head>
		<title>Daftar Hadir Laboratorium Praktikum - Ilmu Komputer UPI</title>
	</head>
	<body>
		<h1>Daftar Hadir Laboratorium Praktikum - Ilmu Komputer UPI</h1>
		<hr/>
		<a href="<?php echo $config['base_url'] ?>/add_kehadiran.php">Tambah Daftar Hadir</a>
		<hr />
		<!-- melihat daftar hadir -->
		<table border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Praktikum</th>
					<th>Tanggal Praktikum</th>
					<th>Kelas / Angkatan</th>
					<th>Asisten PJ</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				
				$collection = $db->kehadiran;
				$cursor = $collection->find()->sort(array("tanggal_praktikum"=> -1));
				$i = 1;
				
				foreach ($cursor as $document){
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$document['nama_praktikum']."</td>";
					echo "<td>".$document['tanggal_praktikum']."</td>";
					echo "<td>".$document['kelas']." - ".$document['angkatan']."</td>";
					echo "<td>".$document['asisten_penanggung_jawab']."</td>";
					echo "<td>
						<a href='".$config['base_url']."/detail_kehadiran.php?_id=".$document['_id']."'>Detail</a>  
						| <a href='".$config['base_url']."/edit_kehadiran.php?_id=".$document['_id']."'>Edit</a> 
						| <a href='".$config['base_url']."/process_delete_kehadiran.php?_id=".$document['_id']."'>Hapus</a>
					</td>";
					echo "</tr>";
					$i++;
				}
				
				?>
			</tbody>
		</table>
		<hr />
	</body>
</html>
