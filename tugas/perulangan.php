<?php

       //saol 1
       echo " <h2> Soal 1 </h2>";
       $array =[10, 5, 8, 21, 15, 32]; 
       $jumlah = 0;
       foreach ($array as $angka) {
           if (is_int($angka)) {
               $jumlah += $angka;
           }
       }
       echo "Jumlah bilangan bulat dalam array = $jumlah";
       
       echo "<br>";
       echo "<br>";
       echo "<hr>";
       
       //soal 2
       echo "<h2> Soal 2 </h2>";
       
       echo "Jawaban * ";
       echo "<br>";
       echo "<br>";
         $bintang = 5;
         for($x = 1; $x <= $bintang; $x++) {
           for($j = 1; $j <= $bintang - $x; $j++) {     
           }
           for($k = 1; $k <= $x; $k++) {
             echo "*";
           }
           echo "<br>";
         }
       echo "<hr>";
       
       //soal 3
       echo "<h2> Soal 3 </h2>";
       
       $angka =[34, 56, 12, 78, 45, 92];
       $jumlah = 92;
       foreach ($angka as $array){
           if (is_int($angka)) {
               $jumlah += $angka;
           }
       }
       echo "Jumlah angka besar = $jumlah";
       echo "<br>";
       if ($angka >= 12) {
           echo "Jumlah angka terkecil =   12";
       } 
       echo "<br>";
       echo "<br>";
       echo "<hr>";
       
       //soal 4
       echo "<h2> Soal 4 </h2>";
       
       $kalimat = "Aku punya ini dan kamu punya itu";
       echo "Ada sebuah kalimat dibawah ini yaitu : " . "<br>" . $kalimat;
       echo  "<br>";
       echo  "<br>";
       
       $jumlahkataA = 0;
       
       for ($a = 0; $a <32; $a++){
           if ($kalimat [$a] == 'a' || $kalimat[$a] == 'A'){
               $jumlahkataA++;
           }
       }
       echo "Jumlah kata A dalam terks tersebut adalah = $jumlahkataA";
       echo "<br>";
       echo "<br>";
       echo "<hr>";
       
       //soal 5
       echo "<h2> Soal 5 </h2>";
       
       $angkaarray = array(25, 18, 36, 42, 30, 55);
       echo "Ada sebuah angka dibawah ini = ";
       echo "<br>";
       for ($a = 0;$a <=4;$a++) {
           echo $angkaarray[$a] . "<br>";
       }
       
       $totalangkaarray = 0;
       foreach ($angkaarray as $angkaarraybulat){
           $totalangkaarray += $angkaarraybulat;
       }
       $jumlahangkaarray = count($angkaarray);
       $rata_rata = $totalangkaarray / $jumlahangkaarray;
       
       echo "Rata-rata dari angka dalam array adalah = " . $rata_rata . "<br>";
       
       echo "Angka yang lebih besar dari rata-rata array = ";
       foreach($angkaarray as $nilai){
           if ($nilai > $rata_rata){
               echo $nilai . " ";
           }
       }
       ?>