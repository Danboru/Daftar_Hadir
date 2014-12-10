<?php

// menulis konfigurasi untuk aplikasi
$config['base_url'] = "http://localhost/daftar_hadir";

// koneksi ke database daftar_hadir di mongodb
$connection = new MongoClient();
$db = $connection->daftar_hadir;

?>
