<?php

class mobil
{
    //properti
    var $warna;
    var $merek;
    var $ukuran;

    //operasi
    function maju($move_forward){
        $move_forward = "gaskeun mamank";
    }

    function mundur($move_backward){
        $mov_backward = "remkeun mamank";
    }
}

//inisiasi panggil objek melalui class
$kendaraan = new mobil();

//panggil fungsi yg ada di class
echo $kendaraan->maju($move_backward);

?>