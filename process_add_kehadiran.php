<?php

include "config.php";

$collection = $db->kehadiran;
$tanggal_praktikum = new DateTime($_POST['tanggal_praktikum']);

$doc = array(
	"nama_praktikum" => $_POST['nama_praktikum'],
	"tanggal_praktikum" => date_format($tanggal_praktikum, 'Y-m-d H:i:s'),
	"kelas" => $_POST['kelas'],
	"angkatan" => $_POST['angkatan'],
	"asisten_penanggung_jawab" => $_POST['asisten_penanggung_jawab'],
	"catatan" => $_POST['catatan'],
	
);

$collection->insert($doc);

header('Location: '.$config['base_url']);

?>
