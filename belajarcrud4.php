<?php

class manusia
{
    //properti class manusia
    var $nama;
    var $warna;

    //fungsi dari manusia
    function tampilkan_nama(){
        return "nama saya adiprima raharja di panggil bonge";
    }

    function tampilkan_warna(){
        return "warna saya hitam";
    }
}
//inisiasi class manusia
$orang = new manusia();

//panggil fungsi tampilkan nama
echo $orang->tampilkan_nama();

//panggil fungsi tampilkan warna
echo $orang->tampilkan_warna();
?>