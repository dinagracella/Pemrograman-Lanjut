<?php

// ==========================================
// CLASS MAHASISWA (Studi Case 2)
// ==========================================

class Mahasiswa
{
    private $nim;
    private $nama;
    private $ipk;

    public function __construct($nim, $nama, $ipk)
    {
        $this->setNim($nim);
        $this->setNama($nama);
        $this->setIpk($ipk);
    }

    // Setter NIM bersifat private
    private function setNim($nim)
    {
        if (!is_string($nim) || trim($nim) === '') {
            throw new Exception(
                "NIM harus berupa string dan tidak boleh kosong."
            );
        }

        $this->nim = $nim;
    }

    // Getter NIM bersifat public
    public function getNim()
    {
        return $this->nim;
    }

    // Setter nama bersifat public
    public function setNama($nama)
    {
        if (!is_string($nama) || trim($nama) === '') {
            throw new Exception(
                "Nama harus berupa string dan tidak boleh kosong."
            );
        }

        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    // Setter IPK bersifat public
    public function setIpk($ipk)
    {
        if (
            (!is_int($ipk) && !is_float($ipk))
            || $ipk < 0
            || $ipk > 4
        ) {
            throw new Exception(
                "IPK harus berupa integer/float dengan rentang 0 sampai 4."
            );
        }

        $this->ipk = $ipk;
    }

    public function getIpk()
    {
        return $this->ipk;
    }
}


// ==========================================
// PENGUJIAN MAHASISWA
// ==========================================

echo "\n=== PENGUJIAN MAHASISWA ===\n";

try {

    // Constructor dengan data valid
    $mahasiswa = new Mahasiswa(
        "10251002",
        "Dina Gracella Apnel Lengkong",
        3.5
    );

    echo "NIM  : " . $mahasiswa->getNim() . "\n";
    echo "Nama : " . $mahasiswa->getNama() . "\n";
    echo "IPK  : " . $mahasiswa->getIpk() . "\n";


    // ==========================================
    // PENGUJIAN PERUBAHAN NAMA
    // ==========================================

    echo "\n--- PENGUJIAN PERUBAHAN NAMA ---\n";

    try {

        $mahasiswa->setNama("");

    } catch (Exception $e) {

        echo "Nama ditolak: " . $e->getMessage() . "\n";
        echo "Nama tetap: " . $mahasiswa->getNama() . "\n";
    }


    // ==========================================
    // PENGUJIAN PERUBAHAN IPK
    // ==========================================

    echo "\n--- PENGUJIAN PERUBAHAN IPK ---\n";

    $ipkBaru = [0, 3.75, 4, -0.1, 4.1, "tiga"];

    foreach ($ipkBaru as $ipk) {

        try {

            $mahasiswa->setIpk($ipk);

            echo "IPK ";
            var_export($ipk);
            echo " -> DITERIMA";
            echo " | Nilai sekarang: " . $mahasiswa->getIpk() . "\n";

        } catch (Exception $e) {

            echo "IPK ";
            var_export($ipk);
            echo " -> DITOLAK: " . $e->getMessage();
            echo " | Nilai tetap: " . $mahasiswa->getIpk() . "\n";
        }
    }

} catch (Exception $e) {

    echo "Constructor ditolak: " . $e->getMessage() . "\n";
}


// ==========================================
// PENGUJIAN CONSTRUCTOR TIDAK VALID
// ==========================================

echo "\n=== PENGUJIAN CONSTRUCTOR TIDAK VALID ===\n";

try {

    // Nama sengaja dikosongkan untuk menguji validasi constructor
    $mahasiswaInvalid = new Mahasiswa(
        "10251002",
        "",
        3.5
    );

} catch (Exception $e) {

    echo "Constructor ditolak: " . $e->getMessage() . "\n";
}

?>
