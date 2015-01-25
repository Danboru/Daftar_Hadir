<?php

include "config.php";

$post_collection = $db->posts;

$criteria = array(
	"judul" => "Proses Instalasi MongoDB",
);

$delete_result = $post_collection->remove($criteria);

print_r( $delete_result); 

?>
