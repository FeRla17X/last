<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style/admin.css">
    <title></title>
  </head>
  <body>
    <div class="sidemenu w3-blue">
      <a href="#" onclick="section_slide(0)">სლაიდშოუ</a><br>
      <a href="#" onclick="section_slide(1)">გალერია</a><br>
      <a href="#" onclick="section_slide(2)">გმირები</a><br>
      <a href="#" onclick="section_slide(3)">სერვისი</a><br>
      <a href="#" onclick="section_slide(4)">მენიუ</a><br>
      <a href="#" onclick="section_slide(5)">შესახებ</a><br>
    </div>

    <!-- slideshow -->
    <div class="section">
      <div id="slideshow">
        <?php
        for ($i=0; $i < 3 ; $i++){
          echo "<div class='hidden'><img src='source/".$i.".png' alt='slide-img'></div>";
        }
        ?>
      </div>
      <img class='left-arrow' src="source/arrow.png" onclick="prev_next(-1);"alt="slide-arrow">
      <img class='right-arrow' src="source/arrow.png" onclick="prev_next(1);"alt="slide-arrow">
      <br><br>

      <form class="add" action="index.html" method="post">
        <input type="file" name="photos" id="finput"><br>
        <label for="finput">
          <img src="source/upload.png" alt="upload">
        </label><br>
        <input type="text" disabled name="" placeholder="დაამატე ფოტო სლაიდშოუში">
      </form>
      
    </div>

    <!-- gallery -->
    <div class="section">
      <div class="select">
        <a href='#' onclick="select_change('bdays')"> დაბადების დღეები / </a>
        <a href='#' onclick="select_change('food')"> კერძები / </a>
        <a href='#' onclick="select_change('interior')"> ინტერიერი /  </a>
        <a href='#' onclick="select_change('heros')"> გმირები  </a>

        <hr>
      </div>

      <form class="add" action="admin.php" method="post">
        <button class="w3-button w3-round w3-blue" name="button">დამატება</button><br>
        <input type="text" name="name" placeholder="სახელი"><br>
        <input type="date" name="" value=""><br>
        <select name="">
          <option disabled selected>აირჩიე სექცია</option>
          <option>დაბადების დღეები</option>
          <option>კერძები</option>
          <option>ინვენტარი</option>
          <option>გმირები</option>
        </select><br>
        <input type="file" name="photos" id="finput"><br>
        <label for="finput">
          <img src="source/upload.png" alt="upload">
        </label>
      </form>

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
        select_change('bdays');
        var hidden = getElementsByClassName('hidden');
        function select_change(x){
          $('.bdays').hide();
          $('.food').hide();
          $('.interior').hide();
          $('.heros').hide();
          $('.'+x).show();
        }
      </script>

    </div>

    <!-- heros -->
    <div class="section">
a
    </div>

    <!-- service -->
    <div class="section">
3
    </div>

    <!-- menu -->
    <div class="section">
2
    </div>

    <!-- about -->
    <div class="section">
4
    </div>
    <script>
      section_slide(0);
      function section_slide(x){
        var sections = document.getElementsByClassName("section");
        for (var i = 0; i < sections.length; i++) {
          sections[i].style.display = "none";
        }
        sections[x].style.display = "block";
      }

      // SLIDESHOW
        var main = function() {
        var first = document.getElementsByClassName('hidden');
        first[0].style.display = "block";
        var paused = false

        $('.left-arrow').click(function() {
          paused = true;
          $('#slideshow > div:first')
          .fadeOut(1000)
          .next()
          .fadeIn(1000)
          .end()
          .appendTo('#slideshow');
        });

        $('.right-arrow').click(function() {
          paused = true;
          $('#slideshow > div:last')
          .fadeIn(1000)
          .prependTo('#slideshow')
          .next()
          .fadeOut(1000)
          .end();
        });

        setInterval(function() {
          if (paused === false) {
            $('#slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow');
          };
        },  3000);
        };
        $(document).ready(main);

    </script>
  </body>
</html>
