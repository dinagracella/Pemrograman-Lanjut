
<?php

abstract class BangunDatar {
    abstract public function hitungLuas();
}

class Persegi extends BangunDatar {
    public function __construct(private $sisi) {}

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

class Lingkaran extends BangunDatar {
    public function __construct(private $jariJari) {}

    public function hitungLuas() {
        return pi() * $this->jariJari * $this->jariJari;
    }
}

class Segitiga extends BangunDatar {
    public function __construct(private $alas, private $tinggi) {}

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }
}

function tampilkanLuas(BangunDatar $bangunDatar) {
    echo get_class($bangunDatar) . ": " .
        number_format($bangunDatar->hitungLuas(), 2, ',', '.') . "<br>";
}

echo "<h2>Function tampilkanLuas()</h2>";

tampilkanLuas(new Persegi(5));
tampilkanLuas(new Lingkaran(7));
tampilkanLuas(new Segitiga(10, 6));

?>
