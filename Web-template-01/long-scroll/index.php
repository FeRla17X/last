<?php include_once 'include/auto_class_loader.php' ?>

<!DOCTYPE html>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'>  </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<html lang="en" dir="ltr">
  <head>
    <title>Web 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="nightmode.js">
    <!-- <link rel="stylesheet" href="Js/nightmode.js"> -->
  </head>
  <body id="dark-background">
      <i id ="mtavari"></i>

      <div class="Header w3-light-gray">
        <img src="https://rb.gy/mkquhl" alt="Logo">
        <a href="#mtavari"> მთავარი </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="#product"> პროდუქტი </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="#lokacia"> ლოკაცია </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="#kontaqti"> კონტაქტი </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="#shesaxeb"> შესახებ </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        <div class="dark-button" id="mode">
          <i class='fas fa-moon night-mode ' id="moon"></i>
        </div>

        <div class="lang"><a href='#'> KA </a></div>
      </div>

      <div class="Poster" id="poster">
        <h1 class='w3-center'>𝒸𝓁𝑜𝓉𝒽</h1>
        <button type="button" name="button"  id="poster_but" ><h4  id='but_color'>შეძენა</h4></button>
        <form class="Search" action="index.html" method="post">
          <input type="text" name="search" class='search' autocomplete="off" placeholder="ძიება"value="">
          <a href="#"class="fa fa-search search-butt " aria-hidden="true"></a>
        </form>
      </div>

      <div class="Catalog">
        <div class="gallery js-flickity"
          data-flickity-options='{ "wrapAround": true ,"pageDots": false,"autoPlay": 1500 }'>
          <?php
            for ($i=0; $i < 20; $i++) {
              echo "<div class='gallery-cell'></div>";  }
          ?>
        </div>
      </div>
      <div class="Catalog">
        <div class="gallery js-flickity"
          data-flickity-options='{ "wrapAround": true ,"pageDots": false,"autoPlay": 1500 }'>
          <?php
            for ($i=0; $i < 20; $i++) {
              echo "<div class='gallery-cell'></div>";  }
          ?>
        </div>
      </div>


      <i id ="lokacia"></i>
      <div class="Location" >
        <li>𝓢𝓾𝓵𝔁𝓪𝓷 𝓴𝓿𝓮𝓻𝓷𝓪𝓭𝔃𝓲𝓼 33𝓪</li>
        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2978.3381357595163!2d44.78043026493833!3d41.71322183369588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e3!4m3!3m2!1d41.7130128!2d44.7826051!4m5!1s0x40440cd4dd1ef98d%3A0xbefb5bef42f2ce69!2z4YOS4YOb4YOY4YOg4YOX4YOQIOGDm-GDneGDlOGDk-GDkOGDnOGDmCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!3m2!1d41.713245099999995!2d44.7826587!5e0!3m2!1ska!2sge!4v1598810784490!5m2!1ska!2sge"
          width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
      </div>

      <i id ="kontaqti"></i>
      <div class="Contact"  id ="kontaqti">
        <form action="index.html" method="post"><br>
          <h2>მოგვწერეთ</h2>
          <input type="text" name="name" placeholder="სახელი" value=""><br>
          <input type="text" name="mail" placeholder="ელ. ფოსტა" value=""><br>
          <textarea type="text" name="description" placeholder="აღწერა" value=""></textarea>
          <br><br>
          <p><button class="w3-button w3-round-large ">შემდეგი</button>
        </form>
      </div>

      <i id ="shesaxeb"></i>
      <div class="About"  id ="shesaxeb">
          <div class="Description">
            <img src="source/desc2.jpg" alt="retail store">
            <div class="desc-text">
                    • სულხან კვერნაძის 33ა<br>
                    • საუკეთესო ხარისხის ტანისამოსი,<br>
                    ფეხსაცმელი  და აქსესუარები<br></div>
          </div>


          <div class="Description">
            <div class="desc-text">
              • ჩვენ ვართ საქართველოში <br>ოფიციალური
             წარმომადგენლები<br> უცხოური ბრენდების
             აირჩიე C
          </div>
          <img src="source/desc1.jpg" alt="retail store">
      </div>

      <div class="Footer">
        <h5><br><br><br>
          <a class='fa fa-address-card-o'>სულხან კვერნაძის 33ა</a></i> <br><br><br>
          <a class='fa fa-address-card-o'>555 555 555</a><br><br><br>
          <a class='fa fa-address-card-o'>GroupC@mail.com</a><br><br><br>
        </h5><br><br>
        <i class='fab fa-facebook fb'></i>
        <i class='fab fa-instagram inst'></i>
        <i class='fab fa-twitter twitter'></i><br>
        <h2>𝗣𝗼𝘄𝗲𝗿𝗲𝗱 𝗕𝘆 𝗨𝗗</h2><br>
        <p>©GROUP C &nbsp All rights reserved</p>
      </div>

      <script>
          document.addEventListener("DOMContentLoaded", function(event) {
              var div = document.getElementById('mode');
              div.addEventListener('click', function(e){
                var poster_button = document.getElementById('poster_but');
                var poster_button_color = document.getElementById('but_color');
                var moon = document.getElementById('moon');
                var bgdark = document.getElementById('dark-background');

                if ( bgdark.classList.contains('bg-dark')) { // removes
                bgdark.classList.remove('bg-dark');
                poster_button.classList.remove('bg-dark');
                poster_button_color.classList.remove('my-white');
                moon.classList.remove('my-white');
                }else{  //adds

                bgdark.classList.add('bg-dark');
                moon.classList.add('my-white');
                poster_button.classList.add('bg-dark');
                poster_button_color.classList.add('my-white');
              }
            });
          });
      </script>
      <script>
          document.getElementById("poster_but").onmouseout = function()
          {
              document.getElementById("poster").style.opacity='0.9';
          }
          document.getElementById("poster_but").onmouseover = function()
          {
              document.getElementById("poster_but").style.opacity='1';
              document.getElementById("poster").style.opacity='0.8';
          }
      </script>
  </body>
</html>
