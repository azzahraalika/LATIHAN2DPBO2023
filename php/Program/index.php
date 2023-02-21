<?php


// Saya [Azzahra Alika Putri Yudha] [2105899]
// mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
// Aamiin.


//memanggil file class Human, Mahasiswa dan Siak agar bisa memberikan inputan dan print output
include "Human.php";
include "Mahasiswa.php";
include "Siak.php";

//hardcode inputan untuk data class Human
$khuman = new Human();
$khuman->setNama("Azzahra Alika");
$khuman->setNik("2105899");
$khuman->setKelamin("P");

//meminta untuk print output pada class Human
echo "<hr>";
echo "<h3>DATA HUMAN</h3>";
echo "<hr>";

echo '<table>';
echo '<tr><td>Nama</td><td>:</td><td>' . $khuman->getNama() . '</td></tr>';
echo '<tr><td>NIK</td><td>:</td><td>' .  $khuman->getNik() . '</td></tr>';
echo '<tr><td>Jenis Kelamin</td><td>:</td><td>' . $khuman->getKelamin() . '</td></tr>';

echo '</table>';
echo '<hr>';

//hardcode inputan data class Mahasiswa
$kmhs = new Mahasiswa();
$kmhs->setNama("Azzahra Alika");
$kmhs->setNik("2105899");
$kmhs->setKelamin("P");
$kmhs->setProdi("IlmuKomputer");
$kmhs->setFakultas("FPMIPA");

//meminta untuk print output pada class Mahasiswa
echo "<hr>";
echo "<h3>DATA MAHASISWA</h3>";
echo "<hr>";

echo '<table>';
echo '<tr><td>Nama</td><td>:</td><td>' . $kmhs->getNama() . '</td></tr>';
echo '<tr><td>NIM</td><td>:</td><td>' .  $kmhs->getNik() . '</td></tr>';
echo '<tr><td>Program Studi</td><td>:</td><td>' . $kmhs->getProdi() . '</td></tr>';
echo '<tr><td>Fakultas</td><td>:</td><td>' . $kmhs->getFakultas() . '</td></tr>';
echo '<tr><td>Jenis Kelamin</td><td>:</td><td>' . $kmhs->getKelamin() . '</td></tr>';

echo '</table>';
echo '<hr>';

//hardcode untuk inputan data class Siak
$ksiak = new Siak();
$ksiak->setNama("Azzahra Alika");
$ksiak->setNik("2105899");
$ksiak->setKelamin("P");
$ksiak->setProdi("Ilmu Komputer");
$ksiak->setFakultas("FPMIPA");
$ksiak->setUniv("Universitas Pendidikan Indonesia");
$ksiak->setEmail("azzahraalika31@upi.edu");

//meminta untuk print output class Siak
echo "<hr>";
echo "<h3>DATA SIVITAS AKADEMIK</h3>";
echo "<hr>";

echo '<table>';
echo '<tr><td>Nama</td><td>:</td><td>' . $ksiak->getNama() . '</td></tr>';
echo '<tr><td>NIM</td><td>:</td><td>' .  $ksiak->getNik() . '</td></tr>';
echo '<tr><td>Program Studi</td><td>:</td><td>' . $ksiak->getProdi() . '</td></tr>';
echo '<tr><td>Fakultas</td><td>:</td><td>' . $ksiak->getFakultas() . '</td></tr>';
echo '<tr><td>Universitas</td><td>:</td><td>' . $ksiak->getUniv() . '</td></tr>';
echo '<tr><td>Email</td><td>:</td><td>' . $ksiak->getEmail() . '</td></tr>';
echo '<tr><td>Jenis Kelamin</td><td>:</td><td>' . $ksiak->getKelamin() . '</td></tr>';

echo '</table>';
echo '<hr>';

?>