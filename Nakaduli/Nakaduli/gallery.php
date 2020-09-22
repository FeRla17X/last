<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style/main.css">
    <title></title>
    <style >
    .select{
        text-align: center;
    }
        a{
          text-decoration: none;
          color:#333;
          font-size:1.3vw;
          display:inline;
          opacity:0.9;
        }
        h2{display:inline;}
        .box{
          width:20%;
          height:30vh;
          background-color: #333;
          color:white;
          margin:5% 0 0 4%;
          float:left;
          text-align: center;
        }
        .box img{
          width:100%;
          height:25vh;
        }
    </style>
  </head>
  <body>
    <div class="Header">
      <img src="source/nakaduli-logo.png" alt="Nakaduli-logo">
      <a href="#slideshow" onclick="goto()">მთავარი</a>
      <a href="#service" onclick="goto()">სერვისი</a>
      <a href="#" onclick="goto()">მენიუ</a>
      <a href="gallery.php" onclick="goto()">გალერია</a>
      <a href="#Footer" onclick="goto()">შესახებ</a>
    </div>
    <br>
    <div class="select">
      <a href='#' onclick="section_change('bdays')"> დაბადების დღეები / </a>
      <a href='#' onclick="section_change('food')"> კერძები / </a>
      <a href='#' onclick="section_change('interior')"> ინტერიერი /  </a>
      <a href='#' onclick="section_change('heros')"> გმირები  </a>

      <hr>
    </div>

    <div class="bdays hidden">
      <?php
        for ($i=0; $i < 32; $i++) {
          echo "<div class='box'><img src='source/bdays.png'><b>12.12.20</b></div>";
        }
      ?>
    </div>
    <div class="food hidden">
      <?php
        for ($i=0; $i < 32; $i++) {
          echo "<div class='box'><img src='source/food.png'><b>pizza</b></div>";
        }
      ?>
    </div>
    <div class="interior hidden">
      <?php
        for ($i=0; $i < 32; $i++) {
          echo "<div class='box'><img src='source/interior.png'><b>interior</b></div>";
        }
      ?>
    </div>
    <div class="heros hidden">
      <?php
        for ($i=0; $i < 32; $i++) {
          echo "<div class='box'><img src='source/hero.png'><b>batman</b></div>";
        }
      ?>
    </div>

    <script>
      section_change('bdays');
      var hidden = getElementsByClassName('hidden');
      function section_change(x){
        $('.bdays').hide();
        $('.food').hide();
        $('.interior').hide();
        $('.heros').hide();
        $('.'+x).show();
      }
    </script>
  </body>
</html>
