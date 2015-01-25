<?php

include "config.php";

$post_collection = $db->posts;

$criteria = array(
	"judul" => "Instalasi MongoDB",
);

$post = array(
	'$set' => array(
		"judul" => "Proses Instalasi MongoDB",
	)
);

$update_result = $post_collection->update($criteria, $post);

print_r($update_result);

?>
