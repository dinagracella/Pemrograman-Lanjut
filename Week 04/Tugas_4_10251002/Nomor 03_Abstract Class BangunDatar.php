
<?php

abstract class BangunDatar {
    abstract public function hitungLuas();
}

class Persegi extends BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

class Lingkaran extends BangunDatar {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        return pi() * $this->jariJari * $this->jariJari;
    }
}

class Segitiga extends BangunDatar {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }
}

echo "<h2>Perhitungan Luas Bangun Datar</h2>";

$persegi = new Persegi(5);
$lingkaran = new Lingkaran(7);
$segitiga = new Segitiga(10, 6);

echo "Luas Persegi: " . $persegi->hitungLuas() . "<br>";
echo "Luas Lingkaran: " . number_format($lingkaran->hitungLuas(), 2, ',', '.') . "<br>";
echo "Luas Segitiga: " . $segitiga->hitungLuas() . "<br>";

?>
