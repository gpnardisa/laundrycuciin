<?php

//mengisi array dua dimensi sekaligus mengisi element pada array
$nilai=array(
    array(90,65,83), //isi pada baris pertama 
    array(90,78,87), //isi pada baris kedua 
    array(78,90,78) // isi pada baris ketiga
);

//menampilkan teks 'Matriks A'
echo "<strong>Matriks A : </strong><br>";

//[n][m] : n adalah baris dan m adalah kolom
//selalu dihitung mulai dari nol
//misal $nilai[0][1] adalah baris pertama dan kolom kedua yg berisi nilai 65
echo $nilai[0][0]."   ".$nilai[0][1]."   ".$nilai[0][2]."<br>";
echo $nilai[1][0]."   ".$nilai[1][1]."   ".$nilai[1][2]."<br>";
echo $nilai[2][0]."   ".$nilai[2][1]."   ".$nilai[2][2]."<br><br>";
//<br> : break, untuk print di baris selanjutnya

?>