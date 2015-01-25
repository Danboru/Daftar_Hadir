<?php

include "config.php";

$post_collection = $db->posts;

$drop_collection_result = $post_collection->drop();
print_r( $drop_collection_result); 
echo "<br/>";

$drop_db_result = $db->drop();
print_r( $drop_db_result); 

?>
