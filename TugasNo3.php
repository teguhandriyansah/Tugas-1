<?php
//disini saya akan memberi contoh pada perkalian 
function perkalian($angka1, $angka2) {
 $hasil = $angka1 * $angka2;
 return $hasil;
}
//fungsi untuk hasil perkalian
function rumusperkalian($perkalian) {
// nilai yg dimasukkan 
 $nilai1 = 9;
 $nilai2 = 15;

echo "Kali ini akan menghitung rumus yang menggunakan perkalian yaitu Luas ".$perkalian."<br>";
echo "Hasil $perkalian dengan $nilai1 X $nilai2 = ".perkalian($nilai1, $nilai2);

}

rumusperkalian('Persegi Panjang');

?> 