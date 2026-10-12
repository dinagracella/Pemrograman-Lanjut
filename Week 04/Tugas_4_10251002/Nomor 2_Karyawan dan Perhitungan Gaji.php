<?php

// Parent Class
class Karyawan
{
    protected $nama;
    protected $gajiPokok;

    public function __construct($nama, $gajiPokok)
    {
        $this->nama = $nama;
        $this->gajiPokok = $gajiPokok;
    }

    public function hitungGaji()
    {
        return $this->gajiPokok;
    }

    public function tampilkanGaji()
    {
        echo "Nama       : " . $this->nama . "<br>";
        echo "Total Gaji : Rp " . $this->hitungGaji() . "<br>";
    }
}

// Child Class KaryawanTetap
class KaryawanTetap extends Karyawan
{
    public function hitungGaji()
    {
        // Gaji pokok + tunjangan 20%
        return $this->gajiPokok + ($this->gajiPokok * 0.20);
    }
}

// Child Class KaryawanKontrak
class KaryawanKontrak extends Karyawan
{
    public function hitungGaji()
    {
        // Gaji pokok + tunjangan 10%
        return $this->gajiPokok + ($this->gajiPokok * 0.10);
    }
}

// Membuat object
$tetap = new KaryawanTetap("Dina", 5000000);
$kontrak = new KaryawanKontrak("Gracella", 5000000);

// Menampilkan hasil
echo "<h3>Karyawan Tetap</h3>";
$tetap->tampilkanGaji();

echo "<br>";

echo "<h3>Karyawan Kontrak</h3>";
$kontrak->tampilkanGaji();

?>
