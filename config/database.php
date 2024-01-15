<?php
// deklarasi parameter koneksi database
$host     = "localhost";                        // server database, default “localhost” atau “127.0.0.1”
$username = "root";                             // username database, default “root”
$password = "root";                                 // password database, default kosong
$database = "crudv2";                   // memilih database yang akan digunakan

// buat koneksi database
$mysqli = new mysqli($host, $username, $password, $database);

// cek koneksi
// jika koneksi gagal 
if ($mysqli->connect_error) {
	// tampilkan pesan gagal koneksi
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}