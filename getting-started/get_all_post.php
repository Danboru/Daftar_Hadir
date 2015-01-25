<?php

include "config.php";

$post_collection = $db->posts;
$list_post = $post_collection->find();

echo "banyak post: ".$list_post->count()."<br/>";

echo "<ul>";
foreach ($list_post as $post){
	echo "<li>"; 
	echo $post['judul']." ditulis oleh ".$post['penulis']."<br/>";
	echo "tags: ".$post['tags']."<br/>";
	echo $post['isi']."<br/><br/>";
	echo "</li>";
}
echo "</ul>";

?> 
