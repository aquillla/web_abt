<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/components/gallery-full/style.css" />
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
    <div class="frame-wrapper">
      <div class="frame-2">
        <div class="text-wrapper-4">Galeri</div>
        <p class="PT-anggun-bestari">
          Kumpulan foto perjalanan ibadah kami selama ini.
        </p>
        <div class="foto">
          <div class="overlap-group-2">
            <div class="card-6" id="card-6">
                <div class="frame-11">
                    <img class="img-mobile" src="img/component-1-36.svg" />
                    <div class="text-wrapper-12">Umroh 13D Tahun 2022</div>
                </div>
            </div>
            <img class="component-3" src="img/arrow-hijau1.png" onclick="showNextImage()" />
            <img class="component-4" src="img/arrow-hijau2.png" onclick="showPreviousImage()" />
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="desktop">
      <div class="overlap-group-wrapper">
        <div class="overlap-group">
          <div class="text-wrapper">Pilihan Paket</div>
          <div class="frame">
            <div class="card">
              <div class="div">
                <img class="white-logo" src="img/white-logo-01-1.png" />
                <div class="nav-bar">
                  <div class="text-wrapper-205" onclick="navigateTo('/')">Beranda</div>
                  <div class="text-wrapper-205" onclick="navigateTo('tentang-kami')">Tentang Kami</div>
                  <div class="text-wrapper-205" onclick="navigateTo('paket-travel')">Paket Travel</div>
                  <div class="text-wrapper-305">Galeri & Testimoni</div>
                </div>
              </div>
            </div>
            <div class="frame-wrapper">
              <div class="frame-2">
                <div class="text-wrapper-4">Galeri</div>
                <p class="PT-anggun-bestari">
                  Kumpulan foto perjalanan ibadah kami selama ini.
                </p>
              </div>
            </div>

            <!-- Updated Gallery Section -->
            <div class="gallery-1">
              <div class="gallery-item">
                <img src="img/galeri-1.png" />
              </div>
              <div class="gallery-item">
                <img src="img/whatsapp-image-2024-07-22-at-6-41-46-pm-6-1-3.png"/>
              </div>
            </div>
            <div class="gallery-2">
              <div class="gallery-item">
                <img src="img/whatsapp-image-2024-07-22-at-6-41-46-pm-3-1-3.png"/>
              </div>
              <div class="gallery-item">
                <img src="img/galeri-4.png"/>
              </div>
            </div>

            <!-- Initially hidden galleries -->
            <div class="hidden gallery-3">
              <div class="gallery-item">
                <img src="img/galeri-6.png"/>
              </div>
              <div class="gallery-item">
                <img src="img/galeri-5.png"/>
              </div>
            </div>
            <div class="hidden gallery-4">
              <div class="gallery-item">
                <img src="img/galeri-7.png"/>
              </div>
              <div class="gallery-item">
                <img src="img/galeri-8.png"/>
              </div>
            </div>
            <div class="hidden gallery-5">
              <div class="gallery-item">
                <img src="img/galeri-9.png"/>
              </div>
              <div class="gallery-item">
                <img src="img/galeri-10.png"/>
              </div>
            </div>

            <!-- Load More Button -->
            <div class="load-more">
              <div class="nav-bar-5">
                <div class="text-wrapper-195" id="loadMoreButton">Muat Lebih Banyak</div>
              </div>
              <div class="hidden nav-bar-5" id="loadLessContainer">
                <div class="text-wrapper-195" id="loadLessButton">Muat Lebih Sedikit</div>
              </div>
            </div>
            <!-- End of Gallery Section -->

            <!-- Video Testimoni Section -->
            <div class="card">
              <div class="frame-2">
                <div class="text-wrapper-5">Testimoni</div>
                <p class="desc-testi">
                  Dengarkan cerita dari jamaah kami.
                </p>
                <img class="vector" src="img/vector-1.svg" />
              </div>

              <!-- Video Testimoni Grid -->
              <div class="video-testimoni-grid">
                <!-- Main Video -->
                <div class="main-video">
                  <video id="mainVideo" controls>
                    <source src="vid/video-1.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                  </video>
                </div>
                <!-- Small Video Thumbnails -->
                <div class="video-thumbnails">
                  <div class="thumbnail">
                    <video controls onclick="swapVideo(this)">
                      <source src="vid/video-2.mp4" type="video/mp4" />
                    </video>
                  </div>
                  <div class="thumbnail">
                    <video controls onclick="swapVideo(this)">
                      <source src="vid/video-3.mp4" type="video/mp4" />
                    </video>
                  </div>
                  <div class="thumbnail">
                    <video controls onclick="swapVideo(this)">
                      <source src="vid/video-3.mp4" type="video/mp4" />
                    </video>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Video Testimoni Section -->

            <div class="card-3">
              <img class="image-2" src="img/image-7.png" />
              <div class="frame-5">
                <img class="group" src="img/group.png" />
                <div class="frame-6">
                  <div class="text-wrapper-6">Kantor Kami</div>
                  <p class="text-wrapper-7">Datangi kantor kami untuk mendapatkan informasi secara langsung.</p>
                </div>
                <div class="frame-7">
                  <img class="bx-building-house" src="img/bx-building-house.svg" />
                  <div class="frame-8">
                    <div class="text-wrapper-8">Probolinggo</div>
                    <p class="text-wrapper-9">JL. Ir. H. Juanda 15 Kota Probolinggo</p>
                    <div class="frame-9">
                      <img class="img-2" src="img/ic-outline-whatsapp-1.svg" />
                      <div class="text-wrapper-10">085259742624</div>
                    </div>
                    <div class="frame-9">
                      <img class="img-2" src="img/ic-outline-whatsapp-1.svg" />
                      <div class="text-wrapper-10">085259742625</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-4">
              <div class="frame-10">
                <div class="frame-11" onclick="contactInstagram()">
                  <img class="img-2" src="img/ri-instagram-fill.svg" />
                  <div class="text-wrapper-11" onclick="contactInstagram()">anggunbestaritour</div>
                </div>
                <div class="frame-12" onclick="contactAdmin1()">
                  <img class="img-2" src="img/mingcute-whatsapp-fill.svg" />
                  <div class="text-wrapper-11" onclick="contactAdmin1()">085259742624</div>
                </div>
                <div class="frame-12" onclick="contactAdmin2()">
                  <img class="img-2" src="img/mingcute-whatsapp-fill-1.svg" />
                  <div class="text-wrapper-11" onclick="contactAdmin2()">085259742625</div>
                </div>
                <div class="frame-13" onclick="contactEmail()">
                  <img class="img-2" src="img/ic-round-email.svg" />
                  <div class="text-wrapper-11" onclick="contactEmail()">pt.anggunbestari@gmail.com</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      // Function to navigate to a different page
      function navigateTo(url) {
        window.location.href = url;
      }

      function contactInstagram() {
        window.location.href = 'https://instagram.com/anggunbestaritour/'; 
      }

      function contactAdmin1() {
        window.location.href = 'https://wa.me/085259742624'; 
      }

      function contactAdmin2() {
        window.location.href = 'https://wa.me/085259742625'; 
      }

      function contactEmail() {
        window.location.href = 'mailto:pt.anggunbestari@gmail.com'; 
      }

      // Function to load more galleries
      document.getElementById('loadMoreButton').addEventListener('click', function() {
        document.querySelector('.gallery-3').classList.remove('hidden');
        document.querySelector('.gallery-4').classList.remove('hidden');
        document.querySelector('.gallery-5').classList.remove('hidden');
        this.parentElement.classList.add('hidden'); // Hide "Muat Lebih Banyak" button
        document.getElementById('loadLessContainer').classList.remove('hidden'); // Show "Muat Lebih Sedikit" button
      });

      // Function to collapse the galleries
      document.getElementById('loadLessButton').addEventListener('click', function() {
        document.querySelector('.gallery-3').classList.add('hidden');
        document.querySelector('.gallery-4').classList.add('hidden');
        document.querySelector('.gallery-5').classList.add('hidden');
        document.getElementById('loadLessContainer').classList.add('hidden'); // Hide "Muat Lebih Sedikit" button
        document.getElementById('loadMoreButton').parentElement.classList.remove('hidden'); // Show "Muat Lebih Banyak" button
      });

      // Function to swap the main video with the clicked thumbnail
      function swapVideo(thumbnailVideo) {
        const mainVideoElement = document.getElementById('mainVideo');
        const mainVideoSrc = mainVideoElement.querySelector('source').src;
        const thumbnailVideoSrc = thumbnailVideo.querySelector('source').src;

        // Swap the main video source with the clicked thumbnail's source
        mainVideoElement.querySelector('source').src = thumbnailVideoSrc;
        thumbnailVideo.querySelector('source').src = mainVideoSrc;

        // Reload the videos to apply the new source
        mainVideoElement.load();
        thumbnailVideo.load();
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

      // Array of image sources for the slideshow
      const backgroundImages = [
          'url(img/galeri-1.png)',  // Image 1
          'url(img/galeri-4.png)',  // Image 2
          'url(img/galeri-5.png)',  // Image 3
          'url(img/galeri-6.png)',  // Image 4
          'url(img/galeri-7.png)',  // Image 5
          'url(img/galeri-8.png)'   // Image 6
      ];

      // Variable to track the current background image index
      let currentBackgroundIndex = 0;

      // Function to show the next background image
      function showNextImage() {
          currentBackgroundIndex = (currentBackgroundIndex + 1) % backgroundImages.length;
          document.getElementById('card-6').style.backgroundImage = backgroundImages[currentBackgroundIndex];
      }

      // Function to show the previous background image
      function showPreviousImage() {
          currentBackgroundIndex = (currentBackgroundIndex - 1 + backgroundImages.length) % backgroundImages.length;
          document.getElementById('card-6').style.backgroundImage = backgroundImages[currentBackgroundIndex];
      }
    </script>

  </body>
</html>
