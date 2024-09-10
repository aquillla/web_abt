<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/components/footer/footer-styleguide.css" />
    <link rel="stylesheet" href="css/components/footer/footer-style.css" />
  </head>
  <body>
    <div class="card-8">
      <div class="frame-29">
        <div class="frame-30" onclick="contactInstagram()">
          <img class="img" src="img/ri-instagram-fill-1.svg" />
          <div class="text-wrapper-22" onclick="contactInstagram()">anggunbestaritour</div>
        </div>
        <div class="frame-19" onclick="contactAdmin1()">
          <img class="img" src="img/mingcute-whatsapp-fill.svg" />
          <div class="text-wrapper-22" onclick="contactAdmin1()">085259742624</div>
        </div>
        <div class="frame-19" onclick="contactAdmin2()">
          <img class="img" src="img/mingcute-whatsapp-fill.svg" />
          <div class="text-wrapper-22" onclick="contactAdmin2()">085259742625</div>
        </div>
        <div class="frame-31" onclick="contactEmail()">
          <img class="img" src="img/ic-round-email.svg" />
          <div class="text-wrapper-22" onclick="contactEmail()">pt.anggunbestaritour@gmail.com</div>
        </div>
      </div>
    </div>
    <script>
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
