<?php

//memasukkan data ke dalam array dan menyimpannya ke dalam variabel
$karnivora=array("Harimau","Anjing","Singa");
$herbivora=array("Sapi","Kambing","Jerapah");
$omnivora=array("Ayam","Kucing","Monyet");

//melakukan perulangan sebanyak 3 kali
echo "<b>Karnivora</b><br><br>";
for($n=0;$n<3;$n++) //kunci array dimulai dari 0
echo "• ",$karnivora[$n],"<br>"; //menampilkan isi array 0,1,dan 2

//untuk herbivora logikanya sama seperti karnivora
echo "<br><b>Hebivora</b><br><br>";
for($n=0;$n<3;$n++)
echo "• ",$herbivora[$n],"<br>";

echo "<br><b>Omnivora</b><br><br>";
for($n=0;$n<3;$n++)
echo "• ",$omnivora[$n],"<br>";

?>