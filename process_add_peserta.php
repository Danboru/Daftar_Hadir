<?php

include "config.php";

$id = $_POST['_id'];
$ObjectId = new MongoId($id);

$collection = $db->kehadiran;
$jam_masuk = new DateTime($_POST['jam_masuk']);

$doc = array(
	"nama" => $_POST['nama'],
	"jam_masuk" => date_format($jam_masuk, 'H:i:s'),
	"keterangan" => $_POST['keterangan'],
	"catatan" => $_POST['catatan'],
);

$collection->update(
	array('_id' => $ObjectId), 
	array('$push'=> array("peserta"=>$doc))
);

header('Location: '.$config['base_url']."/detail_kehadiran.php?_id=".$id);

?>
 
