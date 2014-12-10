<?php include "config.php"; ?>
<html>
	<head>
		<title>Daftar Hadir Laboratorium Praktikum - Ilmu Komputer UPI</title>
	</head>
	<body>
		<h1>Tambah Daftar Hadir</h1>
		<!-- form tambah daftar hadir -->
		<hr/>
		<a href="<?php echo $config['base_url'] ?>">Kembali ke Daftar Hadir</a>
		<hr />
		<form method="POST" action="<?php echo $config['base_url'] ?>/process_add_kehadiran.php">
			Nama Praktikum: <input type="text" name="nama_praktikum" value="" placeholder="nama praktikum..." /> <br/><br/>
			Tanggal dan Jam Praktikum: <input type="text" name="tanggal_praktikum" value="" placeholder="tanggal praktikum..." /> <br/><br/>
			Kelas: 
			<select name="kelas">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C1">C1</option>
				<option value="C2">C2</option>
				<option value="D">D</option>
			</select> <br/><br/>
			Angkatan:
			<select name="angkatan">
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
			</select> <br/><br/>
			Asisten Penanggung Jawab: <input type="text" name="asisten_penanggung_jawab" value="" placeholder="asisten penanggung jawab..." /> <br/><br/>
			Catatan: <br/><br/>
			<textarea name="catatan" placeholder="Catatan terkait dengan praktikum..." cols="100" rows="10">
			</textarea> <br/><br/>
			<input type="submit" value="Simpan Praktikum" />
		</form>
		<hr />
	</body>
</html>
 
