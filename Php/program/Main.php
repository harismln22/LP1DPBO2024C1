<?php

require('dpr.php');


$orang1 = new Dpr('bruh', "11", 'wkwk', 'GG');
$orang1->setFoto('Foto.png');
$orang2 = new Dpr('pokok', "12", 'kkkk', 'GG');
$orang2->setFoto('Foto1.jpg');
$orang3 = new Dpr('ANJAY', "13", 'jajaja', 'GG');
$orang3->setFoto('Foto3.jpg');


$listDpr = array($orang1, $orang2, $orang3);
echo '<h2>'. "List of DPR". '</h2>'. '<br>';
echo "==========================". '<br>';
echo '<b>'. "Menambah anggota" . '</b>'. '</br>';
$orang1->tampil($listDpr);

echo "==========================". '<br>';
echo '<b>'. "Mengubah nama" . '</b>'. '</br>';

if($orang1->ketemu($listDpr, "11") == 1)
{
	$orang1->Edit($listDpr, "11", "Haris", "Nama");
}


if($orang1->ketemu($listDpr, "13") == 1)
{
	$orang1->Edit($listDpr, "13", "AHMAD", "Nama");
}
echo "==========================". '<br>';
$orang1->tampil($listDpr);	

echo "==========================". '<br>';
echo '<b>'. "Menghapus Data" . '</b>'. '</br>';
if($orang1->ketemu($listDpr, "12") == 1)
{
	$orang1->hapus($listDpr, "12");
}
echo "==========================". '<br>';
$orang1->tampil($listDpr);	

echo "==========================". '<br>';
echo '<b>'. "Mengubah bidang dan partai" . '</b>'. '</br>';

if($orang1->ketemu($listDpr, "13") == 1)
{
	$orang1->Edit($listDpr, "13", "PROGRAMMER", "Bidang");
	$orang1->Edit($listDpr, "13", "RETRO", "Partai");
}
echo "==========================". '<br>';
$orang3->tampil($listDpr);	

echo "==========================". '<br>';
echo '<b>'. "Mengubah Foto" . '</b>'. '</br>';

if($orang1->ketemu($listDpr, "13") == 1)
{
	$orang1->Edit($listDpr, "13", 'Foto.png', "Foto");
	$orang1->Edit($listDpr, "11", 'Foto3.jpg', "Foto");
}
echo "==========================". '<br>';
$orang3->tampil($listDpr);	

?>