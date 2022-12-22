<?php

//lebih dahulu kita buat arraynya berisi 7 nama-nama hari
//kemudian disimpan ke dalam variabel $weeks
$weeks = [ "Senin", "Selasa", "Rabu", "Kamis",
            "Jum'at", "Sabtu", "Minggu" ];

//memberi judul nama nama hari
echo "<h3>Nama-Nama Hari : </h3>";

//perulangan menggunakan FOR
//count() untuk mengambil jumlah array yang ada di var $weeks
for($i=0;$i<count($weeks);$i++){ 
	echo $weeks[$i]."<br/>"; //<br> untuk menulis di line baru
}

?>