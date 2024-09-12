<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggun Bestari Tour - Paket Travel</title>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/pages/pakettravel/style.css" />
  </head>
  <body>
    <div class="mobile-wrapper">
      <div class="nav-bar-mobile">
        <img class="white-logo-mobile" onclick="navigateTo('/')" src="img/white-logo-01-1.png" />
        <img id="hamburger-icon" class="hamburger-icon" src="img/hamburger-icon.png" />
        <img id="cross-icon" class="cross-icon" src="img/cross-nav.png" style="display:none;"/>
      </div>
      <div id="menu-mobile" class="nav-bar-mobile-expand-menu">
        <p class="nav-mobile-beranda" onclick="navigateTo('/')">Beranda</p>
        <p class="nav-mobile-tentangkami" onclick="navigateTo('tentang-kami')">Tentang Kami</p>
        <p class="nav-mobile-pakettravel" onclick="navigateTo('paket-travel')">Paket Travel</p>
        <p class="nav-mobile-galeritesti" onclick="navigateTo('galeri-testimoni')">Galeri & Testimoni</p>
      </div>
    </div>
    <div class="components-paket">
      @include('components.kantorkami')
      @include('components.footer')
    </div>
    <div class="desktop">
      <div class="text-wrapper">Pilihan Paket</div>
      <div class="frame">
        <div class="card">
          <div class="main-div">
            <img class="white-logo-travel" src="img/white-logo-01-1.png" />
            <div class="nav-bar-travel">
              <div class="text-wrapper-200" onclick="navigateTo('/')">Beranda</div>
              <div class="text-wrapper-200" onclick="navigateTo('tentang-kami')">Tentang Kami</div>
              <div class="text-wrapper-201">Paket Travel</div>
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

      // Function to swap icons on click and toggle menu visibility
      const hamburgerIcon = document.getElementById('hamburger-icon');
      const crossIcon = document.getElementById('cross-icon');
      const menuMobile = document.getElementById('menu-mobile');

      hamburgerIcon.addEventListener('click', () => {
        hamburgerIcon.style.display = 'none';
        crossIcon.style.display = 'block';
        menuMobile.style.display = 'flex'; // Show the menu when cross icon is displayed
      });

      crossIcon.addEventListener('click', () => {
        crossIcon.style.display = 'none';
        hamburgerIcon.style.display = 'block';
        menuMobile.style.display = 'none'; // Hide the menu when cross icon is hidden
      });

      // Hide menu when clicking outside
      document.addEventListener('click', (event) => {
        // Check if the click is outside the mobile menu and the menu is currently visible
        if (menuMobile.style.display === 'flex' && !menuMobile.contains(event.target) && !hamburgerIcon.contains(event.target)) {
          // Hide the menu and swap icons
          menuMobile.style.display = 'none';
          crossIcon.style.display = 'none';
          hamburgerIcon.style.display = 'block';
        }
      });
    </script>

    
  </body>
</html>
