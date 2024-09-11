<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/components/services/style.css" />
  </head>
  <body>
    <div class="card">
      <div class="text-wrapper-5">Layanan Perjalan Ibadah Profesional</div>
      <img class="vector" src="img/Vector 1.png" />
      <div class="frame-3">
        <div class="frame-wrapper">
          <div class="frame-4">
            <img class="img-2" src="img/solar-shield-keyhole-bold.svg" />
            <div class="text-wrapper-6">Terakdretasi</div>
            <p class="p">Telah terdaftar di Kementerian Agama RI dengan SK No. 28092100388350003.</p>
          </div>
        </div>
        <div class="div-wrapper">
          <div class="frame-5">
            <img class="img-2" src="img/solar-hand-heart-bold-duotone.svg" />
            <div class="text-wrapper-6">Terpercaya</div>
            <p class="p">
              Memberikan layanan standar pelaksanaan ibadah Umroh sesuai dengan tuntunan Rasulullah dan
              mengupayakan kenyamanan dan kebersahajaan dalam perjalanan ibadah.
            </p>
          </div>
        </div>
        <div class="frame-wrapper">
          <div class="frame-6">
            <img class="img-2" src="img/solar-hand-stars-bold-duotone.svg" />
            <div class="text-wrapper-6">Profesional</div>
            <p class="p">
              Memberikan pemahaman spiritual melalui manasik dan komprehensif serta layanan fungsi intergral
              dalam perjalanan Umroh.
            </p>
          </div>
        </div>
      </div>
      <div class="frame-7">
        <div class="card-2">
          <div class="frame-8">
            <img class="img-2" src="img/solar-folder-favourite-bookmark-bold-duotone.svg" />
            <div class="text-wrapper-6">Dapat Diandalkan</div>
            <p class="text-wrapper-7">
              Memberikan jaminan layanan dan pendampingan<br />sebelum keberangkatan, selama di tanah suci<br />sampai
              kepulangan agar layanan kenyamanan<br />jamaah terpenuhi.
            </p>
          </div>
        </div>
        <div class="card-2">
          <div class="frame-9">
            <img class="img-2" src="img/solar-tag-price-bold.svg" />
            <div class="text-wrapper-6">Variasi Paket</div>
            <p class="text-wrapper-7">
              Progam yang beragam di setiap paket, sehingga<br />anda dapat memilih progam yang sesuai dengan<br />kebutuhan
              anda.
            </p>
          </div>
        </div>
      </div>
      <!-- This section will be displayed on Mobile -->
      <div class="mobile-why-us">
        <div class="overlap-group">
          <img id="component-button" class="component" src="img/component-2-1.svg" />
          <div class="frame-wrapper">
            <div id="frame-300-1" class="frame-300">
              <img id="frame-img-mobile" class="img-2" src="img/solar-shield-keyhole-bold.svg" />
              <div class="frame-4">
                <div id="text-wrapper-500" class="text-wrapper-500">Terakdretasi</div>
                <p id="paragraph-500" class="p">Telah terdaftar di Kementerian Agama RI dengan SK No. 28092100388350003</p>
              </div>
            </div>
          </div>
          <img id="component-2-button" class="component-2" src="img/component-1-10.svg" />
        </div>
      </div>
    </div>

    <script>
      // Track the current frame index (starting from 1)
      let currentFrameIndex = 1;

      // Define the content for each frame (including images)
      const framesContent = [
        {
          title: 'Terakdretasi',
          text: 'Telah terdaftar di Kementerian Agama RI dengan SK No. 28092100388350003',
          imgSrc: 'img/solar-shield-keyhole-bold.svg'
        },
        {
          title: 'Terpercaya',
          text: 'Memberikan layanan standar pelaksanaan ibadah Umroh sesuai dengan tuntunan Rasulullah dan mengupayakan kenyamanan.',
          imgSrc: 'img/solar_hand-heart-bold-duotone.svg'
        },
        {
          title: 'Profesional',
          text: 'Memberikan pemahaman spiritual melalui manasik dan layanan fungsi integral dalam perjalanan Umroh.',
          imgSrc: 'img/solar_hand-stars-bold-duotone.svg'
        },
        {
          title: 'Dapat Diandalkan',
          text: 'Memberikan jaminan layanan dan pendampingan sebelum keberangkatan, selama di tanah suci sampai kepulangan.',
          imgSrc: 'img/solar_folder-favourite-bookmark-bold-duotone.svg'
        },
        {
          title: 'Variasi Paket',
          text: 'Program yang beragam di setiap paket, sehingga anda dapat memilih program yang sesuai dengan kebutuhan anda.',
          imgSrc: 'img/solar_tag-price-bold.svg'
        }
      ];

      // Function to update content and image based on the current frame index
      function updateContent() {
        const currentFrame = framesContent[currentFrameIndex - 1]; // Get current frame content
        document.getElementById('text-wrapper-500').textContent = currentFrame.title;
        document.getElementById('paragraph-500').textContent = currentFrame.text;
        document.getElementById('frame-img-mobile').src = currentFrame.imgSrc; // Update image src
      }

      // Get the buttons by their IDs
      const componentButton = document.getElementById('component-button');
      const component2Button = document.getElementById('component-2-button');

      // Add click event listener to the component button (decreases content)
      componentButton.addEventListener('click', () => {
        currentFrameIndex = (currentFrameIndex === 1) ? framesContent.length : currentFrameIndex - 1;
        updateContent();
      });

      // Add click event listener to the component-2 button (increases content)
      component2Button.addEventListener('click', () => {
        currentFrameIndex = (currentFrameIndex === framesContent.length) ? 1 : currentFrameIndex + 1;
        updateContent();
      });

      // Initialize with the first frame content
      updateContent();
    </script>

  </body>
</html>
