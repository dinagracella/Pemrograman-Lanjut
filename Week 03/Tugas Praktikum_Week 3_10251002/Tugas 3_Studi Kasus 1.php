<?php

// ==========================================
// CLASS PERANGKAT (Studi Case 1)
// ==========================================

class Perangkat
{
    private $kodeProduk = "";
    private $stok = 0;

    public function __construct($kodeProduk, $stok)
    {
        $this->setKodeProduk($kodeProduk);
        $this->setStok($stok);
    }

    private function setKodeProduk($kodeProduk)
    {
        if (!is_string($kodeProduk) || !preg_match("/^[A-Z]{3}[0-9]{3}$/", $kodeProduk)) {
            throw new Exception(
                "Kode produk harus terdiri dari tepat 3 huruf kapital dan 3 angka."
            );
        }

        $this->kodeProduk = $kodeProduk;
    }

    public function getKodeProduk()
    {
        return $this->kodeProduk;
    }

    private function setStok($stok)
    {
        if (!is_int($stok) || $stok <= 0) {
            throw new Exception("Stok harus berupa integer positif.");
        }

        $this->stok = $stok;
    }

    public function getStok()
    {
        return $this->stok;
    }
}


// ==========================================
// PENGUJIAN KODE PRODUK
// ==========================================

echo "=== PENGUJIAN KODE PRODUK ===\n";

$kodeProduk = ["ABC123", "abc123", "AB123", "123ABC"];

foreach ($kodeProduk as $kode) {

    try {
        $perangkat = new Perangkat($kode, 10);

        echo "$kode -> DITERIMA\n";

    } catch (Exception $e) {

        echo "$kode -> DITOLAK: " . $e->getMessage() . "\n";
    }
}


// ==========================================
// PENGUJIAN STOK
// ==========================================

echo "\n=== PENGUJIAN STOK ===\n";

$dataStok = [1, 0, -1, '5', 5.5];

foreach ($dataStok as $stok) {

    try {
        $perangkat = new Perangkat("ABC123", $stok);

        echo "Stok ";
        var_export($stok);
        echo " -> DITERIMA\n";

    } catch (Exception $e) {

        echo "Stok ";
        var_export($stok);
        echo " -> DITOLAK: " . $e->getMessage() . "\n";
    }
}

?>