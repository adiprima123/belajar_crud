<?php
//belajar koneksi database
$servername = "localhost";
$database = "db_perpusweb";
$username = "root";
$password = "";

//membuat koneksi
$connect = mysqli_connect($servername,$database,$username,$password);

//cek koneksi
if(!$connect){
    echo die("wkwk ga konek " . mysqli_connect_error());
}else{
    echo "akhirnya konek"; . mysqli_close($connect);
}

?>