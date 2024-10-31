<?php
$n = 5; // jumlah baris

for ($i = 1; $i <= $n; $i++) {
    // cetak spasi
    for ($j = $i; $j < $n; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // cetak bintang
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
