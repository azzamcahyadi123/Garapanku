

<hr>
<?php
$nama = "azzam cahyadi";
echo "Nama saya adalah :  " . $nama;
echo "<br>";
$umur = 15;
echo "Umur saya " . $umur;
echo "<br>";
echo "Selamat datang $nama dan anda berumur $umur";
echo "<br>";
echo "<br>";
$nama_barang = "boneka";
echo "nama barang nya adalah " . $nama_barang;
echo "<br>";
$harga_barang = 200000.00;
echo "harga barang : " . $harga_barang;
echo "<br>";
echo "<br>";
$is_valid = false;
if ($is_valid) {
    echo "Barang tersedia";

	
}
 else {
        echo "Barang tidak tersedia";
    }
?>

<hr>

<?php
$nama = "cahyadi";
echo "Nama saya adalah :  " . $nama;
echo "<br>";
$umur = 15;
echo "Umur saya " . $umur;
echo "<br>";
echo "Selamat datang $nama dan anda berumur $umur";
echo "<br>";
echo "<br>";
$nama_barang = "boneka";
echo "nama barang nya adalah " . $nama_barang;
echo "<br>";
$harga_barang = 200000.00;
echo "harga barang : " . $harga_barang;
echo "<br>";
echo "<br>";
$is_valid = false;
if ($is_valid) {
    echo "Barang tersedia";

	
}
 else {
        echo "Barang tersedia";
    }
?>

<hr>

echo"<br>";
echo"<br>";
    // soal 1
    $angka1 = 10;
    $angka2 = 3;

    $penjumlahan = $angka1 + $angka2;
    $pengurangan = $angka1 - $angka2;
    $perkalian = $angka1 * $angka2;
    $pembagian = $angka1 / $angka2;

    echo "Hasil Penjumlahan: " . $penjumlahan . "<br>";
    echo "Hasil Pengurangan: " . $pengurangan . "<br>";
    echo "Hasil Perkalian: " . $perkalian . "<br>";
    echo "Hasil Pembagian: " . $pembagian . "<br>";

    $sisa_pembagian = $angka1 % $angka2;
    echo "Sisa Pembagian: " . $sisa_pembagian;

    // soal 2
    $x = 10;
    $x += 5; 
    echo"<br>";
    echo "Nilai x setelah ditambahkan 5: " . $x . "<br>";

    $x -= 2;
    echo "Nilai x setelah dikurangkan 2: " . $x;

    // soal 3
    $nilai1 = 15;
    $nilai2 = 10;

    $lebih_besar = $nilai1 > $nilai2;
    echo "<br>";
    echo "Apakah $nilai1 lebih besar dari $nilai2? " . ($lebih_besar ? "Ya" : "Tidak") . "<br>";

    $sama_dengan = $nilai1 == $nilai2;
    echo "Apakah $nilai1 sama dengan $nilai2? " . ($sama_dengan ? "Ya" : "Tidak");

    // soal 4
    $benar = true;
    $salah = false;

    $test_and = $benar && $salah;
    echo "<br>";
    echo "Apakah keduanya true? " . ($test_and ? "Ya" : "Tidak") . "<br>";

    $test_or = $benar || $salah;
    echo "Apakah salah satunya true? " . ($test_or ? "Ya" : "Tidak");


 
