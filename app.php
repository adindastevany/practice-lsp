<?php

/**
 * Aplikasi Penjualan Sepeda
 */

 // Koneksi Database
 $db = mysqli_connect("localhost", "root", "", "app-sepeda");

 if ($db) {
     return true;
 } else {
     echo mysqli_error($db);
 }

 function queryData($query)
 {
     global $db; // manggil variable ke luar object / global

     $hasil = mysqli_query($db, $query);
     $data = [];

     while ($allData = mysqli_fetch_assoc($hasil)) {
         $data[] = $allData;
     }

     return $data;
 }

 function daftarAkun($data)
 {
     global $db;

     $username = mysqli_real_escape_string($db, $data["username"]);
     $password = mysqli_real_escape_string ($db, $data["password"]);
     $no_telp = mysqli_real_escape_string($db, $data["no_telp"]);

    
     $password = password_hash($password, PASSWORD_DEFAULT);
     $queryDaftar = "INSERT INTO users VALUES(id, '$username', '$password', 'no_telp', 2)";
     mysqli_query($db, $queryDaftar);
     return mysqli_affected_rows($db);
 }