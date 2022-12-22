<?php

for($i = 10; $i > 0; $i--){
    $j = $i-1;
    if ($i>1){
        echo "Anak ayam turun $i, mati satu tinggal $j<br>";
    }
    else{
        echo "Anak ayam turun $i, mati satu tinggal induknya";
    }
}

?>