<?php

//lebih dahulu kita buat arraynya berisi 7 nama-nama hari
//kemudian disimpan ke dalam variabel $weeks
$weeks = [ "Senin", "Selasa", "Rabu", "Kamis",
            "Jum'at", "Sabtu", "Minggu" ];

//memberi judul nama nama hari
echo "<h3>Nama-Nama Hari : </h3>";

//perulangan foreach
//$weeks adalah nama array,
//$namaminggu adalah nama key (sebagai isi dari array)
foreach($weeks as $namaminggu){
    echo "$namaminggu<br>"; // <br> untuk menulis di line baru
}

?>