<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Anggun Bestari Tour - Tentang Kami</title>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/pages/tentangkami/style.css" />
  </head>
  <body>
    <div class="desktop">
      <div class="overlap-group-wrapper">
        <div class="overlap-group">
          <div class="text-wrapper">Pilihan Paket</div>
          <div class="frame">
            <div class="card">
              <div class="div">
                <img class="white-logo" src="img/white-logo-01-1.png" />
                <div class="nav-bar">
                  <div class="text-wrapper-2" onclick="navigateTo('/')">Beranda</div>
                  <div class="text-wrapper-3" onclick="navigateTo('tentang-kami')">Tentang Kami</div>
                  <div class="text-wrapper-2" onclick="navigateTo('paket-travel')">Paket Travel</div>
                  <div class="text-wrapper-2" onclick="navigateTo('galeri-testimoni')">Galeri & Testimoni</div>
                </div>
              </div>
            </div>
            <div class="frame-wrapper">
              <div class="frame-2">
                <div class="text-wrapper-4">Tentang Kami</div>
                <p class="PT-anggun-bestari">
                  PT. Anggun Bestari Tour berdiri sejak 2013 telah bepengalaman dalam melayani jemaah Indonesia untuk
                  Ibadah Umroh dan Haji. Secara resmi PT. Anggun Bestari Tour terdaftar dengan SK PPIU No.
                  28092100388350003 berkantor Pusat di JL.&nbsp;&nbsp;Ir. Juanda No. 15. Kota Probolinggo
                </p>
              </div>
            </div>
            <div class="card">
              <div class="frame-2">
                <div class="text-wrapper-5">Tujuan Kami</div>
                <img class="vector" src="img/vector-1.svg" />
                <div class="frame-3">
                  <div class="div-wrapper">
                    <div class="frame-4">
                      <img class="img" src="img/nav-bar.svg" />
                      <p class="p">
                        Memberikan layanan terbaik dari pra keberangkatan, pendampingan, hingga kepulangan
                      </p>
                    </div>
                  </div>
                  <div class="card-2">
                    <div class="frame-4">
                      <div class="image-wrapper"><img class="image" src="img/image-9.png" /></div>
                      <p class="p">Memberikan kepastian layanan dalam&nbsp;&nbsp;PASTI Umroh</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                  <div class="text-wrapper-11" onclick="contactEmail()">pt.anggunbestaritour@gmail.com</div>
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
        window.location.href = 'mailto:pt.anggunbestaritour@gmail.com'; 
      }
    </script>

  </body>
</html>
