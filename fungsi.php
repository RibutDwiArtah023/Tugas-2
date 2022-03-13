<?php
//code fungsi
function perkalian($number1, $number2)
{
    $x= $number1;
    $y= $number2;
    $hasil = $x + $y;
    return $hasil;
}
//untuk memanggil fungsi
$hasil1 =perkalian(7,9);
$hasil2 =perkalian(4,11);
$hasil3 =perkalian(13,8); 
//untuk memanggil 1
echo "hasil penjumlahan 1 = $hasil1 </br>";
//untuk memanggil 2
echo "hasil penjumlahan 2 = $hasil2 </br>";
//untuk memanggil 3
echo "hasil penjumlahan 3 = $hasil3 </br>";
?>