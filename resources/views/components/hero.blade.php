<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/components/hero/hero-styleguide.css" />
    <link rel="stylesheet" href="css/components/hero/hero-style.css" />
  </head>
  <body>
    <div class="hero">
      <p class="div">Menuju Baitullah dengan Aman dan Nyaman Bersama PT. Anggun Bestari Tour</p>
      <div class="nav-bar">
        <div class="text-wrapper-2" onclick="navigateTo('')">Beranda</div>
        <div class="text-wrapper-3" onclick="navigateTo('tentang-kami')">Tentang Kami</div>
        <div class="text-wrapper-3" onclick="navigateTo('paket-travel')">Paket Travel</div>
        <div class="text-wrapper-3" onclick="navigateTo('galeri-testimoni')">Galeri & Testimoni</div>
      </div>
      <div class="frame-2">
        <div class="hubungi-admin-wrapper">
          <div class="text-wrapper-4" onclick="navigateTo('paket-travel')">Lihat Paket</div>
        </div>
        <div class="nav-bar-2" onclick="contactAdmin()">
          <img class="img" src="img/component-1-33.svg" />
          <div class="text-wrapper-2">Hubungi Admin</div>
        </div>
      </div>
      <img class="white-logo" src="img/white-logo-01-1.png" />
    </div>

    <script>
      // Function to navigate to a different page
      function navigateTo(url) {
        window.location.href = url;
      }

      // Function to handle the "Hubungi Admin" button
      function contactAdmin() {
        window.location.href = 'https://wa.me/085259742624'; // WhatsApp link
      }
    </script>

  </body>
</html>
