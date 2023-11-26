<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tata Cara |Udinus Bersuara</title>
  <link rel="stylesheet" href="style/tatacara.css?version=<?php echo filemtime('style/tatacara.css'); ?>">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <!-- Header -->
  <nav style="background-color: #6495ED;">
    <div class="container">
      <div class="nav_brand">
        <a href="index.php" style="text-decoration: none; margin-top: 5px;">
          <img src="assets/img/LogoUdinus.jpg" alt="LogoUdinus" />
        </a>
        <a href="index.php" style="text-decoration: none;">
          <h4>
            Udinus<br />Bersuara
          </h4>
        </a>
      </div>
      <label class="burger_menu" style="top: 22px" for="burger" id="label">
        <input type="checkbox" name="burger" id="burger" />
      </label>
      <ul class="list_link" id="link">
        <li class="home"><a href="index.php">Home</a></li>
        <li class="cara"><a href="tatacara.php">Tata Cara</a></li>
        <li class="btn_login"><a href="mahasiswa/loginmahasiswa.php">Login</a></li>
      </ul>
      <?php if (isset($_SESSION['nim'])) { ?>
        <div class="btn">
          <a href="logout.php">Logout</a>
        </div>
      <?php } else { ?>
        <div class="btn">
          <a href="mahasiswa/loginmahasiswa.php">Login</a>
        </div>
      <?php } ?>
    </div>
  </nav>
  <!-- End of Header -->

  <!-- Main Content -->
  <main class="container">
    <h2 data-aos="fade-up" data-aos-duration="1500">TATA CARA PENGADUAN</h2>
    <section data-aos="fade-up" data-aos-duration="1500">
      <div class="description" style="background-color: #6495ED;">
        <div class="bottom_description"></div>
        <p class="bold" style="color: #000000">Anda harus Mahasiswa Universitas Dian Nuswantoro</p>
      </div>
    </section>
    <section data-aos="fade-up" data-aos-duration="1500">
      <div class="description" style="background-color: #6495ED;">
        <div class="bottom_description"></div>
        <p class="bold" style="color: #000000">Login Akun</p>
        <div class="desc">
          <p style="color: #000000">Login Akun Mahasiswa:</p>
          <ul>
            <li style="color: #000000">NIM: NIM MAHASISWA</li>
            <li style="color: #000000">Password: Password Akun Mahasiswa</li>
          </ul>
          <p style="color: #000000">Login Akun Admin:</p>
          <ul>
            <li style="color: #000000">NIM: NIM Admin</li>
            <li style="color: #000000">Password: Password Akun Admin</li>
          </ul>
        </div>
      </div>
    </section>
    <section data-aos="fade-up" data-aos-duration="1500">
      <div class="description" style="background-color: #6495ED;">
        <div class="bottom_description"></div>
        <p class="bold" style="color: #000000">Mahasiswa Melapor Dengan Memilih Kategori Pelaporan</p>
      </div>
    </section>
    <section data-aos="fade-up" data-aos-duration="1500">
      <div class="description" style="background-color: #6495ED;">
        <div class="bottom_description"></div>
        <p class="bold" style="color: #000000">Upload Foto Bukti Laporan yang Sesuai dengan yang Dilaporkan</p>
      </div>
    </section>
    <section data-aos="fade-up" data-aos-duration="1500">
      <div class="description" style="background-color: #6495ED;">
        <div class="bottom_description"></div>
        <p class="bold" style="color: #000000">
          Mahasiswa Mengisi Laporan Pada Tempat yang Disediakan
        </p>
      </div>
    </section>
    <section data-aos="fade-up" data-aos-duration="1500">
      <div class="description" style="background-color: #6495ED;">
        <div class="bottom_description"></div>
        <p class="bold" style="color: #000000">Submit laporan</p>
      </div>
    </section>
    <section data-aos="fade-up" data-aos-duration="1500">
      <div class="description" style="background-color: #6495ED;">
        <div class="bottom_description"></div>
        <p class="bold" style="color: #000000">Jika Admin, Masuk ke halaman Admin</p>
      </div>
    </section>
    <section data-aos="fade-up" data-aos-duration="1500">
      <div class="description" style="background-color: #6495ED;">
        <div class="bottom_description"></div>
        <p class="bold" style="color: #000000">Admin mengevaluasi laporan</p>
      </div>
    </section>
  </main>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer>
    <p class="container">Copyup
      &copy; 2023 by Kita Bersuara</p>
  </footer>
  <!-- End of Footer -->

  <!-- External Javascript -->
  <script src="mahasiswa/script.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>