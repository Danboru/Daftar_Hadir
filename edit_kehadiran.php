<?php include "config.php"; 

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
		<h1>Edit Daftar Hadir - <?php echo $cursor['nama_praktikum']." / ".$cursor['kelas']." / ".$cursor['angkatan']; ?></h1>
		<!-- form tambah daftar hadir -->
		<hr/>
		<a href="<?php echo $config['base_url'] ?>">Kembali ke Daftar Hadir</a>
		<hr />
		<form method="POST" action="<?php echo $config['base_url'] ?>/process_edit_kehadiran.php">
			Nama Praktikum: <input type="text" name="nama_praktikum" value="<?php echo $cursor['nama_praktikum']; ?>" placeholder="nama praktikum..." /> <br/><br/>
			Tanggal Praktikum: <input type="text" name="tanggal_praktikum" value="<?php echo $cursor['tanggal_praktikum']; ?>" placeholder="tanggal praktikum..." /> <br/><br/>
			Kelas: 
			<select name="kelas">
				<?php echo "<option value='".$cursor['kelas']."'>".$cursor['kelas']."</option>"?>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C1">C1</option>
				<option value="C2">C2</option>
				<option value="D">D</option>
			</select> <br/><br/>
			Angkatan:
			<select name="angkatan">
				<?php echo "<option value='".$cursor['angkatan']."'>".$cursor['angkatan']."</option>"?>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
			</select> <br/><br/>
			Asisten Penanggung Jawab: <input type="text" name="asisten_penanggung_jawab" value="<?php echo $cursor['asisten_penanggung_jawab']; ?>" placeholder="asisten penanggung jawab..." /> <br/><br/>
			Catatan: <br/><br/>
			<textarea name="catatan" placeholder="Catatan terkait dengan praktikum..." cols="100" rows="10"><?php echo $cursor['catatan']; ?>
			</textarea> <br/><br/>
			<input type="hidden" name="_id" value="<?php echo $cursor['_id']; ?>" /> <br/><br/>
			<input type="submit" value="Simpan Praktikum" />
		</form>
		<hr />
	</body>
</html>
 
 
