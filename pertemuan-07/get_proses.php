<?php
//session_start();
//echo $_GET["txtNama"];
//echo $_GET["txtEmail"];
//echo $_GET["txtPesan"];
?>
<?php
session_start();
$_SESSION["nama"] = $_GET["txtNama"];
$_SESSION["email"] = $_GET["txtEmail"];
$_SESSION["pesan"] = $_GET["txtPesan"];
echo $_SESSION["nama"] . $_SESSION["email"] . $_SESSION["pesan"];
header(header: "Location: get.php");
?>