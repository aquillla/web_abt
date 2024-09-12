<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/components/packages/haji/style.css" />
  </head>
  <body>
    <div class="card-101">
      <div class="frame-10">
        <img class="image" src="img/Haji Brosur.png" />
        <div class="nav-bar-5">
          <img class="img" src="img/component-1-33.svg" />
          <div class="text-wrapper-2-haji" onclick="contactAdmin()">
            Hubungi Admin
          </div>
        </div>
      </div>
    </div>

    <script>
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
