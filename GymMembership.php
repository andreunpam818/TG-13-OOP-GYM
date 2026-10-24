<?php

// Class GymMembership
// Dipakai untuk menyimpan data anggota gym

class GymMembership
{
    private $memberName;
    private $membershipType;
    private $duration;

    // Constructor: jalan otomatis saat objek dibuat
    public function __construct($nama, $jenis, $durasi)
    {
        $this->memberName = $nama;
        $this->membershipType = $jenis;
        $this->duration = $durasi;
    }

    // Getter
    public function getMemberName()
    {
        return $this->memberName;
    }

    public function getMembershipType()
    {
        return $this->membershipType;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    // Mengecek data, hasilnya berupa tulisan
    public function cekData()
    {
        if (trim($this->memberName) == "") {
            return "Nama tidak boleh kosong";
        } else if ($this->membershipType != "Basic" && $this->membershipType != "Standard" && $this->membershipType != "Premium") {
            return "Jenis keanggotaan harus Basic, Standard, atau Premium";
        } else if ($this->duration < 1) {
            return "Durasi minimal 1 bulan";
        } else {
            return "Valid";
        }
    }
}
?>
