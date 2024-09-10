<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/components/packages/packages-umroh-styleguide.css" />
    <link rel="stylesheet" href="css/components/packages/packages-umroh-style.css" />
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
          <div class="nav-bar-3">
            <div class="text-wrapper-10">
              Umroh
            </div>
          </div>
          <div class="nav-bar-4">
            <div class="text-wrapper-11" onclick="replaceComponent('haji', true)">
              Haji
            </div>
          </div>
        </div>
      </div>
      <!-- Container for dynamic packages -->
      <div id="dynamic-packages">
        @include('components.pkgcard-sept') <!-- Default content to be shown on page load -->
      </div>
    </div>

    <script>
      function replaceComponent(type, isMainPackage = false) {
        // Define the base path depending on whether it's a main package (Umroh/Haji) or a subpackage (Sept, Okt, etc.)
        let basePath = isMainPackage ? '/packages/' : '/components/pkgcard/';
        
        // Fetch the new component dynamically
        fetch(`${basePath}${type}`)
          .then((response) => response.text())
          .then((html) => {
            // If it's a main package, replace the main package container
            if (isMainPackage) {
              document.querySelector('#packages-container').innerHTML = html;
            } else {
              // Otherwise, replace the internal package card
              document.querySelector('#dynamic-packages').innerHTML = html;
            }
          })
          .catch((error) => console.error('Error fetching component:', error));
      }
    </script>
    
  </body>
</html>
