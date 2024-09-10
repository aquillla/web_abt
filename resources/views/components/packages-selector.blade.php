<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/components/packages/selector/style.css" />
    <style>
      /* Simple CSS to hide the frame by default */
      .hidden {
        display: none;
      }
      .frame-14 {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 16px 0px;
        position: relative;
        flex: 0 0 auto;
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-color: var(--primarysoft-green);
      }
      .frame-15 {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 16px 0px;
        position: relative;
        flex: 0 0 auto;
        cursor: pointer; /* Add cursor for inactive months */
      }
      .active-month {
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-color: var(--primarysoft-green);
        font-weight: var(--body2-sbold-font-weight);
        color: var(--primarysoft-green);
        cursor:not-allowed;
      }
    </style>
  </head>
  <body>
    <div class="card-100">
      <div class="frame-10">
        <div class="frame-11">
          <div class="text-wrapper-8">Pilih Paket Perjalanan</div>
          <p class="text-wrapper-9">
            Dapatkan layanan maksimal, pilih layanan paket dari kami sekarang.
          </p>
        </div>
        <div class="frame-12">
          <!-- Umroh button with initial active class -->
          <div class="nav-bar-3 nav-bar-active">
            <div class="text-wrapper-10 packages-active" onclick="selectPackage('umroh')">
              Umroh
            </div>
          </div>
          <!-- Haji button with initial inactive class -->
          <div class="nav-bar-4 nav-bar-inactive">
            <div class="text-wrapper-11 packages-inactive" onclick="selectPackage('haji')">
              Haji
            </div>
          </div>
        </div>

        <!-- Month selection frame, shown for Umroh and hidden for Haji -->
        <div id="frame-13" class="frame-13">
          <div class="frame-15 text-wrapper-13" id="btn-september" onclick="selectMonth(this, 'umroh-sept')">September</div>
          <div class="frame-15 text-wrapper-13" onclick="selectMonth(this, 'umroh-okt')">Oktober</div>
          <div class="frame-15 text-wrapper-13" onclick="selectMonth(this, 'umroh-nov')">November</div>
          <div class="frame-15 text-wrapper-13" onclick="selectMonth(this, 'umroh-des')">Desember</div>
          <div class="frame-15 text-wrapper-13" onclick="selectMonth(this, 'umroh-promo')">Promo!</div>
        </div>
      </div>
    </div>

    <!-- This is where the month components will be loaded dynamically -->
    <div id="packages-container"></div>

    <script>
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
    </script>
  </body>
</html>
