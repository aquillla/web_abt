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
        <img id="hamburger-icon" class="hamburger-icon" src="img/hamburger.svg" />
        <img id="cross-icon" class="cross-icon" src="img/cross-icon.svg" style="display:none;"/>
      </div>
      <div id="menu-mobile" class="nav-bar-mobile-expand-menu">
        <p class="nav-mobile-beranda" onclick="navigateTo('/')">Beranda</p>
        <p class="nav-mobile-tentangkami" onclick="navigateTo('tentang-kami')">Tentang Kami</p>
        <p class="nav-mobile-pakettravel" onclick="navigateTo('paket-travel')">Paket Travel</p>
        <p class="nav-mobile-galeritesti" onclick="navigateTo('galeri-testimoni')">Galeri & Testimoni</p>
      </div>
    </div>
    <div class="desktop">
      <div class="frame">
        <div class="card">
          <div class="main-div">
            <img class="white-logo-travel" onclick="navigateTo('/')" src="img/white-logo-01-1.png" />
            <div class="nav-bar-travel">
              <div class="text-wrapper-200" onclick="navigateTo('/')">Beranda</div>
              <div class="text-wrapper-200" onclick="navigateTo('tentang-kami')">Tentang Kami</div>
              <div class="text-wrapper-201">Paket Travel</div>
              <div class="text-wrapper-200" onclick="navigateTo('galeri-testimoni')">Galeri & Testimoni</div>
            </div>
          </div>
        </div>
        <div class="packages-selector-wrapper">
          @include('components.packages-selector')
        </div>
        <div class="components-wrapper">
          @include('components.kantorkami')
          @include('components.footer')
        </div>
      </div>
    </div>
    <!-- Modal (lightbox) -->
    <div id="imageModal" class="modal">
      <span class="close-btn" onclick="closeModal()">&times;</span>
      <div class="modal-content">
        <img id="modalImg" src="" alt="Full Size Image">
      </div>
    </div>

    <script>
      // Function to navigate to a different page
      function navigateTo(url) {
        window.location.href = url;
      }

      // Function to handle the "Hubungi Admin" button
      function contactAdmin() {
        window.location.href = 'https://wa.me/6285259742624'; // WhatsApp link
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

        // Function to handle switching between Umroh and Haji
        function selectPackage(packageType) {
        const monthFrame = document.getElementById('frame-13');
        const umrohButton = document.querySelector('.nav-bar-3');
        const hajiButton = document.querySelector('.nav-bar-4');
        const umrohText = document.querySelector('.text-wrapper-10');
        const hajiText = document.querySelector('.text-wrapper-11');

        // Prevent re-selection of the current active package
        if (
          (packageType === 'umroh' && umrohButton.classList.contains('nav-bar-active')) ||
          (packageType === 'haji' && hajiButton.classList.contains('nav-bar-active'))
        ) {
          return; // The selected package is already active, do nothing
        }

        if (packageType === 'umroh') {
          // Show the months when Umroh is selected
          monthFrame.classList.remove('hidden');

          // Set Umroh as active
          umrohButton.classList.add('nav-bar-active');
          umrohButton.classList.remove('nav-bar-inactive');
          umrohText.classList.add('packages-active');
          umrohText.classList.remove('packages-inactive');

          // Set Haji as inactive
          hajiButton.classList.add('nav-bar-inactive');
          hajiButton.classList.remove('nav-bar-active');
          hajiText.classList.add('packages-inactive');
          hajiText.classList.remove('packages-active');

          // Automatically select September for Umroh
          const septemberButton = document.getElementById('btn-september');
          selectMonth(septemberButton, 'umroh-sept'); // Make September button active and load content

        } else if (packageType === 'haji') {
          // Hide the months when Haji is selected
          monthFrame.classList.add('hidden');

          // Set Haji as active
          hajiButton.classList.add('nav-bar-active');
          hajiButton.classList.remove('nav-bar-inactive');
          hajiText.classList.add('packages-active');
          hajiText.classList.remove('packages-inactive');

          // Set Umroh as inactive
          umrohButton.classList.add('nav-bar-inactive');
          umrohButton.classList.remove('nav-bar-active');
          umrohText.classList.add('packages-inactive');
          umrohText.classList.remove('packages-active');

          replaceComponent('haji'); // Replace with Haji content
        }
      }

      // Function to dynamically replace the component
      function replaceComponent(type) {
        // Assuming there is a container for packages to be replaced
        fetch(`/components/${type}`)
          .then((response) => response.text())
          .then((html) => {
            document.getElementById('packages-container').innerHTML = html;
          })
          .catch((error) => console.error('Error fetching component:', error));
      }

      // Function to handle month selection
      function selectMonth(element, type) {
        // Remove active styling from all month elements
        const monthElements = document.querySelectorAll('.frame-14, .frame-15');
        monthElements.forEach((el) => {
          el.classList.remove('frame-14', 'active-month');
          el.classList.add('frame-15');
        });

        // Add active styling to the selected month
        element.classList.add('frame-14', 'active-month');
        element.classList.remove('frame-15');

        // Replace the component based on the selected month
        replaceComponent(type);
      }

      // By default, load Umroh and show the September package
      window.onload = function () {
        // Directly select the Umroh package and activate the September month
        selectPackage('umroh');
        const septemberButton = document.getElementById('btn-september');
        selectMonth(septemberButton, 'umroh-sept'); // Ensure September is loaded and selected
      };

      // Function to open the modal and display the full-size image
      function openModal(src) {
        var modal = document.getElementById('imageModal');
        var modalImg = document.getElementById('modalImg');
        modal.style.display = 'flex'; // Show the modal
        modalImg.src = src; // Set the image source to the clicked image
      }

      // Function to close the modal
      function closeModal() {
        var modal = document.getElementById('imageModal');
        modal.style.display = 'none'; // Hide the modal
      }
    </script>

    
  </body>
</html>
