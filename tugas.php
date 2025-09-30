<html>
    <head>
        <title> PERSONAL WEB</title>
        <link rel="shortcut icon" href="gambar/logo_2.jpg" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <!-- php -->
       <?php
        $nama="Naufal Dzakiy Saputra";
        $nim="102092400015";
        $kelas="SI-08-A";
        $prodi="Sistem Informasi";
        $fakultas="Rekayasa Industri";
      ?>
      <!-- --------------------------------------------------------------------------------- -->
        <!-- Bagian atas -->
         <div>
            <div class="c-ulatas">
                <h1>Halo, saya <?php echo $nama?></h1>
                <h3>102092400015 | SISTEM INFORMASI | FAKULTAS REKAYASA INDUSTRI</h3>
            </div>
         </div>
         
         <!-- FOTO PROFIL -->
          <div class="c-isi">
            <img src="gambar/foto.jpg" class="c-img">
          </div>
          <!-- ISI KONTEN -->
          <div class="c-konten">
             <h2>INI ADALAH AKUN SOSIAL MEDIA SAYA</h2>
            <div class="c-fotoso">
            <a href="https://www.instagram.com/_eskampul_/">
            <img src="gambar/instagram png.png" class="c-sosmed" >
            </a>
            <a href="https://www.tiktok.com/@naufal_dzakiy">
            <img src="gambar/tiktok.png" class="c-sosmed" >  
            </a>
            <a href="https://www.linkedin.com/in/naufal-dzakiy-838845327/">
            <img src="gambar/pngwing.com.png" class="c-sosmed">
            </a>
            <a href="https://github.com/NaufalDzakiySaputra">
              <img src="gambar/github.png" class="c-sosmed">
            </a>
            </div>
        </div>

        <!-- TABLE -->
        <table class="c-tabel">
           <tr>
            <th>Nama </th>
            <td><?php echo $nama?></td>
           </tr>
           <tr>
            <th>Nim </th>
            <td><?php echo $nim?></td>
           </tr>
           <tr>
            <th>Kelas </th>
            <td><?php echo $kelas?></td>
           </tr>
           <tr>
            <th>Program Studi </th>
            <td><?php echo $prodi?></td>
           </tr>
           <tr>
            <th>Fakultas</th>
            <td><?php echo $fakultas?></td>
           </tr>
        </table>
          <!-- TOMBOL TRAKTEER ES KOPI TANPA GULA -->
           <div class="c-traktir">
              <a href="traktir.html">traktir es kopi</a>
           </div>
        </body>
          <!-- Bagian bawah -->
        <footer>
          <div class="c-footer">
            <p>Web ini dibuat pada: <time datetime="2025-09-27T14:30">27 September 2025</time></p>
          </div>
        </footer> 
       
</html>
