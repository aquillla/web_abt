<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/components/gallery/style.css" />

    <!-- Swiper.js CSS for slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <style>
      /* Styling for the swiper container and images */
      .swiper-container {
        width: 100%;
        height: 500px; /* Adjust height as needed */
      }

      .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      /* Adjust the navigation buttons if needed */
      .swiper-button-next,
      .swiper-button-prev {
        color: #fff;
      }

      /* Adjust pagination dots if needed */
      .swiper-pagination-bullet-active {
        background-color: #fff;
      }

      .swiper-pagination {
        padding-bottom: 10px;
      }

    </style>
  </head>
  <body>
    <div class="card-4">
      <div class="frame-16">
        <div class="frame-17">
          <div class="text-wrapper-14">Galeri Perjalanan</div>
          <div class="frame-18">
            <div class="frame-19" onclick="contactInstagram()">
              <img
                class="img"
                src="img/ri_instagram-fill.png"
                onclick="contactInstagram()"
              />
              <div class="text-wrapper-15" onclick="contactInstagram()">
                anggunbestaritour
              </div>
            </div>
          </div>
        </div>
        <img class="vector" src="img/vector-1-1.svg" />
      </div>

      <!-- Swiper Slider for images -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- Each image is a swiper-slide -->
          <div class="swiper-slide">
            <img
              class="whatsapp-image-2"
              src="img/whatsapp-image-2024-07-22-at-6-41-46-pm-3-1-3.png"
              alt="Image 1"
            />
          </div>
          <div class="swiper-slide">
            <img class="whatsapp-image-2" src="img/tengah.png" alt="Image 2" />
          </div>
          <div class="swiper-slide">
            <img class="whatsapp-image-2" src="img/kanan.png" alt="Image 3" />
          </div>
          <!-- You can add more slides here -->
          <div class="swiper-slide">
            <img
              class="whatsapp-image-2"
              src="img/whatsapp-image-2024-07-22-at-6-41-46-pm-3-1-3.png"
              alt="Image 4"
            />
          </div>
          <div class="swiper-slide">
            <img class="whatsapp-image-2" src="img/tengah.png" alt="Image 5" />
          </div>
          <div class="swiper-slide">
            <img class="whatsapp-image-2" src="img/kanan.png" alt="Image 6" />
          </div>
          <!-- Add more slides as needed -->
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Navigation Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>

    <!-- Include Swiper.js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
      // Initialize Swiper slider
      var swiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 3, // Show 3 images at once
        spaceBetween: 0, // Space between slides
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      });

      // Function to navigate to a different page
      function navigateTo(url) {
        window.location.href = url;
      }

      // Function to contact Instagram
      function contactInstagram() {
        window.location.href = 'https://instagram.com/anggunbestaritour/';
      }
    </script>
  </body>
</html>
