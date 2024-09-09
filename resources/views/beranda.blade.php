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
          {{-- @yield('packages') --}}
          @include('components.packages-umroh')
          {{-- @include('components.packages-haji') --}}
          {{-- @include('components.pkgcard-sept') --}}
          {{-- @include('components.pkgcard-okt') --}}
          {{-- @include('components.pkgcard-nov') --}}
          {{-- @include('components.pkgcard-des') --}}
          {{-- @include('components.pkgcard-promo') --}}
          <br>
          @include('components.gallery-umrohmaulid-2022-1')
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

    </script>

  </body>
</html>
