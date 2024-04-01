<?php

class Tim
{
    public $nama;
    public $skor1;
    public $skor2;
    public $skor3;

    public function __construct($nama, $skor1, $skor2, $skor3)
    {
        $this->nama = $nama;
        $this->skor1 = $skor1;
        $this->skor2 = $skor2;
        $this->skor3 = $skor3;
    }

    public function hitungRataRata()
    {
        return ($this->skor1 + $this->skor2 + $this->skor3) / 3;
    }
}

class Hasil
{
    public $tim1;
    public $tim2;

    public function __construct($tim1, $tim2)
    {
        $this->tim1 = $tim1;
        $this->tim2 = $tim2;
    }

    public function tampilkanHasil()
    {
        $rata_rata_tim1 = $this->tim1->hitungRataRata();
        $rata_rata_tim2 = $this->tim2->hitungRataRata();

        echo "Rata-rata skor untuk Tim {$this->tim1->nama}: " . $this->tim1->hitungRataRata() . "<br>";
        echo "Rata-rata skor untuk Tim {$this->tim2->nama}: " . $this->tim2->hitungRataRata() . "<br>";
        echo "<br>";
        echo "====================";
        echo "===============================";

        if ($rata_rata_tim1 > $rata_rata_tim2 && $rata_rata_tim1 >= 100) {
            echo "Tim {$this->tim1->nama} memenangkan pertandingan <br>";
        } elseif ($rata_rata_tim1 && $rata_rata_tim2 <= 100) {
            echo "Tim Tidak ada pemenang <br>";
        } elseif ($rata_rata_tim1 < $rata_rata_tim2) {
            echo "Tim {$this->tim2->nama} memenangkan pertandingan <br>";
        } else {
            echo "Pertandingan berakhir imbang <br>";
        }
    }
}

// Data uji inputan
echo "<h3>Data 1</h3>";
$lumba1 = new Tim("lumba-lumba", 96, 108, 89);
$koala1 = new Tim("koala", 88, 91, 110);
$hasil1 = new Hasil($lumba1, $koala1);
$hasil1->tampilkanHasil();

echo "<h3>Bonus 1</h3>";
$lumba2 = new Tim("lumba-lumba", 97, 112, 101);
$koala2 = new Tim("koala", 109, 95, 123);
$hasil2 = new Hasil($lumba2, $koala2);
$hasil2->tampilkanHasil();

echo "<h3>Bonus 2</h3>";
$lumba3 = new Tim("lumba-lumba", 97, 112, 101);
$koala3 = new Tim("koala", 109, 95, 106);
$hasil3 = new Hasil($lumba3, $koala3);
$hasil3->tampilkanHasil();

?>