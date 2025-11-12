<?php
session_start();

 $sesnim = "";
if (isset($_SESSION["sesnim"])): $sesnim = $_SESSION["sesnim"]; endif;

$sesnama = "";
if (isset($_SESSION["sesnama"])): $sesnama = $_SESSION["sesnama"]; endif;

$sestempat = "";
if (isset($_SESSION["sestempat"])): $sestempat = $_SESSION["sestempat"]; endif;

$sestgllahir = "";
if (isset($_SESSION["sestgllahir"])): $sestgllahir = $_SESSION["sestgllahir"]; endif;

$seshobi = "";
if (isset($_SESSION["seshobi"])): $seshobi = $_SESSION["seshobi"]; endif;

$sespasangan = "";
if (isset($_SESSION["sespasangan"])): $sespasangan = $_SESSION["sespasangan"]; endif;

$sespekerjaan = "";
if (isset($_SESSION["sespekerjaan"])): $sespekerjaan = $_SESSION["sespekerjaan"]; endif;

$sesortu = "";
if (isset($_SESSION["sesortu"])): $sesortu = $_SESSION["sesortu"]; endif;

$seskakak = "";
if (isset($_SESSION["seskakak"])): $seskakak = $_SESSION["seskakak"]; endif;

$sesadik = "";
if (isset($_SESSION["sesadik"])): $sesadik = $_SESSION["sesadik"]; endif;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="pendaftaran profil pengunjung">
       <h2>Profil pengunjung</h2>
      <form action="proses.php" method="POST">

        <label for="txtNim"><span>NIM:</span>
          <input type="text" id="txtNim" name="txtNim" placeholder="Masukkan nim" required autocomplete="nim">
        </label>

        <label for="txtNamaLengkap"><span>Nama lengkap:</span>
          <input type="NamaLengkap" id="txtNamaLengkap" name="txtNamaLengkap" placeholder="Masukkan Nama Lengkap" required autocomplete="nama lengkap">
        </label>

       <label for="txtTempatLahir"><span>Tempat Lahir:</span>
          <input type="TempatLahir" id="txtTempatLahir" name="txtTempatLahir" placeholder="Masukkan Tempat Lahir" required autocomplete="tempat lahir">
        </label>

          <label for="txtTanggalLahir"><span>Tanggal Lahir:</span>
          <input type="TanggalLahir" id="txtTanggalLahir" name="txtTanggalLahir" placeholder="Masukkan Tanggal Lahir" required autocomplete="tanggal lahir">
        </label>

        <label for="txtHobi"><span>Hobi:</span>
          <input type="Hobi" id="txtHobi" name="txtHobi" placeholder="Masukkan Hobimu" required autocomplete="hobi">
        </label>

        <label for="txtPasangan"><span>Nama Pasangan:</span>
          <input type="NamaPasangan" id="txtNamaPasangan" name="txtNamaPasangan" placeholder="Masukkan Nama Pasanganmu" required autocomplete="nama pasangan">
        </label>

         <label for="txtPekerjaan"><span>Pekerjaan:</span>
          <input type="NamaPekerjaan" id="txtPekerjaan" name="txtPekerjaan" placeholder="Masukkan pekerjaanmu" required autocomplete="pekerjaan">
        </label>

         <label for="txtNamaOrangTua"><span>Nama Orang Tua:</span>
          <input type="NamaOrangTua" id="txtNamaOrangTua" name="txtNamaOrangTua" placeholder="Masukkan Nama orantuamu" required autocomplete="nama orang tua">
        </label>

         <label for="txtNamaKakak"><span>Nama Kakak:</span>
          <input type="NamaKakak" id="txtNamaKakak" name="txtNamaKakak" placeholder="Masukkan Nama Kakakmu" required autocomplete="nama kakak">

           <label for="txtNamaAdek"><span>Nama Adek:</span>
          <input type="NamaAdek" id="txtNamaAdek" name="txtNamaAdek" placeholder="Masukkan Nama Adekmu" required autocomplete="nama adek">
        </label>
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>


    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $NIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama;
        ?> &#128526;
      </p>
      <p><strong>Tempat Lahir:</strong> <?php echo $tempat; ?></p>
      <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
      <p><strong>Hobi:</strong> Memasak, coding, dan bermain musik &#127926;</p>
      <p><strong>Pasangan:</strong> Belum ada &hearts;</p>
      <p><strong>Pekerjaan:</strong> Dosen di ISB Atma Luhur &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong> Bapak Setiawan dan Ibu Maria</p>
      <p><strong>Nama Kakak:</strong> Antonius Setiawan</p>
      <p><strong>Nama Adik:</strong> </p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>