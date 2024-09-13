<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/components/footer/style.css" />
  </head>
  <body>
    <div class="card-8">
      <div class="frame-29">
        <div class="frame-30" onclick="contactInstagram()">
          <img class="img" src="img/ri-instagram-fill-1.svg" />
          <div class="text-wrapper-22" onclick="contactInstagram()">anggunbestaritour</div>
        </div>
        <div class="frame-19-footer" onclick="contactAdmin1()">
          <img class="img" src="img/mingcute-whatsapp-fill.svg" />
          <div class="text-wrapper-22" onclick="contactAdmin1()">085259742624</div>
        </div>
        <div class="frame-19-footer" onclick="contactAdmin2()">
          <img class="img" src="img/mingcute-whatsapp-fill.svg" />
          <div class="text-wrapper-22" onclick="contactAdmin2()">085259742625</div>
        </div>
        <div class="frame-31" onclick="contactEmail()">
          <img class="img" src="img/ic-round-email.svg" />
          <div class="text-wrapper-22" onclick="contactEmail()">pt.anggunbestari@gmail.com</div>
        </div>
      </div>
    </div>
    <script>
      function contactInstagram() {
        window.location.href = 'https://instagram.com/anggunbestaritour/'; 
      }

      function contactAdmin1() {
        window.location.href = 'https://wa.me/6285259742624'; 
      }

      function contactAdmin2() {
        window.location.href = 'https://wa.me/6285259742625'; 
      }

      function contactEmail() {
        window.location.href = 'mailto:pt.anggunbestari@gmail.com'; 
      }
    </script>
  </body>
</html>
