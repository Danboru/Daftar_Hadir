<?php

include "config.php";

$db->createCollection("posts");

$post_collection = $db->posts;
$post = array(
	"judul" =>"PHP dan MongoDB",
	"penulis" => "Suparman",
	"isi" => "mari belajar membuat aplikasi dengan php dan mongodb <more/>",
	"tags" => "php, mongodb, web application"
);

$create_collection_result = $post_collection->insert($post);

print_r($create_collection_result);

?>
