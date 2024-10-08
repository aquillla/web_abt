<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggun Bestari Tour - Beranda</title>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/pages/beranda/style.css" />
  </head>
  <body>
    <div class="home">
      <div class="overlap-wrapper">
        <div class="frame">
          @include('components.hero')
          @include('components.services')
          @include('components.packages-selector')
          @include('components.gallery')
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
