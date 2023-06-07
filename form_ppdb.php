<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMA VETERAN- Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.php"><img src="assets/img/logo.png" alt="" class="resize"></a>
      <h1 class="logo me-auto"><a href="index.php">SMA Veteran</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php">Profil Sekolah</a></li>
              <li><a href="sejarah.php">Sejarah</a></li>
              <li><a href="visimisi.php">Visi & Misi</a></li>
            </ul>
            <li class="dropdown"><a href="#"><span>Jurusan</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="jurusan.php">IPA</a></li>
                <li><a href="jurusan.php">IPS</a></li>
              </ul>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Info Sekolah</a></li>
              <li><a href="form_ppdb.php">Daftar</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="admin.php">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Form Pendaftaran</h2>
        <p>Pengumuman hasil PPDB tanggal 20 Juni 2023 </p>
      </div>
    </div><!-- End Breadcrumbs -->

      <div style="margin-top: 40px;" class="col d-flex justify-content-center">
        <div class="col-lg-3">
          <div class="card" style="background-color: #5fcf80; color: white;">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Total Pendaftar</h5>
                <?php 
                  require 'connection.php';
                  $query = "SELECT * FROM form_siswa";
                  $result = $mysqli->query($query);
                  $count = $result->num_rows;
                ?>
                <p class="card-text" style="text-align: center;"><?php echo "$count";?></p>
              </div>
            </div>
          </div>
        </div>
  
    <div class="card">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item" >
            <a class="btn btn-success" href="#siswa">Siswa</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-light" href="#ortu">Orang Tua</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-light" href="#akademik">Akademik</a>
          </li>
        </ul>
      </div>

      <div class="card-body">
        <form class="row g-3" method="post" action="aksi.php" enctype="multipart/form-data">
          <section id="siswa">
            <h5 class="card-title">Form Data Diri Calon Siswa Baru</h5>
              <!--No Pendaftar Auto Increment-->
              <div class="col-12">
                <label for="inputName4" class="col-sm-2 col-form-label">Nama Pendaftar</label>      
                <input type="text" class="form-control" name="pendaftarNama" placeholder="Masukkan Nama Anda" required>
              </div>
              <div class="col-12">
                <label for="inputName4" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" name="pendaftarSMP" placeholder="Masukkan Asal SMP Anda" required>
              </div>
              <div class="col-12">
                <label for="inputName4" class="form-label">NISN</label>
                <input type="text" class="form-control" name="pendaftarNISN" placeholder="Masukkan 10 Digit NISN Anda" required>
              </div>
              <div class="col-12">
                <label for="nomorHP" class="form-label">No.Handphone</label>
                <input type="text" class="form-control" name="pendaftarHP" placeholder="contoh: 08123456789" required>
              </div>
              <div class="col-12">
                <label for="inputName4" class="form-label">Jenis Kelamin</label>      
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pendaftarJK" value="Laki-Laki" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Laki-Laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pendaftarJK" value="Perempuan">
                  <label class="form-check-label" for="gridRadios2">
                    Perempuan
                  </label>
                </div>
              </div>
              <div class="col-12">
                <label for="inputName4" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="TanggalLahir" placeholder="Tanggal Lahir">
              </div>
              <div class="col-12">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" name="pendaftarAgama" placeholder="Masukkan Agama Anda">
              </div>                           
              <div class="col-12">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" placeholder="Masukkan Alamat Anda" name="pendaftarAlamat" style="height: 100px;"></textarea>
              </div>
          </section>
          <section id="ortu">
          <div class="card-header" style="margin-bottom: 80px;">
            <ul class="nav nav-pills card-header-pills">
              <li class="nav-item" >
                <a class="btn btn-light" href="#siswa">Siswa</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-success" href="#ortu">Orang Tua</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-light" href="#akademik">Akademik</a>
              </li>
            </ul>
          </div>
              <h5 class="card-title">Form Orang Tua / Wali</h5>
              <div class="col-12">     
                <label for="inputName4" class="form-label">Nama Orang Tua/Wali</label>      
                <input type="text" class="form-control" name="ortuNama4" placeholder="Masukkan Nama Anda">
              </div>
              <div class="col-12">
                <label for="inputName4" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="ortuTL" placeholder="Tanggal Lahir">
              </div>
              <div class="col-12">
                <label class="col-sm-4 col-form-label">Pendidikan Terakhir Orang Tua / Wali</label>
                <div class="col-sm-12">
                  <select class="form-select" aria-label="" name="ortuPendidikan">
                    <option selected>Silakan Pilih</option>
                    <option value="1">SD Sederajat</option>
                    <option value="2">SMP Sederajat</option>
                    <option value="3">SMA Sederajat</option>
                    <option value="4">D1/D2/D3/D4 Sederajat</option>
                    <option value="5">S1 Sederajat</option>
                    <option value="6">S2 Sederajat</option>
                    <option value="7">S3 Sederajat</option>
                    <option value="8">Tidak Sekolah</option>
                    <option value="9">Tidak Tamat Sekolah</option>
                  </select>
                </div>
              </div>             
              <div class="col-12">
                <label class="col-sm-4 col-form-label">Pekerjaan Orang Tua / Wali</label>
                <div class="col-sm-12">
                  <select class="form-select" aria-label="" name="ortuPekerjaan">
                    <option selected>Silakan Pilih</option>
                    <option value="1">PNS</option>
                    <option value="2">TNI/POLRI</option>
                    <option value="3">Karyawan Swasta</option>
                    <option value="4">Wiraswasta</option>
                    <option value="5">Pedagang</option>
                    <option value="6">Petani</option>
                    <option value="7">Buruh</option>
                    <option value="8">Tidak Bekerja</option>                     
                  </select>
                </div>
              </div> 
              <div class="col-12">
                <label class="col-sm-4 col-form-label">Penghasilan Orang Tua / Wali</label>
                <div class="col-sm-12">
                  <select class="form-select" aria-label="" name="ortuPenghasilan">
                    <option selected>Silakan Pilih</option>
                    <option value="1">Rp <= 499.999.-</option>
                    <option value="2">Rp 500.000.- s/d Rp 999.999.-</option>
                    <option value="3">Rp 1.000.000.- s/d Rp 1.999.999.-</option>
                    <option value="4">Rp 2.000.000.- s/d Rp 4.999.999.-</option>
                    <option value="5">Rp 5.000.000.- s/d Rp 9.999.999.-</option>
                    <option value="6">Rp 10.000.000.- s/d Rp 19.999.999.-</option>
                    <option value="7">Rp >= 20.000.000,-</option>                    
                  </select>
                </div>
              </div>
              <div class="col-12">
                <label for="nomorHP" class="form-label">No.Handphone Orang Tua / Wali</label>
                <input type="text" class="form-control" name="ortuHP" placeholder="contoh: 08123456789">
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email Orang Tua / Wali</label>
                <input type="text" class="form-control" name="ortuEmail" placeholder="contoh : emailanda@gmail.com">
              </div>
              <div class="col-12">
                <label for="alamat" class="form-label">Alamat Orang Tua</label>
                <textarea class="form-control" placeholder="Masukkan Alamat Anda" name="ortuAlamat" style="height: 100px;"></textarea>
              </div>
          </section>
          <section id="akademik">
          <div class="card-header" style="margin-bottom: 80px;">
            <ul class="nav nav-pills card-header-pills">
              <li class="nav-item" >
                <a class="btn btn-light" href="#siswa">Siswa</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-light" href="#ortu">Orang Tua</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-success" href="#akademik">Akademik</a>
              </li>
            </ul>
          </div>
              <h5 class="card-title">Form Akademik Pendaftar</h5>
              <div class="col-12">
              <label for="inputNumber" class="col-sm-4 col-form-label">Foto Anda 3x4</label>
              <div class="col-sm-12">
                  <input class="form-control" type="file" name="pendaftarFoto" accept=".jpg, .jpeg, .png">
              </div>
              </div>               
              <div class="col-12">
              <label for="inputName4" class="form-label">Peminatan</label>      
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="pendaftarMinat"value="IPA" checked>
                  <label class="form-check-label" for="gridRadios1">
                  IPA
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="pendaftarMinat" value="IPS">
                  <label class="form-check-label" for="gridRadios2">
                  IPS
                  </label>
              </div>
              </div>
              <div class="col-12">
              <label for="email" class="form-label">Tahun Lulus</label>
              <input class="form-control" type="number" id="tahun" name="tahunLulus" min="2021" max="2023" placeholder="Masukkan Tahun lebih dari 2021 hingga 2023">
              </div>
              <div class="col-12">
              <label for="inputNumber" class="col-sm-4 col-form-label">Lampirkan Ijazah ataupun (SKL bagi tahun lulusan 2023)</label>
              <div class="col-sm-12">
                  <input class="form-control" type="file" name="pendaftarIjazah">
              </div>
              </div>
              <div class="col-12">
              <label for="inputNumber" class="col-sm-8 col-form-label">Lampirkan Sertifikat Perlombaan dalam format PDF (apabila lebih dari 1 silakan digabung terlebih dahulu)</label>
              <div class="col-sm-12">
                  <input class="form-control" type="file" name="pendaftarIjazah" accept=".pdf">
              </div>
              </div>
              <br>
              <?php
              if(isset($_GET['kode']))
              {
                echo '<input type="hidden" name="kode" value="' .$_GET['kode'] . '">';
                echo '<input type="submit" name="proses" value="Update">';
              }
                echo '<div class="text-center">';
                  echo '<input type="submit" name="proses" class="btn btn-success" style="margin-right:15px;" value="Submit">';
                  echo '<input type="reset" name="proses" class="btn btn-secondary" value="Reset">';
                echo '</div>'
              ?>
          </section>
        </form>
      </div>
    </div>
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Contact</h3>
            <p>
              Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Surabaya, Jawa Timur 60294 <br><br>
              <strong>Phone:</strong> +6285017425538<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Kotak saran dan pengajuan</h4>
            <p>Kirimkan saran atau pengajuan anda.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Send">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>