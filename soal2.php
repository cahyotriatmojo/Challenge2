<?php

class Orang
{
 public $nama;
 public $skor1;
 public $skor2;


 public function __construct($nama, $skor1, $skor2)
 {
  $this->nama = $nama;
  $this->skor1 = $skor1;
  $this->skor2 = $skor2;
 }

 public function hitungMassa()
 {
  $bmi = $this->skor1 / ($this->skor2 * $this->skor2);
  return $bmi;
 }
}

class Hasil    //untuk mengelola dan menampilkan hasil
{
 public $tim1;
 public $tim2;

 public function __construct($tim1, $tim2) //UNTUK inisialisasi objek new Tim()
 {                              //FUNGSI construct metode yg akan dieksekusi secara otomatis setiap kali sebuah objek dari kelas tersebut dibuat
  $this->tim1 = $tim1;
  $this->tim2 = $tim2;
 }

 public function tampilkanHasil()
 {

  $hasilMassa1 = $this->tim1->hitungMassa();  //$hasilMassa1 variabel yg menyimpan dari tim1
  $hasilMassa2 = $this->tim2->hitungMassa();

  echo " {$this->tim1->nama}: " . $this->tim1->hitungMassa() . "<br>";
  echo " {$this->tim2->nama}: " . $this->tim2->hitungMassa() . "<br>";
  echo "<br>";
  echo "====================";
  echo "=========================";

  if ($hasilMassa1 > $hasilMassa2) {
   $markHigherBMI = true;
  } else {
   $markHigherBMI = false;
  }

  echo "<p>Mark memiliki BMI lebih tinggi dari John = ";
  if ($markHigherBMI) {
   echo "TRUE";
  } else {
   echo "FALSE";
  }
  echo "</p>";

 }
}

// Data uji inputan
echo "<h3>Data 1</h3>";
$mark1 = new Orang("Mark", 78, 1.69);
$john1 = new Orang("John", 92, 1.95);
$hasil1 = new Hasil($mark1, $john1);
$hasil1->tampilkanHasil();

echo "<h3>Data 2</h3>";
$mark2 = new Orang("Mark", 95, 1.88);
$john2 = new Orang("John", 85, 1.76);
$hasil2 = new Hasil($mark2, $john2);
$hasil2->tampilkanHasil();

?>