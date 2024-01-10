
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

<hr><?php
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
    echo "<br>";

    // soal 2
    $x = 10;
    $x += 5; 
    echo"<br>";
    echo "Nilai x setelah ditambahkan 5: " . $x . "<br>";

    $x -= 2;
    echo "Nilai x setelah dikurangkan 2: " . $x;
    echo "<br>";

    // soal 3
    $nilai1 = 15;
    $nilai2 = 10;

    $lebih_besar = $nilai1 > $nilai2;
    echo "<br>";
    echo "Apakah $nilai1 lebih besar dari $nilai2? " . ($lebih_besar ? "Ya" : "Tidak") . "<br>";

    $sama_dengan = $nilai1 == $nilai2;
    echo "Apakah $nilai1 sama dengan $nilai2? " . ($sama_dengan ? "Ya" : "Tidak");
    echo "<br>";

    // soal 4
    $benar = true;
    $salah = false;

    $test_and = $benar && $salah;
    echo "<br>";
    echo "Apakah keduanya true? " . ($test_and ? "Ya" : "Tidak") . "<br>";

    $test_or = $benar || $salah;
    echo "Apakah salah satunya true? " . ($test_or ? "Ya" : "Tidak");
    echo "<br>";

    // soal 5
    $hitung = 5;
    $hitung++; 
    echo "<br>";
    echo "Nilai hitung setelah di-increment: " . $hitung . "<br>";

    $hitung--; 
    echo "Nilai hitung setelah di-decrement: " . $hitung;
    echo "<br>";

    // soal 6
    $nama_depan = "azzam";
    $nama_belakang = "cahyadi";

    $nama_lengkap = $nama_depan . " " . $nama_belakang;
    echo "<br>";
    echo "Nama lengkap: " . $nama_lengkap;
    echo "<br>";

    // soal 7
    $a = 13;
    $b = 16;

    $rata_rata = ($a + $b) / 2;
    echo "<br>";
    echo "Rata-rata dari $a dan $b adalah: " . $rata_rata . "<br>";

    $lebih_besar_dari_5 = $rata_rata > 5;
    echo "Apakah rata-rata lebih besar dari 5? " . ($lebih_besar_dari_5 ? "Ya" : "Tidak");
    echo "<br>";
    ?>
    <?php
    for($x=7;$x>=1;$x--){
       for($y=7;$y>=$x;$y--){
        echo "*";
       }
       echo "<br>";
    }
    echo "<hr>";


    for($x=7;$x>=1;$x--){
        echo "$x";
    }
    for($c=7;$c>=1;$c--){
        echo "*";
    }
    echo "<br>";
    echo "<hr>";
    for($v=7;$v>=1;$v--){
        echo "*";
    }
    echo"<br>";
    echo"<hr>";

	$star=100;
	for( $a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
    $nama=["a","b","c"];
    echo $nama[2];
    $angka = array(1,2,3,4,5);
        echo "<br>";
        //menampilkan seluruh array
        //count ()=>menghitung panjang array/banyaknya data
        for($a=0;$a<count($angka);$a++){
            echo $angka[$a];
        }
        echo "<br>";
        echo"panjang array nama =".count($nama);

        echo "<br>";
        echo "isi array nama = ";
        foreach($nama as $data){
            echo $data . "";
        }
        //menghapus satu array indeks ke 1
        unset($nama[1]);
        echo "<br>";
        echo "isi array nama = ";
        foreach($nama as $data){
            echo $data . " ";
        }