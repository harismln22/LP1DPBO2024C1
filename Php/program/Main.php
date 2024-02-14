<?php

require('dpr.php');

// membuat daftar untuk anggota dpr
$orang1 = new Dpr('bruh', "11", 'wkwk', 'GG');
$orang1->setFoto('Foto.png');
$orang2 = new Dpr('pokok', "12", 'kkkk', 'GG');
$orang2->setFoto('Foto1.jpg');
$orang3 = new Dpr('ANJAY', "13", 'jajaja', 'GG');
$orang3->setFoto('Foto3.jpg');


$listDpr = array($orang1, $orang2, $orang3); // memasukkan anggota tersebut ke dalam list
echo '<h2>'. "List of DPR". '</h2>'. '<br>';
echo "==========================". '<br>';
echo '<b>'. "Menambah anggota" . '</b>'. '</br>';
$orang1->tampil($listDpr); // menampilkan anggota

echo "==========================". '<br>';
echo '<b>'. "Mengubah nama" . '</b>'. '</br>';

if($orang1->ketemu($listDpr, "11") == 1) // jika id yang tersebut ketemu
{
	$orang1->Edit($listDpr, "11", "Haris", "Nama"); // maka akan masuk ke fungsi edit
}


if($orang1->ketemu($listDpr, "13") == 1) // jika id yang tersebut ketemu
{
	$orang1->Edit($listDpr, "13", "AHMAD", "Nama"); // maka akan masuk ke fungsi edit
}
echo "==========================". '<br>';
$orang1->tampil($listDpr);	// menampilkan anggota

echo "==========================". '<br>';
echo '<b>'. "Menghapus Data" . '</b>'. '</br>';
if($orang1->ketemu($listDpr, "12") == 1) // jika id yang tersebut ketemu
{
	$orang1->hapus($listDpr, "12"); // maka akan masuk ke fungsi edit
}
echo "==========================". '<br>';
$orang1->tampil($listDpr);	// menampilkan anggota

echo "==========================". '<br>';
echo '<b>'. "Mengubah bidang dan partai" . '</b>'. '</br>';

if($orang1->ketemu($listDpr, "13") == 1) // jika id yang tersebut ketemu
{
	$orang1->Edit($listDpr, "13", "PROGRAMMER", "Bidang"); // maka akan masuk ke fungsi edit
	$orang1->Edit($listDpr, "13", "RETRO", "Partai"); // maka akan masuk ke fungsi edit
}
echo "==========================". '<br>';
$orang3->tampil($listDpr);	// menampilkan anggota

echo "==========================". '<br>';
echo '<b>'. "Mengubah Foto" . '</b>'. '</br>';

if($orang1->ketemu($listDpr, "13") == 1) // jika id yang tersebut ketemu
{
	$orang1->Edit($listDpr, "13", 'Foto.png', "Foto"); // maka akan masuk ke fungsi edit
	$orang1->Edit($listDpr, "11", 'Foto3.jpg', "Foto"); // maka akan masuk ke fungsi edit
}
echo "==========================". '<br>';
$orang3->tampil($listDpr);	// menampilkan anggota

?>