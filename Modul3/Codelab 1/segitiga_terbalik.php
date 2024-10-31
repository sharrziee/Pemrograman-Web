<?php
$n = 5; // jumlah baris

for ($i = $n; $i >= 1; $i--) {
    // cetak spasi
    for ($j = $n; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    // cetak bintang
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
