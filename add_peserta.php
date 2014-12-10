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
		<h1>Tambah Peserta</h1>
		<!-- form tambah daftar hadir -->
		<hr/>
		<a href="<?php echo $config['base_url']."/detail_kehadiran.php?_id=".$id ?>">Kembali ke Daftar Hadir Sebelumnya</a>
		<hr />
		<form method="POST" action="<?php echo $config['base_url'] ?>/process_add_peserta.php">
			Nama: <input type="text" name="nama" value="" placeholder="nama..." /> <br/><br/>
			Jam Masuk: <input type="text" name="jam_masuk" value="" placeholder="jam masuk..." /> <br/><br/>
			Keterangan: 
			<select name="keterangan">
				<option value="hadir">Hadir</option>
				<option value="sakit">Sakit</option>
				<option value="tanpa_alasan">Tanpa Alasan</option>
			</select> <br/><br/>
			Catatan: <br/><br/>
			<textarea name="catatan" placeholder="Catatan terkait dengan peserta..." cols="100" rows="10"></textarea><br/><br/>
			<input type="hidden" name="_id" value="<?php echo $cursor['_id']; ?>" /> <br/><br/>
			<input type="submit" value="Simpan Peserta" />
		</form>
		<hr />
	</body>
</html> 
