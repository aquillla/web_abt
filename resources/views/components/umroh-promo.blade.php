<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/components/packages/umroh/promo/style.css" />
  </head>
  <body>
    <div class="card-106">
        <div class="container">
          <div class="image-row">
              <div class="image-item">
                  <img src="img/7.png" alt="Image 1" onclick="openModal(this.src)">
              </div>
              <div class="image-item">
                  <img src="img/8 (1).png" alt="Image 2" onclick="openModal(this.src)">
              </div>
          </div>
          <div class="image-item centered-image">
              <img src="img/6.png" alt="Image 3" onclick="openModal(this.src)">
          </div>
        </div>
        <div class="nav-bar-5">
          <img class="img" src="img/component-1-33.svg" />
          <div class="text-wrapper-2-promo" onclick="contactAdmin()">Hubungi Admin</div>
        </div>
    </div>

    <script>
      function navigateTo(url) {
        window.location.href = url;
      }

      // Function to handle the "Hubungi Admin" button
      function contactAdmin() {
        window.location.href = 'https://wa.me/6285259742624'; // WhatsApp link
      }
    </script>

  </body>
</html>
