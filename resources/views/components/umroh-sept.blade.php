<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/components/packages/umroh/sept/style.css" />
  </head>
  <body>
    <div class="card-102">
        <img class="image" src="img/image-12.png" />
        <div class="nav-bar-5">
          <img class="img" src="img/component-1-33.svg" />
          <div class="text-wrapper-195" onclick="contactAdmin()">Hubungi Admin</div>
        </div>
    </div>

    <script>
      function replaceComponent(type) {
        // Dynamically load the clicked component
        fetch(`/components/${type}`)
          .then((response) => response.text())
          .then((html) => {
            // Replace the content inside the dynamic packages container
            document.querySelector('#dynamic-packages').innerHTML = html;
          })
          .catch((error) => console.error('Error fetching component:', error));
      }

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
