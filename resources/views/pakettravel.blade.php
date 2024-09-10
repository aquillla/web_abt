<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Anggun Bestari Tour - Paket Travel</title>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/pages/pakettravel/style.css" />
  </head>
  <body>
    <div class="desktop">
          <div class="text-wrapper">Pilihan Paket</div>
          <div class="frame">
            <div class="card">
              <div class="main-div">
                <img class="white-logo-travel" src="img/white-logo-01-1.png" />
                <div class="nav-bar-travel">
                  <div class="text-wrapper-200" onclick="navigateTo('/')">Beranda</div>
                  <div class="text-wrapper-200" onclick="navigateTo('tentang-kami')">Tentang Kami</div>
                  <div class="text-wrapper-201" onclick="navigateTo('paket-travel')">Paket Travel</div>
                  <div class="text-wrapper-200" onclick="navigateTo('galeri-testimoni')">Galeri & Testimoni</div>
                </div>
              </div>
            </div>
            @include('components.packages-selector')
            @include('components.kantorkami')
            @include('components.footer')
          </div>
    </div>

    <script>
      // Function to navigate to a different page
      function navigateTo(url) {
        window.location.href = url;
      }
    </script>
    
  </body>
</html>
