<?php
  $host = "localhost"; 
  $user = "id15509334_root";
  $pass = "5)~<MbOD$!<?4>hO";
  $nama_db = "id15509334_crudproduk"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysqli_connect_error());
  }
?>