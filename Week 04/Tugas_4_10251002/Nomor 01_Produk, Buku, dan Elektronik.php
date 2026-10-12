
<?php

class Produk {
    protected $nama;
    protected $harga;
    protected $stok;

    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";
    }
}

class Buku extends Produk {
    private $penulis;

    public function __construct($nama, $harga, $stok, $penulis) {
        parent::__construct($nama, $harga, $stok);
        $this->penulis = $penulis;
    }

    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "Penulis: " . $this->penulis . "<br>";
    }
}

class Elektronik extends Produk {
    private $garansi;

    public function __construct($nama, $harga, $stok, $garansi) {
        parent::__construct($nama, $harga, $stok);
        $this->garansi = $garansi;
    }

    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "Garansi: " . $this->garansi . "<br>";
    }
}

echo "<h2>Informasi Produk</h2>";

$buku = new Buku("Laskar Pelangi", 85000, 20, "Andrea Hirata");
$buku->tampilkanInfo();

echo "<hr>";

$elektronik = new Elektronik("Laptop", 7500000, 5, "2 Tahun");
$elektronik->tampilkanInfo();

?>
