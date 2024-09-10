<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/components/packages/packages-haji-styleguide.css" />
    <link rel="stylesheet" href="css/components/packages/packages-haji-style.css" />
  </head>
  <body>
    <div class="card-101">
      <div class="frame-10">
        <div class="frame-11">
          <div class="text-wrapper-8">Pilih Paket Perjalanan</div>
          <p class="text-wrapper-9">
            Dapatkan layanan maksimal, pilih layanan paket dari kami sekarang.
          </p>
        </div>
        <div class="frame-12">
          <div class="nav-bar-4">
            <div class="text-wrapper-11" onclick="replaceComponent('umroh')">
              Umroh
            </div>
          </div>
          <div class="nav-bar-3">
            <div class="text-wrapper-10">Haji</div>
          </div>
        </div>
        <img class="image" src="img/Haji Brosur.png" />
        <div class="nav-bar-5">
          <div class="text-wrapper-2" onclick="replaceComponent('umroh')">
            Lihat Semua
          </div>
        </div>
      </div>

    <script>
      function replaceComponent(type) {
        // Use AJAX to fetch the new component
        fetch(`/packages/${type}`)
          .then((response) => response.text())
          .then((html) => {
            // Replace the content inside the container without reloading the page
            document.querySelector('.card-101').innerHTML = html;
          })
          .catch((error) => console.error('Error fetching component:', error));
      }
    </script>
  </body>
</html>
