<?php
require_once "GymMembership.php";

// Fungsi untuk menampilkan data anggota
function tampilkan($anggota)
{
    $hasil = $anggota->cekData();

    if ($hasil == "Valid") {
        echo "Nama: " . $anggota->getMemberName() . "<br>";
        echo "Jenis: " . $anggota->getMembershipType() . "<br>";
        echo "Durasi: " . $anggota->getDuration() . " bulan<br>";
        echo "Status: Data valid, berhasil disimpan<br>";
    } else {
        echo "Status: Data tidak valid<br>";
        echo "Alasan: " . $hasil . "<br>";
    }
}

// Membuat objek anggota
$anggota1 = new GymMembership("Andi", "Premium", 3);
$anggota2 = new GymMembership("Budi", "Basic", 1);
$anggota3 = new GymMembership("", "Standard", 6);
$anggota4 = new GymMembership("   ", "Basic", 2);
$anggota5 = new GymMembership("Citra", "Gold", 3);
$anggota6 = new GymMembership("Dewi", "Premium", 0);
$anggota7 = new GymMembership("Eka", "Standard", -2);
$anggota8 = new GymMembership("", "VIP", 0);
?>

<h1>Data Anggota Gym</h1>

<h3>Anggota 1</h3>
<?php tampilkan($anggota1); ?>

<h3>Anggota 2</h3>
<?php tampilkan($anggota2); ?>

<h3>Anggota 3</h3>
<?php tampilkan($anggota3); ?>

<h3>Anggota 4</h3>
<?php tampilkan($anggota4); ?>

<h3>Anggota 5</h3>
<?php tampilkan($anggota5); ?>

<h3>Anggota 6</h3>
<?php tampilkan($anggota6); ?>

<h3>Anggota 7</h3>
<?php tampilkan($anggota7); ?>

<h3>Anggota 8</h3>
<?php tampilkan($anggota8); ?>
