<?php
session_start();
$sesnama = $_POST["txtNama"];
$sesemail = $_POST["txtEmail"];
$sespesan = $_POST["txtPesan"];
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;
header("location: index.php");
?>
<?php
$sesnama = $_POST["txtNIM"];
$sesemail = $_POST["txtNamaLengkap"];
$sespesan = $_POST["txtTempatLahir"];
$sespesan = $_POST["txtTanggalLahir"];
$sespesan = $_POST["txtHobi"];
$sespesan = $_POST["txtPasangan"];
$sespesan = $_POST["txtPekerjaan"];
$sespesan = $_POST["txtNamaOrangTua"];
$sespesan = $_POST["txtNamaKakak"];
$sespesan = $_POST["txtNamaAdek"];
$_SESSION["sesnim"] = $sesnim;
$_SESSION["sesnamalengkap"] = $sesnamalengkap;
$_SESSION["sestempatlahir"] = $sestempatlahir;
$_SESSION["sestanggallahir"] = $sestanggallahir;
$_SESSION["seshobi"] = $seshobi;
$_SESSION["sespasangan"] = $sespasangan;
$_SESSION["sespekerjaan"] = $sespekerjaan;
$_SESSION["sesnamaorangtua"] = $sesnamaorangtua;
$_SESSION["sesnamakakak"] = $sesnamakakak;
$_SESSION["sesnamaadek"] = $sesnamaadek;
header("location: index.php");
?>