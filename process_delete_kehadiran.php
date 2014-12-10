<?php
include "config.php";

$id = $_GET['_id'];

$ObjectId = new MongoId($id);

$collection = $db->kehadiran;
$collection->remove(array('_id' => $ObjectId));

header('Location: '.$config['base_url']);

?> 

