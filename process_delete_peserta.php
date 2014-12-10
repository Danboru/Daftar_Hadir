<?php

include "config.php";

$id = $_GET['_id'];
$ObjectId = new MongoId($id);
$nama = $_GET['nama'];
$jam_masuk = new DateTime($_GET['jam_masuk']);

$collection = $db->kehadiran;

$doc = array(
	"nama" => $nama,
	"jam_masuk" => date_format($jam_masuk, 'H:i:s'),
);

$collection->update(
	array('_id' => $ObjectId), 
	array('$pull'=> array("peserta"=>$doc))
);


//~ echo $ObjectId." -- ".$nama." -- ".$jam_masuk;

header('Location: '.$config['base_url']."/detail_kehadiran.php?_id=".$id);


?>
 
 
