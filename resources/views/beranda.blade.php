<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggun Bestari Tour - Beranda</title>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide-beranda.css" />
    <link rel="stylesheet" href="style-beranda.css" />
  </head>
  <body>
    <div class="home">
      <div class="overlap-wrapper">
        <div class="frame">
          @include('components.hero')
          @include('components.services')
          
          <!-- Dynamic Packages Component Container -->
          <div id="packages-container">
            @include('components.packages-umroh')
          </div>
          <br>
          {{-- @include('components.gallery-umrohmaulid-2022-1') --}}
          {{-- @include('components.gallery-umrohmaulid-2022-2') --}}
          @include('components.kantorkami')
          @include('components.footer')
        </div>
      </div>
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

      // Function to dynamically replace components
      function replaceComponent(type) {
        // Use AJAX to fetch the new component
        fetch(`/packages/${type}`)
          .then(response => response.text())
          .then(html => {
            // Replace the content inside the packages container without reloading the page
            document.getElementById('packages-container').innerHTML = html;
          })
          .catch(error => console.error('Error fetching component:', error));
      }
    </script>

  </body>
</html>
