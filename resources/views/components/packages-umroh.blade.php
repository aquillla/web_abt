<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/components/packages/packages-umroh-styleguide.css" />
    <link rel="stylesheet" href="css/components/packages/packages-umroh-style.css" />
  </head>
  {{-- @extends('beranda')
  @section('packages') --}}
  <body>
    <div class="card-100">
        <div class="frame-10">
        <div class="frame-11">
            <div class="text-wrapper-8">Pilih Paket Perjalanan</div>
            <p class="text-wrapper-9">Dapatkan layanan maksimal, pilih layanan paket dari kami sekarang.</p>
        </div>
        <div class="frame-12">
            <div class="nav-bar-3"><div class="text-wrapper-10">Umroh</div></div>
            <div class="nav-bar-4"><div class="text-wrapper-11" onclick="navigateTo('/packages-haji')">Haji</div></div>
        </div>
    </div>
    {{-- @endsection --}}

    <script>
      function navigateTo(url) {
        window.location.href = url;
      }
    </script>

  </body>
</html>
