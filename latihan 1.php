<?php

$namalengkap = "Bima Al Machri";
$umur = "16 tahun";
$kelas = "X-RPL 2";
$TTL = "Shibuya, 13 April - 2007";
$nomorhp = "081214039815";
$Alamat = "jl. Abdul Muis no.44, Jakarta Pusat";

function MyBiodata (){
global $namalengkap,$umur,$kelas,$TTL,$nomorhp,$Alamat;
echo "nama : $namalengkap <br />";
echo "umur : $umur <br />";
echo "kelas : $kelas <br />";
echo "Tempat Tanggal Lahir : $TTL <br />";
echo "nomor HP yang dapat di hubungi: $nomorhp <br />";
echo "alamat yang dapat dikunjunngi: $Alamat <br />";
}
echo MyBiodata ();
?>