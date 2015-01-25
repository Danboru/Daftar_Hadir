<?php

include "config.php";

$post_collection = $db->posts;

$post = array(
			array(
				"judul" =>"Instalasi MongoDB",
				"penulis" => "Suparman",
				"isi" => "mari belajar cara instalasi mongodb <more/>",
				"tags" => "php, mongodb, web application"
			),
			array(
				"judul" =>"Instalasi Driver MongoDB untuk PHP",
				"penulis" => "Suparmin",
				"isi" => "mari belajar cara instalasi  driver php untuk mongodb <more/>",
				"tags" => "php, mongodb, web application"
			),
			array(
				"judul" =>"Python dan MongoDB dengan PyMongo",
				"penulis" => "Suparmin",
				"isi" => "mari belajar cara membangun aplikasi dengan Python dan MongoDB menggunakan PyMongo <more/>",
				"tags" => "python, pymongo, mongodb, web application"
			),
			
);

$post_collection->batchInsert($post);

?>
